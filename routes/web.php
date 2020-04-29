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

Route::get('/', 'PostsController@index');
Route::get('/dashboard', 'PostsController@index');
Route::get('/posts', 'PostsController@posts');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}/edit', 'PostsController@edit');
Route::put('/posts/{post}', 'PostsController@update');
Route::delete('/posts/{post}', 'PostsController@destroy');
Route::get('/posts/search', 'PostsController@search');

Route::get('/categories', 'CategoriesController@index');
Route::post('/categories', 'CategoriesController@store');
Route::get('/categories/{categorie}/edit', 'CategoriesController@edit');
Route::put('/categories/{categorie}', 'CategoriesController@update');
Route::delete('/categories/{categorie}', 'CategoriesController@destroy');
Route::get('/categories/search', 'CategoriesController@search');

Route::get('/users', 'UserController@index');
Route::post('/users', 'UserController@store');
Route::get('/users/{user}/edit', 'UserController@edit');
Route::put('/users/{user}', 'UserController@update');
Route::delete('/users/{user}', 'UserController@destroy');
Route::get('/users/search', 'UserController@search');

Route::get('/profile', 'PostsController@profile');
Route::get('/settings', 'PostsController@settings');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
