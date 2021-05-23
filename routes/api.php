<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/', function (Request $request) {
    return response()->json(['message' => 'Seja bem vindo a PENSOTEC API!', 'status' => 'Conectado com sucesso.']);
});

Route::resource('Vendedores', 'VendedoresController');
Route::resource('Produtos', 'ProdutosController');
