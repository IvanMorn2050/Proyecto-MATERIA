@extends('layouts.app')

@section('title','Agregar producto')

@section('content')

<div class="panel">

    <h2>Agregar producto</h2>

    <div class="form-group">
        <label>Descripción</label>
        <input type="text">
    </div>

    <div class="form-row">

        <div class="form-group">
            <label>Categoría</label>
            <select></select>
        </div>

        <div class="form-group">
            <label>Imagen</label>
            <input type="file">
        </div>

        <div class="form-group">
            <label>Cantidad</label>
            <input type="number">
        </div>

    </div>

    <div class="form-row">

        <div class="form-group">
            <label>Precio compra</label>
            <input type="number">
        </div>

        <div class="form-group">
            <label>Precio venta</label>
            <input type="number">
        </div>

    </div>

    <button class="btn">Guardar</button>

</div>

@endsection