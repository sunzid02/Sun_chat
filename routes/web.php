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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/chat', 'ChatController@index')->name('chat.index');
    Route::get('/chat/{id}', 'ChatController@show')->name('chat.show');
    
    Route::post('/chat/get-chat/{id}', 'ChatController@getChat')->name('chat.getChat');
    Route::post('/chat/send-chat', 'ChatController@sendChat')->name('chat.sendChat');
    

});