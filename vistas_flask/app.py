from fastapi import FastAPI
from fastapi.templating import Jinja2Templates
from fastapi.staticfiles import StaticFiles
from routers import carrito, catalogo, detalle, pedidos, auth

app = FastAPI()

templates = Jinja2Templates(directory="templates")
app.mount("/static", StaticFiles(directory="static"), name="static")

app.include_router(auth.router)
app.include_router(catalogo.router)
app.include_router(pedidos.router)
app.include_router(carrito.router)
app.include_router(detalle.router)