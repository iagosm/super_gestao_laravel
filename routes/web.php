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

Route::get('/', 'PrincipalController@principal');

Route::get('/sobrenos', 'SobreNosController@sobreNos');

Route::get('/contato', 'ContatoController@contato');

Route::get('/contato/{nome}/{chaves}/{hehe}', function(string $nome, string $chave, string $hehe) {
  echo 'estamos aqui, só pra testar ' . $nome .' e de quebrada temos a chave:' . $chave . ' e ainda o hehe: ' . $hehe;
});