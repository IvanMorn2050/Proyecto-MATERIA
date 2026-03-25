from fastapi import APIRouter, Request
from fastapi.templating import Jinja2Templates

router = APIRouter()
templates = Jinja2Templates(directory="templates")


@router.get("/pedidos")
async def pedidos(request: Request):
    return templates.TemplateResponse(request=request, name="pedidos.html")