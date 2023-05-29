<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\PedidosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios', [UsuariosController::class, 'index'])->name('usuarios.index');
Route::get('/usuarios/crear', [UsuariosController::class, 'create'])->name('usuarios.create');

Route::get('/productos', [ProductosController::class, 'index'])->name('productos.index');
Route::get('/productos/crear', [ProductosController::class, 'create'])->name('productos.create');
Route::get('/productos/{id}', [ProductosController::class, 'show'])->name('productos.show');

Route::get('/pedidos', [PedidosController::class, 'index'])->name('pedidos.index');


