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

Route::get('/startups', 'PagesController@startup');

Route::get('/login', 'PagesController@login')->name('login');

Route::get('/register', 'PagesController@register');

Auth::routes();



Route::get('/dashboard', 'DashboardController@index')->name('home');

Route::get('/addstartup', 'DashboardController@create');

Route::post('/dashboard/store', 'DashboardController@store');

Route::get('/dashboard/{show}', 'DashboardController@show');

Route::delete('/dashboard/{dashboard}', 'DashboardController@destroy');

Route::get('/dashboard/{edit}/edit', 'DashboardController@edit');

Route::put('/dashboard/{update}/update', 'DashboardController@update');