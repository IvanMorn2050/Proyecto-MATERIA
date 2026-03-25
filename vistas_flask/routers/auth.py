from fastapi import APIRouter, Request, Depends, Form
from fastapi.templating import Jinja2Templates
from fastapi.responses import RedirectResponse
from sqlalchemy.orm import Session
from db.database import SessionLocal
from db import models

router = APIRouter()
templates = Jinja2Templates(directory="templates")


def get_db():
    db = SessionLocal()
    try:
        yield db
    finally:
        db.close()


@router.get("/")
@router.get("/login")
async def login_page(request: Request):
    return templates.TemplateResponse(request=request, name="login.html")


@router.post("/login")
async def login(
    request: Request,
    correo: str = Form(...),
    contrasena: str = Form(...),
    db: Session = Depends(get_db),
):
    usuario = db.query(models.Usuario).filter(models.Usuario.correo == correo).first()
    if not usuario or usuario.contraseña != contrasena:
        return templates.TemplateResponse(
            request=request,
            name="login.html",
            context={"error": "Correo o contraseña incorrectos"}
        )
    return RedirectResponse("/catalogo", status_code=302)


@router.get("/register")
async def register_page(request: Request):
    return templates.TemplateResponse(request=request, name="register.html")


@router.post("/register")
async def register(
    request: Request,
    nombre: str = Form(...),
    correo: str = Form(...),
    contrasena: str = Form(...),
    confirmar: str = Form(...),
    db: Session = Depends(get_db),
):
    if contrasena != confirmar:
        return templates.TemplateResponse(
            request=request,
            name="register.html",
            context={"error": "Las contraseñas no coinciden"}
        )
    existe = db.query(models.Usuario).filter(models.Usuario.correo == correo).first()
    if existe:
        return templates.TemplateResponse(
            request=request,
            name="register.html",
            context={"error": "El correo ya está registrado"}
        )
    nuevo = models.Usuario(nombre=nombre, correo=correo, contraseña=contrasena, id_rol=2)
    db.add(nuevo)
    db.commit()
    return RedirectResponse("/login", status_code=302)