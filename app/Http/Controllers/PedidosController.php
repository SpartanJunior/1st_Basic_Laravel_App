<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidosController extends Controller
{
    public function index()
    {
        return view('pedidos.index');
    }

    public function create()
    {
        return view('pedidos.create');
    }

    public function store(Request $request)
    {
        // Lógica para almacenar los datos del formulario
        return redirect()->route('pedidos.index');
    }
}