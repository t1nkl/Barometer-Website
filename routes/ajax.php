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

Route::get('speakers', 'HomeController@speakersAjax');
Route::get('bars', 'HomeController@barsAjax');
Route::get('partners', 'HomeController@partnersAjax');

Route::resource('contact', 'ContactController');
Route::resource('members', 'MemberController');