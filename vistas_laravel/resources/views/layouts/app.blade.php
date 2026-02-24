<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @vite(['resources/css/app.css'])
</head>
<body>

<div class="app">

    <!-- SIDEBAR -->
    <div class="sidebar">

        <div class="logo"></div>

        <ul>
            <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
                <a href="/dashboard">Panel de control</a>
            </li>
            <li class="{{ request()->is('categorias') ? 'active' : '' }}">
                <a href="/categorias">Categorías</a>
            </li>
            <li class="{{ request()->is('productos') ? 'active' : '' }}">
                <a href="/productos">Productos</a>
            </li>
            <li class="{{ request()->is('ventas') ? 'active' : '' }}">
                <a href="/ventas">Ventas</a>
            </li>
            <li class="{{ request()->is('reportes') ? 'active' : '' }}">
                <a href="/reportes">Reporte de ventas</a>
            </li>
        </ul>

    </div>

    <!-- MAIN -->
    <div class="main">

        <!-- TOPBAR -->
        <div class="topbar">

            <select>
                <option>Admin</option>
            </select>

            <button class="btn">Cerrar sesión</button>

        </div>

        <!-- CONTENT -->
        <div class="content">

            @yield('content')

        </div>

    </div>

</div>

</body>
</html>