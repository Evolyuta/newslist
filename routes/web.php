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

Route::get('/', 'PostsController@list');

Route::get('/manager', function () {
    return view('manager');
});

Route::get('/p/create', 'PostsController@create');
Route::get('/p/{post}', 'PostsController@show');
Route::get('/p/{post}/edit', 'PostsController@edit');
Route::patch('/p/{post}', 'PostsController@update');
Route::delete('/p/{post}', 'PostsController@destroy');
Route::post('/p', 'PostsController@store');
Route::post('/filter', 'PostsController@filter');

