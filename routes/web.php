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

Route::get('/', ['uses' => 'ArticlesController@index', 'as' => 'articles']);
Route::get('articles', ['uses' => 'ArticlesController@index', 'as' => 'articles']);
Route::post('articles', 'ArticlesController@store');
Route::post('comments', 'CommentsController@store');