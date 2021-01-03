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

Route::get('/', 'ArticleController@index');
Route::post('/articles', 'ArticleController@store');
Route::get('/articles/create', 'ArticleController@create')->middleware('auth');
Route::get('/articles/{article}', 'ArticleController@show');
Route::get('/articles/{article}/edit', 'ArticleController@edit')->middleware('auth');
Route::get('/articles/{article}/delete', 'ArticleController@destroy')->middleware('auth');
Route::put('/articles/{article}', 'ArticleController@update');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
