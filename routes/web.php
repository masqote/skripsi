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

Route::get('/', 'LoginController@index');
Route::post('/dashboard', 'LoginController@login');

Route::get('/dashboard', 'DashboardController@index');

Route::get('/modal', 'DashboardController@modal');

Route::get('/add_user', 'LoginController@add_user');
Route::post('/add_user', 'LoginController@store');

Route::get('/add_item', 'DashboardController@add_item');
Route::post('/add_item', 'DashboardController@store');

Route::post('/layouts/master', 'ProjectController@store');

Route::get('/add_item/{id}', 'DashboardController@show');
Route::put('/add_item/{id}', 'DashboardController@update');

Route::delete('/add_item/{id}', 'DashboardController@destroy');

Route::get('/list_project', 'ProjectController@index');
Route::delete('/list_project/{id}', 'ProjectController@destroy');

Route::get('/list_project/{id}', 'ProjectController@show');
Route::get('/list_project/{id}/edit', 'ProjectController@edit');
Route::put('/list_project/{id}', 'ProjectController@update');

Route::post('/tracking', 'ProjectController@track');

Route::get('/laporan', 'DashboardController@laporan');
Route::post('/hasil', 'DashboardController@hasil');
Route::get('/export', 'DashboardController@export');
Route::get('/hehe', 'DashboardController@hehe');

