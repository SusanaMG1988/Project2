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
    return view('inicio');
})->name('inicio');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/recetas-de-pasteles', 'PastelController@index')->name('index');
Route::get('/recetas-de-pasteles/crear','PastelController@crear')->name("nuevo_pastel");
Route::post('/recetas-de-pasteles/store','PastelController@store')->name("store_pasteles");
