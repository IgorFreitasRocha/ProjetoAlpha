<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

 
Route::get('/', [ProdutoController::class, 'index'])-> name('pages.index');


Route::get('/pages/{id}', [ProdutoController::class, 'show'])->name('produto.show');

Route::get('/login', function(){
    return view('pages.login');
})->name('login');

Route::get('/register', function(){
    return view('pages.register');
})->name('register');






