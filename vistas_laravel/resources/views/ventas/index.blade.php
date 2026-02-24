@extends('layouts.app')

@section('title','Ventas')

@section('content')

<div class="panel">

    <h2>Ventas</h2>

    <table>
        <tr>
            <th>#</th>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Total</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>
    </table>

    <br>

    <button class="btn">Agregar venta</button>

</div>

@endsection