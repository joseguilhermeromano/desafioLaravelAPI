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

Route::get('/', 'VendedoresController@list');

Route::get('/produtos', 'ProdutosController@list');
Route::match(array('GET', 'POST'), '/produtos/cadastrar', 'ProdutosController@insert');
Route::match(array('GET', 'POST'), '/produtos/alterar/{id}', 'ProdutosController@edit');
Route::get('/produtos/excluir/{id}', 'ProdutosController@delete');


Route::get('/vendedores', 'VendedoresController@list');
Route::match(array('GET', 'POST'), '/vendedores/cadastrar', 'VendedoresController@insert');
Route::match(array('GET', 'POST'), '/vendedores/alterar/{id}', 'VendedoresController@edit');
Route::get('/vendedores/excluir/{id}', 'VendedoresController@delete');

