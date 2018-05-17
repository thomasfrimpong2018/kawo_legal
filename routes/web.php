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



Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/addstartup', 'DashboardController@create');

Route::post('/dashboard/store', 'DashboardController@store');

Route::get('/dashboard/{show}', 'DashboardController@show');

Route::delete('/dashboard/{dashboard}', 'DashboardController@destroy');

Route::get('/dashboard/{edit}/edit', 'DashboardController@edit');

Route::put('/dashboard/{update}/update', 'DashboardController@update');

Route::get('/userlist', 'AdminController@userList');

Route::get('/adminlist', 'AdminController@adminList');

Route::get('/newstartup', 'AdminController@addStartUp');

Route::get('/approvedstartup', 'AdminController@approvedStartUps');

Route::get('/unapprovedstartup', 'AdminController@unapprovedStartUps');

Route::get('/makeadmin/{makeadmin}', 'AdminController@changeUser');

Route::put('/newadmin/{makeadmin}', 'AdminController@newadmin');

Route::get('/approve/{approve}', 'AdminController@approveStartup');

Route::put('/approved/{approved}', 'AdminController@confirmApproval');

Route::get('/showdetails/{details}', 'AdminController@showDetails');

Route::get('/showdetail/{detail}', 'PagesController@showDetails');

Route::get('/showdetailed/{detailed}', 'DashboardController@showDetails');

Route::get('/deleteuser/{deleteuser}', 'AdminController@ConfirmDestroy');

Route::delete('/delete/{delete}', 'AdminController@destroy');

Route::get('/confirmdelete/{confirmdelete}', 'AdminController@confirmAdminDestroy');

Route::delete('/deleteadmin/{deleteadmin}', 'AdminController@admindestroy');

Route::post('/addcomment/{addcomment}', 'DashboardController@addComment');

Route::post('/filter/', 'DashboardController@filter');


