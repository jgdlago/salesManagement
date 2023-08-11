<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;



Route::get('/', function () {
    return view('index');
});


Route::prefix('produtos')->group(function() {
    Route::get('/', [ProdutosController::class, 'index'] )->name('produto.index');
});