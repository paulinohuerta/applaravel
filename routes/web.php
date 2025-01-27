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

Route::get('/', 'PagesController@home' );
Route::get('/about', 'PagesController@about' );
Route::get('/contact', 'PagesController@contact' );


Route::post('/create', 'viviendacontroller@create');
#Route::get('/', 'viviendacontroller@read');
Route::post('/update/{id}', 'viviendacontroller@update');
Route::delete('/delete/{id}', 'viviendacontroller@delete');
Route::get('/update/{id}', 'viviendacontroller@edit');
Route::get('/delete/{id}', 'viviendacontroller@preguntar');