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
    return 'Olá, seja bem vindo ao curso! hello world';
});

Route::get('/sobrenos', function () {
    return 'Olá, seja bem vindo a sobrenos! hello world';
});

Route::get('/contato', function () {
    return 'Olá, seja bem vindo ao contato! hello world';
});
