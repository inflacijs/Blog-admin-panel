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
Route::group(['middleware' => 'auth'], function(){

        Route::get('/', 'PostController@index');
        Route::get('/dashboard', 'PostController@index');
        Route::get('/posts', 'PostController@posts');
        Route::post('/posts', 'PostController@store');
        Route::get('/posts/{post}/edit', 'PostController@edit');
        Route::put('/posts/{post}', 'PostController@update');
        Route::delete('/posts/{post}', 'PostController@destroy');
        Route::get('/posts/search', 'PostController@search');

        Route::get('/categories', 'CategorieController@index');
        Route::post('/categories', 'CategorieController@store');
        Route::get('/categories/{categorie}/edit', 'CategorieController@edit');
        Route::put('/categories/{categorie}', 'CategorieController@update');
        Route::delete('/categories/{categorie}', 'CategorieController@destroy');
        Route::get('/categories/search', 'CategorieController@search');

        Route::get('/users', 'UserController@index');
        Route::post('/users', 'UserController@store');
        Route::get('/users/{user}/edit', 'UserController@edit');
        Route::put('/users/{user}', 'UserController@update');
        Route::delete('/users/{user}', 'UserController@destroy');
        Route::get('/users/search', 'UserController@search');

        Route::get('/profile', 'ProfileController@edit');
        Route::post('/profile', 'ProfileController@update');
        Route::get('/settings', 'PostController@settings');

        Route::get('/logout', 'LogoutController@logout')->name('logout');

});



// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
  ]);

