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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', [
        'uses' => 'Auth\AdminLoginController@dashboard',
        'as' => 'dashboard',
    ]);


    Route::get('/post/create', [
        'uses' => 'PostsController@create',
        'as' => 'post.create',
    ]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
