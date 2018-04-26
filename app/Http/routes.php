<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('contact',['as'=>'pages.contact','uses'=>'pagesController1@contact']);
// Route::get('pages','pagesController@index');
// Route::get('pages',['as'=>'pages.index','uses'=>'pagesController@index']);
// Route::get('pages/{id}','pagesController@show');
Route::get('Blog',['as'=>'pages.Blog','uses'=>'pagesController1@blog']);
// Route::get('pages/{id}',['as'=>'pages.show1','uses'=>'pagesController1@show1']);

Route::resource('pages','pagesController');

Route::get('auth/login', ['as'=>'login','uses'=>'Auth\AuthController@getLogin']);
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', ['as'=>'logout','uses'=>'Auth\AuthController@getLogout']);

// Registration routes...
Route::get('auth/register', ['as'=>'register','uses'=>'Auth\AuthController@getRegister']);
Route::post('auth/register', 'Auth\AuthController@postRegister');