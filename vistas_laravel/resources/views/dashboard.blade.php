@extends('layouts.app')

@section('title','Dashboard')

@section('content')

<div class="cards">

    <div class="card green">
        <div class="icon"></div>
        <div>
            <h3>35</h3>
            <p>Usuarios</p>
        </div>
    </div>

    <div class="card red">
        <div class="icon"></div>
        <div>
            <h3>10</h3>
            <p>Categorías</p>
        </div>
    </div>

    <div class="card blue">
        <div class="icon"></div>
        <div>
            <h3>99</h3>
            <p>Productos</p>
        </div>
    </div>

    <div class="card yellow">
        <div class="icon"></div>
        <div>
            <h3>23</h3>
            <p>Ventas</p>
        </div>
    </div>

</div>

<div class="panel">

    <h2>Productos más vendidos</h2>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Total</th>
        </tr>
    </table>

</div>

<div class="panel">

    <h2>Últimas ventas</h2>

    <table>
        <tr>
            <th>#</th>
            <th>Producto</th>
            <th>Fecha</th>
            <th>Total</th>
        </tr>
    </table>

</div>

@endsection