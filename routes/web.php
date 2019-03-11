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
    return view('site/inicio');
});

Route::get('sobre/', function () {
    return view('site/sobre');
});

Route::get('produtos/', function () {
    return view('site/produtos');
});

Route::get('produto', function () {
    return view('site/produto');
});

Route::get('projetos/', function () {
    return view('site/projetos');
});

Route::get('contato/', function () {
    return view('site/contato');
});

Route::get('admin/', function () {
    return view('admin/inicio');
});


Route::get('admin/newsletter','NewsLetter@index');
Route::get('admin/newsletter/apagar/{id}','NewsLetter@destroy');
Route::get('admin/newsletter/csv/','NewsLetter@csv');
Route::get('admin/categoria','CategoryController@index');
Route::post('admin/categoria/','CategoryController@store');