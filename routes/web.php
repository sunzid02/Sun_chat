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
   
    // Route::get('all-chat-message', function(){
    //     echo "ki re";
    // })->name('chat.allChatMessage');

    Route::get('all-chat-message', 'ChatController@allChatMessage')->name('chat.allChatMessage');
    
    Route::post('/chat/get-chat/{id}', 'ChatController@getChat')->name('chat.getChat');

    Route::post('/chat/send-chat', 'ChatController@sendChat')->name('chat.sendChat');

    Route::group(['prefix' => 'product'], function () {
        Route::get('/add-product', 'ProductController@create')->name('product.create');        
        Route::post('/add-product', 'ProductController@store')->name('product.store');        
    });    
    

});