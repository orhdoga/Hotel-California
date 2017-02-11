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
    
    Route::group(['prefix' => 'administration'], function () {
    
        Route::get('/', 'AdministrationController@index');
        Route::post('/', 'AdministrationController@store');
        Route::get('/{roomCategory}', 'AdministrationController@edit');
        Route::patch('/{roomCategory}', 'AdministrationController@update');
        Route::delete('/{roomCategory}', 'AdministrationController@destroy');
        
    });
    
    Route::group(['prefix' => 'rooms'], function () { 
       
       Route::get('/', 'RoomController@index'); 
        
    });
    
    Route::get('/pricing', 'PricingController@index');

});
