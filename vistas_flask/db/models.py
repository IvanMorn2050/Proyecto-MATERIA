from sqlalchemy import Column, Integer, String, Text, DECIMAL, ForeignKey, DateTime
from sqlalchemy.orm import relationship
from db.database import Base
from datetime import datetime


class Rol(Base):
    __tablename__ = "roles"
    id_rol = Column(Integer, primary_key=True, autoincrement=True)
    nombre_rol = Column(String(50), nullable=False)


class Categoria(Base):
    __tablename__ = "categorias"
    id_categoria = Column(Integer, primary_key=True, autoincrement=True)
    nombre = Column(String(100), nullable=False)
    descripcion = Column(Text)


class Autoparte(Base):
    __tablename__ = "autopartes"
    id_autoparte = Column(Integer, primary_key=True, autoincrement=True)
    nombre = Column(String(100), nullable=False)
    descripcion = Column(Text)
    precio = Column(DECIMAL(10, 2), nullable=False)
    stock = Column(Integer, nullable=False)
    imagen = Column(String(255))
    id_categoria = Column(Integer, ForeignKey("categorias.id_categoria"))
    categoria = relationship("Categoria")


class Usuario(Base):
    __tablename__ = "usuarios"
    id_usuario = Column(Integer, primary_key=True, autoincrement=True)
    nombre = Column(String(100), nullable=False)
    correo = Column(String(100), unique=True)
    contraseña = Column(String(255), nullable=False)
    fecha_registro = Column(DateTime, default=datetime.now)
    id_rol = Column(Integer, ForeignKey("roles.id_rol"))
    rol = relationship("Rol")


class Cliente(Base):
    __tablename__ = "clientes"
    id_cliente = Column(Integer, primary_key=True, autoincrement=True)
    id_usuario = Column(Integer, ForeignKey("usuarios.id_usuario"), unique=True)
    telefono = Column(String(20))
    direccion = Column(String(150))
    usuario = relationship("Usuario")