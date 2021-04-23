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
    return view('welcome');
});

Route::get('/avisos', function(){
    return view('avisos', array('nome' => 'Nicolas', 'mostrar' => true, 'avisos' => array(	['id' => 1,'texto' => 'Feriado na Quarta-Feira'],[	'id' => 2,'texto' => 'Semana que vem vamos todos trabalhar em Home Office!'])));
});
