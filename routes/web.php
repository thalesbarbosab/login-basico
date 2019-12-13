<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

//rotas de atutenticação
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/produto', 'ProdutoController');//->middleware('auth') ;
Route::resource('/departamento', 'DepartamentoController');
Route::get('/usuario', function(){
    return view('layouts.usuario');
});
