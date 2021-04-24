<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\FuncionarioController;

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
    return view('welcome');
});

Route::group(['prefix' => 'clientes'], function (){
    Route::get('/listar', [ClientesController::class, 'listar'])->middleware('auth');
});

Route::group(['prefix' => 'funcionario'], function (){
    Route::get('/listar', [FuncionarioController::class, 'listar']);
});

Route::get('/avisos', function(){
    return view('avisos', array('nome' => 'Nicolas', 'mostrar' => true, 'avisos' => array(	['id' => 1,'texto' => 'Feriado na Quarta-Feira'],[	'id' => 2,'texto' => 'Semana que vem vamos todos trabalhar em Home Office!'])));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
