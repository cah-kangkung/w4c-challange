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

Route::get('/trash', 'TrashController@index');
Route::get('/trash/create', 'TrashController@create');

Route::get('/category', 'CategoriesController@index');
Route::get('/category/create', 'CategoriesController@create');
