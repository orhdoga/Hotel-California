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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/phpinfo', function() {
    return phpinfo();
});

Route::get('/test', function() {
    return view('test');    
});

Route::group(['middleware' => ['auth']], function () {
    
    Route::group(['prefix' => 'roomcategories'], function () {
    
        Route::get('/', 'Administration\RoomCategoryController@index');
        Route::get('/create', 'Administration\RoomCategoryController@create');
        Route::post('/', 'Administration\RoomCategoryController@store');
        Route::get('/{room_category}', 'Administration\RoomCategoryController@show');
        Route::get('/{room_category}/edit', 'Administration\RoomCategoryController@edit');
        Route::patch('/{room_category}', 'Administration\RoomCategoryController@update');
        Route::delete('/{room_category}', 'Administration\RoomCategoryController@destroy');
        
    });
    
    Route::group(['prefix' => 'rooms'], function () { 
       
       Route::get('/', 'Administration\RoomController@index'); 
       Route::get('/create', 'Administration\RoomController@create');
       Route::post('/', 'Administration\RoomController@store');
       Route::get('/{room}', 'Administration\RoomController@show');       
       Route::get('/{room}/edit', 'Administration\RoomController@edit');
       Route::patch('/{room}', 'Administration\RoomController@update');
       Route::delete('/{room}', 'Administration\RoomController@destroy');
       
    });

});
