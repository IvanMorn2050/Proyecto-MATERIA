from fastapi import APIRouter, Request, Depends, Query
from fastapi.templating import Jinja2Templates
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


@router.get("/catalogo")
async def catalogo(
    request: Request,
    buscar: str = Query(default=""),
    categoria: int = Query(default=0),
    db: Session = Depends(get_db),
):
    categorias = db.query(models.Categoria).all()

    query = db.query(models.Autoparte)

    if buscar:
        query = query.filter(models.Autoparte.nombre.ilike(f"%{buscar}%"))

    if categoria:
        query = query.filter(models.Autoparte.id_categoria == categoria)

    autopartes = query.all()

    return templates.TemplateResponse(
        request=request,
        name="catalogo.html",
        context={
            "autopartes": autopartes,
            "categorias": categorias,
            "buscar": buscar,
            "categoria_activa": categoria,
        },
    )