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


Route::group(['middleware' => 'guest'], function() {

    Route::get('/login', 'LoginController@login')->name('login');
    Route::post('/login','LoginController@postLogin')->name('postLogin');
    Route::get('/reminder','ReminderController@reminder')->name('reminder');
    Route::post('/reminder','ReminderController@postReminder')->name('postReminder');

    Route::get('/signup','SignupController@signup')->name('signup');
    Route::post('/signup','SignupController@postSignup')->name('postSignup');
});

Route::get('/mypage','MainController@mypage')->name('mypage');
Route::get('/logout','MainController@logout')->name('logout');