from fastapi import APIRouter, Request
from fastapi.templating import Jinja2Templates

router = APIRouter()
templates = Jinja2Templates(directory="templates")


@router.get("/carrito")
async def carrito(request: Request):
    return templates.TemplateResponse(request=request, name="carrito.html")