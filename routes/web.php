<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;



Route::get('/', function () {
    return view('index');
});


Route::prefix('produtos')->group(function() {
    Route::get('/', [ProdutosController::class, 'index'] )->name('produto.index');

    Route::get('/cadastrarProduto', [ProdutosController::class, 'cadastrarProduto'] )->name('cadastrar.produto');
    Route::post('/cadastrarProduto', [ProdutosController::class, 'cadastrarProduto'] )->name('cadastrar.produto');

    Route::delete('/delete', [ProdutosController::class, 'delete'])->name('produto.delete');
});