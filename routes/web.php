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

/*Route::get('/', function () {
    return view('login');
});*/
/*
  |--------------------------------------------------------------------------
  | Register and Login Routes
  |--------------------------------------------------------------------------
 */
Route::group([], function() {

    Route::get('login', 'UserController@login')->name('login');

    Route::get('/', 'UserController@login');

    Route::post('/login','UserController@loginApi');

});



Route::get('my-home', 'UserController@myHome');
Route::get('my-users', 'UserController@myUsers');
Route::get('login', 'UserController@login');
Route::get('logout', 'UserController@logout');

/*
  |--------------------------------------------------------------------------
  | Report  Routes
  |--------------------------------------------------------------------------
 */

Route::group(['namespace' => 'Web'], function() {

    Route::get('exe-summary', 'Report\ReportController@exeSummary');
    Route::get('network-summary', 'Report\ReportController@networkCallSummary');
    Route::get('statical-summary', 'Report\ReportController@staticalSummary');

});



/**

*/
Route::get('advert-spikes-past-hour', 'Api\Report\HomeController@advertSpikesPastHour');
Route::get('hourly-calls', 'Api\Report\HomeController@hourlyCalls');