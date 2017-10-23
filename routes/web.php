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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [
    'uses' => 'HomeController@home',
    'as' => 'home'
]);



Route::group(['prefix' => 'do'], function(){

    /******************************************
    /*** Route to views without Controllers ***
    /******************************************/
    /*
    Route::post('/action', function (Request $request) {
        if (isset($request['username'])){
            return view('handle-action', ['name' => $request['username']]);
        }else{
            return redirect()->back();
        }
    })->name('doAction');
    */

    Route::get('/action', function () {
        return view('action');
    })->name('getAction');


    /******************************************
    /*** Route to views with Controllers ***
    /******************************************/
    Route::get('/{action}/{name?}', [
        'uses' => 'NiceActionController@getNiceAction',
        'as' => 'getNiceAction'
    ]);

    Route::post('/', [
        'uses' => 'NiceActionController@postNiceAction',
        'as' => 'postNiceAction'
    ]);

    Route::get('/get/all/action-list', [
        'uses' => 'NiceActionController@getAllNiceActions',
        'as' => 'getAllNiceActions'
    ]);

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//****************** Facebook Login **********************
Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');
