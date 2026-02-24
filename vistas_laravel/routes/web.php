<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UIController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Welcome (opcional)
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

// Login
Route::get('/', [UIController::class, 'login'])->name('login');
Route::post('/login', [UIController::class, 'auth'])->name('login.auth');

// Rutas protegidas
Route::middleware('fakeAuth')->group(function () {

    // Dashboard
    Route::get('/dashboard', [UIController::class, 'dashboard'])
        ->name('dashboard');

    // Categorías
    Route::get('/categorias', [UIController::class, 'categories'])
        ->name('categorias.index');

    // Productos
    Route::get('/productos', [UIController::class, 'products'])
        ->name('productos.index');

    // Crear producto
    Route::get('/productos/crear', [UIController::class, 'productCreate'])
        ->name('productos.create');

    // Ventas
    Route::get('/ventas', [UIController::class, 'sales'])
        ->name('ventas.index');

    // Reportes
    Route::get('/reportes', [UIController::class, 'reports'])
        ->name('reportes.index');

    // Logout
    Route::get('/logout', [UIController::class, 'logout'])
        ->name('logout');

});
