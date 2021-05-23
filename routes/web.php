<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('vendedores');
});

Route::get('/vendedores', function () {
    return view('vendedores');
});

Route::get('/produtos', function () {
    return view('produtos');
});

Route::get('/produtos/cadastrar', function () {
    return view('formularios.inserirProduto');
});

Route::get('/vendedores/cadastrar', function () {
    return view('formularios.inserirVendedor');
});

