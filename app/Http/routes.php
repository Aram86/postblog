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


get('home', ['as' => 'home', 'uses' => 'HomeController@index']);
get('home/unpublished', ['as' => 'home.unpublished', 'uses' => 'HomeController@unpublished']);
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

get('/', ['as' => 'posts', 'uses' => 'PostController@index']);
get('unpublished', ['as' => 'posts.unpublished', 'uses' => 'PostController@unpublished']);

get('post/create', ['as' => 'post.create', 'uses' => 'PostController@create']);
post('post', ['as' => 'post.store', 'uses' => 'PostController@store']);
get('post/{post}', ['as' => 'post.show', 'uses' => 'PostController@show']);
get('post/{post}/edit', ['as' => 'post.edit', 'uses' => 'PostController@edit']);
post('post/{post}', ['as' => 'post.update', 'uses' => 'PostController@update']);
get('post/{post}/destroy', ['as' => 'post.destroy', 'uses' => 'PostController@destroy']);

//$router->resource('post', 'PostController');
