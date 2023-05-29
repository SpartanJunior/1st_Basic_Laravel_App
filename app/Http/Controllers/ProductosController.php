<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index()
    {
        return view('productos.index');
    }

    public function show($id)
    {
        return view('productos.show', compact('id'));
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        // Lógica para almacenar los datos del formulario
        return redirect()->route('productos.index');
    }
}