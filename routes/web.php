<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ListaCategoriaController;
use \App\Http\Controllers\ListaProdutoController;
use \App\Http\Controllers\CarrinhoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/{categoria?}', [ListaCategoriaController::class, 'listar'])->name('lista');

Route::get('/produto/{produto}', [ListaProdutoController::class, 'exibir'])->name('produto');

Route::post('/adicionar', [CarrinhoController::class, 'adicionar'])->name('adicionar');

Route::get('/remover/{produto_id}', [CarrinhoController::class, 'remover'])->name('remover');

Auth::routes();

