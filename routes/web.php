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

Route::get('/teste', 'IndexController@getCpf'); //o primeiro parametro é a rota e o segundo e o chamado da classe e @ é o método.

Route::get('/teste/{numero}', 'IndexController@getCpfDevedor');

Route::get('/home', 'IndexController@getHome');

Route::get('/', function() {
    return 'hello world';
});
