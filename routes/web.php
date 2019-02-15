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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/nome/{nome}", function($nome){
    return "<h1> Olá  $nome</h1>";
});

/**
 * Validando os parametros da rota
 */
Route::get("rota/{nome}/{n}", function($nome, $n){
    echo "Entrei";
})->where("n", "[0-9]")->where("nome", "[A-Za-z]");

Rote::get("rota/{nome?}", function ($nome = null){
    echo "entrei";
});
