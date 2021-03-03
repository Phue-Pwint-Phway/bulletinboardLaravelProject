<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('login');
// });

// post
Route::resource('posts', 'PostController');

Route::get('/', 'PostController@index')->name('posts.index');
Route::get('/posts', 'PostController@create')->name('posts.create');
Route::post('/posts', 'PostController@store')->name('posts.store');
Route::get('/posts/{post}', 'UserController@edit')->name('posts.edit');
Route::post('/posts/{post}', 'UserController@update')->name('posts.update');

// Route::post('/posts', 'PostController@confirm')->name('posts.confirm');


// user
Route::resource('user', 'UserController');
