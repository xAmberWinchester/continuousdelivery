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


Route::get('/', 'PagesController@index');
Route::get('/home', 'PagesController@welcome');
Route::get('/whoami', 'PagesController@whoami');
Route::get('/index', 'PagesController@index');
Route::get('/dashboard', 'ResultsController@index');

//routes for assigmnents
Route::resource('assignments', 'AssignmentController');
//Route::get('/assignments', 'AssignmentController@index');
//Route::get('/assignments/create', 'AssignmentController@create');
//Route::post('/assignments', 'AssignmentController@store');
//Route::get('/assignments/{assignment}/edit', 'AssignmentController@edit');
//Route::patch('/assignments/{assignment}', 'AssignmentController@update');

//EXTRA
//routes for posts
//Route::resource('posts');
Route::get('/posts', 'PostsController@index');
Route::get('/posts/create',  'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{posts}/edit', 'PostsController@edit');
Route::patch('/posts/{posts}', 'PostsController@update');
//
////routes for series
Route::get('/series', 'SeriesController@index');
Route::get('/series/create',  'SeriesController@create');
Route::post('/series', 'SeriesController@store');
Route::get('/series/{series}/edit', 'SeriesController@edit');
Route::patch('/series/{series}', 'SeriesController@update');
