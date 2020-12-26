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


Route::get('/profile', 'ProfileController@index');
Route::get('/profile/hobby', 'ProfileController@hobby');



Route::get('/blog/home', 'BlogController@home');
Route::get('/blog/post1', 'BlogController@post1');
Route::get('/blog/post2', 'BlogController@post2');
Route::get('/blog/data', 'BlogController@data');

Route::get('/bmi', 'BmiController@index');
Route::post('/bmi/calc', 'BmiController@calc');

Route::get('/fortune', 'FortuneController@index');
Route::post('/fortune/result', 'FortuneController@result');


Route::get('/post', 'PostController@index');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/post/create', 'PostController@create');
    Route::get('/post/edit/{id}', 'PostController@edit');
    Route::get('/post/delete/{id}', 'PostController@delete');
    Route::post('/post/store', 'PostController@store');
    Route::post('/post/update/{id}', 'PostController@update');
});

Route::get('/todo', 'TodoController@index');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/todo/create', 'TodoController@create');
    Route::get('/todo/edit/{id}', 'TodoController@edit');
    Route::get('/todo/register/{name}', 'TodoController@register');
    Route::post('/todo/store', 'TodoController@store');
    Route::post('/todo/update/{id}', 'TodoController@update');
    Route::get('/todo/delete/{id}', 'TodoController@delete');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');














