@extends('layouts.app')

@section('title','Categorías')

@section('content')

<div class="panel">

    <h2>Agregar categoría</h2>

    <input type="text" placeholder="Nombre">

    <br><br>

    <button class="btn">Agregar</button>

</div>

<div class="panel">

    <h2>Lista de categorías</h2>

    <table>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
    </table>

</div>

@endsection