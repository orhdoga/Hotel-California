<?php

use App\Price;

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

Route::group(['middleware' => ['auth']], function () {
    
    Route::group(['prefix' => 'api'], function () { 
    
        Route::get('/roomcategories', 'Api\RoomCategoryController@get');
        Route::get('/rooms', 'Api\RoomController@get');
    
    });
    
    Route::group(['prefix' => 'roomcategories'], function () {
    
        Route::get('/', 'Administration\RoomCategoryController@index');
        Route::get('/create', 'Administration\RoomCategoryController@create');
        Route::post('/', 'Administration\RoomCategoryController@store');
        Route::get('/{room_category}', 'Administration\RoomCategoryController@show');
        Route::get('/{room_category}/edit', 'Administration\RoomCategoryController@edit');
        Route::patch('/{room_category}', 'Administration\RoomCategoryController@update');
        Route::delete('/{room_category}', 'Administration\RoomCategoryController@destroy');
        
    });
    
    // Route::resource('roomcategories', 'Administration\RoomCategoryController');
    
    // Route::resource('prices', 'PricingController');
    
    Route::get('/pricing', 'PricingController@index');
    Route::post('/pricing', 'PricingController@store');
    Route::get('/pricing/{price}/edit', 'PricingController@edit');
    Route::patch('/pricing/{price}', 'PricingController@update');
    Route::delete('/pricing/{price}/delete', 'PricingController@destroy');
    
    Route::group(['prefix' => 'rooms'], function () { 
       
       Route::get('/', 'Administration\RoomController@index'); 
       Route::get('/create', 'Administration\RoomController@create');
       Route::post('/', 'Administration\RoomController@store');
       Route::get('/{room}', 'Administration\RoomController@show');       
       Route::get('/{room}/edit', 'Administration\RoomController@edit');
       Route::patch('/{room}', 'Administration\RoomController@update');
       Route::delete('/{room}', 'Administration\RoomController@destroy');
       
    });
    
    Route::group(['prefix' => 'webreservations'], function () { 
        
        Route::get('/', 'WebReservationController@index');
        Route::get('/search', 'WebReservationController@getSearch');
        Route::get('/create', 'WebReservationController@create');
        
    });  

});