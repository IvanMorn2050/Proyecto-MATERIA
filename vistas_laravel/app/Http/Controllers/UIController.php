<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UIController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function auth(Request $request)
    {
        // Login falso
        session(['logged' => true]);
        return redirect()->route('dashboard');
    }

    public function logout()
    {
        session()->forget('logged');
        return redirect()->route('login');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function categories()
    {
        return view('categorias.index');
    }

    public function products()
    {
        return view('productos.index');
    }

    public function productCreate()
    {
        return view('productos.create');
    }

    public function sales()
    {
        return view('ventas.index');
    }

    public function reports()
    {
        return view('reportes.index');
    }
}
