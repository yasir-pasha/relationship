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
  Route::get('/category/create', 'CategoryController@create')->name('category.create');
  
  Auth::routes();
  
  Route::get('/home', 'HomeController@index')->name('home');
  Route::post('category/store', 'CategoryController@store')->name('category.store');
  Route::get('categories', 'CategoryController@index')->name('category.index');
  Route::get('/team/{team}', 'TeamController@show')->name('team.show');
  Route::get('/post/{post}', 'PostController@show')->name('post.show');
  Route::get('/video/{video}', 'VideoController@show')->name('video.show');