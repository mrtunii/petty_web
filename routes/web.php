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

Route::get('/', 'HomeController@index')->name('home');
Route::get('auth/login','UserController@login')->name('login');
Route::post('auth/login','UserController@postLogin');
Route::get('auth/register','UserController@register');
Route::post('auth/register','UserController@postRegister');
Route::get('auth/logout','UserController@logout');

Route::get('post/{id}', 'PostController@detail');
Route::get('api/comments/get/positions/{post_id}','CommentController@getPositions');


Route::group(['middleware' => 'auth'], function () {
        Route::get('/create','PostController@create');
        Route::post('/submit','PostController@submit');
        Route::get('/comment/add/{post_id}','CommentController@add');
        Route::post('/comment/submit','CommentController@insert');
        Route::get('comments/remove/{post_id}','CommentController@remove');
});
