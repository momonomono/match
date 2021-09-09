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
Route::get('/mail',function(){
    return view('mail.reminder');
});

Route::group(['middleware' => 'guest'], function() {

    Route::get('/login', 'LoginController@login')->name('login');
    Route::post('/login','LoginController@postLogin')->name('postLogin');
    Route::get('/reminder','ReminderController@top')->name('reminder');
    Route::post('/reminder','ReminderController@post')->name('postReminder');
    Route::get('/reminder/hashKey','ReminderController@hashKey')->name('hashKey');
    Route::post('/reminder/hashKey','ReminderController@postHashKey')->name('postHashKey');
    Route::get('/reminder/reset','ReminderController@change')->name('reminder.change');
    Route::post('/reminder/reset','ReminderController@postChange')->name('reminder.change');

    Route::get('/signup','SignupController@signup')->name('signup');
    Route::post('/signup','SignupController@postSignup')->name('postSignup');
});

Route::group(['middleware' => 'auth'], function() {
    // マイページ
    Route::get('/mypage','MainController@mypage')->name('mypage');
    
    // 案件一覧
    Route::get('/jobs','MainController@jobs')->name('jobs');
    
    
    Route::get('/jobs/post','MainController@jobPost')->name('jobs.post');
    Route::post('/jobs/post','MainController@postJobPost')->name('post.jobs.post');
    
    Route::get('/message/public','MainController@messagePublic')->name('message.public');
    Route::get('/message/private','MainController@messagePrivate')->name('message.private');
    
    // ログイン
    Route::get('/logout','MainController@logout')->name('logout');
});

Route::get('/test','TestController@top')->name('test');
Route::post('/test','TestController@post')->name('posttest');
Route::get('/test/password','TestController@password')->name('test.password');