@extends('layouts.app')

@section('title','Reportes')

@section('content')

<div class="panel">

    <h2>Reporte de ventas</h2>

    <div class="report-filters">

        <input type="date">
        <input type="date">

        <button class="btn">Mensual</button>
        <button class="btn">Diario</button>

    </div>

    <table>
        <tr>
            <th>#</th>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Total</th>
            <th>Fecha</th>
        </tr>
    </table>

    <br>

    <button class="btn">Descargar PDF</button>

</div>

@endsection