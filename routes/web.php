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

Route::get('/', 'TrashController@index');

Route::get('/trashes', 'TrashController@index');
Route::get('/trashes/create', 'TrashController@create');
Route::post('/trashes', 'TrashController@store');
Route::delete('/trashes/{trash}', 'TrashController@destroy');

Route::get('/categories', 'CategoryController@index');
Route::get('/categories/create', 'CategoryController@create');
Route::post('/categories', 'CategoryController@store');
Route::delete('/categories/{category}', 'CategoryController@destroy');
