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
    return view('paginas.home');
});

Route::get('/sobre', function () {
    return view('paginas.sobre');
});

Route::get('/contato', function () {
    return view('paginas.contato');
});
Route::get('/projetos/NighNights', function () {
    return view('paginas.NighNights');
});
Route::get('/projetos/ImobiliariaCanal', function () {
    return view('paginas.ImobiliariaCanal');
});