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

Route::group(['middleware' => ['auth']], function () {
    
    Route::get('/', function () {
        return view('welcome');
    });
    
    Route::get('/administration', 'AdministrationController@index');
    Route::post('/administration', 'AdministrationController@store');
    Route::get('/administration/{roomCategory}', 'AdministrationController@edit');
    Route::patch('/administration/{roomCategory}', 'AdministrationController@update');
    Route::delete('/administration/{roomCategory}', 'AdministrationController@destroy');
    Route::get('/pricing', 'PricingController@index');

});
