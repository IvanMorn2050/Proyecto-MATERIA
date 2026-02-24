@extends('layouts.app')

@section('title','Productos')

@section('content')

<div class="panel">

    <h2>Productos</h2>

    <table>
        <tr>
            <th>#</th>
            <th>Imagen</th>
            <th>Descripción</th>
            <th>Categoría</th>
            <th>Stock</th>
            <th>Compra</th>
            <th>Venta</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>
    </table>

    <br>

    <button class="btn">Agregar producto</button>

</div>

@endsection