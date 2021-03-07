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
Route::get('/posts/{post}', 'PostController@edit')->name('posts.edit');
Route::post('/posts/{post}', 'PostController@update')->name('posts.update');
Route::delete('/posts/{post}', 'PostController@destroy')->name('posts.destroy');
Route::get('/posts', 'PostController@show')->name('posts.show');

// Route::post('/posts', 'PostController@confirm')->name('posts.confirm');

// user
Route::resource('users', 'UserController');
Route::get('/', 'UserController@index')->name('users.index');
Route::get('/users', 'UserController@create')->name('users.create');
Route::post('/users', 'UserController@store')->name('users.store');
Route::get('/users/{user}', 'UserController@edit')->name('users.edit');
Route::post('/users/{user}', 'UserController@update')->name('users.update');
Route::delete('/users/{user}', 'UserController@destroy')->name('users.destroy');
Route::get('/posts', 'UserController@show')->name('users.show');

// Route::post('/users/{user}', 'UserController@confirm')->name('users.confirm');

Route::get('/exportcsv', 'PostController@exportIntoCSV');
Route::get('/getallcsv', 'PostController@getAllCsv');
Route::get('/download', 'PostController@downloadPDF');
Route::get('/importcsv', 'PostController@importCsv');
Route::post('/import', 'PostController@import')->name('import');
