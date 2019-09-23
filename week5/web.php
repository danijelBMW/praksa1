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

Route::get('/users', 'UsersController@index');

Route::post('/register', 'RegisterController@store');
Route::get('/register', 'RegisterController@index');
Route::get('edit/{id}', 'UsersController@edit');
Route::post('update/{id}', 'UsersController@update')->name('updateuser');
Route::get('delete/{id}','UsersController@delete');

Route::get('/posts', 'postController@index');
Route::get('/createPost','postController@store');
Route::post('/createPost','postController@store')->name("createPost");
Route::get('delete/{id}', 'postController@delete');
Route::get('/edit/{id}', 'postController@edit');
Route::post('/update/{id}', 'postController@update')->name('updatePost');
Route::get('/posts/{id}/like','postController@like');
Route::get('/contact', 'HomeController@contact');
Route::get('/about', 'HomeController@about');
Route::get('/index', 'HomeController@index');

