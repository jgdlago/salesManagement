<?php

use App\Http\Controllers\ClientesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;



Route::get('/', function () {
    return view('index');
});

// Produtos
Route::prefix('produtos')->group(function() {
    Route::get('/', [ProdutosController::class, 'index'] )->name('produto.index');

    Route::get('/cadastrarProduto', [ProdutosController::class, 'cadastrarProduto'] )->name('cadastrar.produto');
    Route::post('/cadastrarProduto', [ProdutosController::class, 'cadastrarProduto'] )->name('cadastrar.produto');

    Route::get('/atualizarProduto/{id}', [ProdutosController::class, 'atualizarProduto'] )->name('atualizar.produto');
    Route::put('/atualizarProduto/{id}', [ProdutosController::class, 'atualizarProduto'] )->name('atualizar.produto');


    Route::delete('/delete', [ProdutosController::class, 'delete'])->name('produto.delete');
});

// Clientes
Route::prefix('clientes')->group(function() {
    Route::get('/', [ClientesController::class, 'index'] )->name('cliente.index');

    Route::get('/cadastrarCliente', [ClientesController::class, 'cadastrarCliente'] )->name('cadastrar.cliente');
    Route::post('/cadastrarCliente', [ClientesController::class, 'cadastrarCliente'] )->name('cadastrar.cliente');

    Route::get('/atualizarCliente/{id}', [ClientesController::class, 'atualizarCliente'] )->name('atualizar.cliente');
    Route::put('/atualizarCliente/{id}', [ClientesController::class, 'atualizarCliente'] )->name('atualizar.cliente');


    Route::delete('/delete', [ClientesController::class, 'delete'])->name('cliente.delete');
});