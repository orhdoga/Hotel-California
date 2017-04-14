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

Route::group(['middleware' => ['auth']], function () {
    
    Route::resource('roomcategories', 'Administration\RoomCategoryController', ['parameters' => [
        'roomcategories' => 'room_category'    
    ]]);
    Route::resource('pricing', 'PricingController', ['except' => [
        'create', 'show'
    ]]);
    Route::resource('rooms', 'Administration\RoomController');
    
    Route::group(['prefix' => 'webreservations'], function () { 
        
        Route::get('/', 'WebReservationController@index');
        Route::get('/search', 'WebReservationController@getSearch');
        Route::get('/create', 'WebReservationController@create');
        
    });

});