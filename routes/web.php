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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('kategorijas','KategorijasController');

Route::get('pitanjas/create/{kategorijas_id?}', 'PitanjasController@create');
Route::get('pitanjas/edit/{id_pitanja?}', 'PitanjasController@edit');
Route::resource('pitanjas','PitanjasController');

Route::get('odgovoris/create/{pitanja_id?}', 'OdgovorisController@create');
//Route::get('pitanjas/edit/{id_pitanja?}', 'PitanjasController@edit');
Route::resource('odgovoris','OdgovorisController');

