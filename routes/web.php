<?php

use Illuminate\Support\Facades\Route;

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

//Route for frontend layout
Route::group(['namespace' => 'Frontend'], function() {
    Route::get('/','PageController@homePage');
    Route::get('/contact-us','PageController@contactUs');
    Route::get('/about-us','PageController@aboutUs');
    Route::get('/services','PageController@services');
    Route::get('/project-supply','PageController@project');
    Route::get('/piping','PageController@piping');
    Route::get('/mro','PageController@mro');
    Route::get('/strategic-partnership','PageController@strategicPartnership');
    Route::post('/contact-message', 'PageController@contactMessage');
});

//Route for admin layout
Route::group(['prefix' => 'admin','namespace' => 'Backend'], function() {

});
