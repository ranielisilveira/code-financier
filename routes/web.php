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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;

Route::get('/user', function () {
    Auth::loginUsingId(2);
});

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return redirect()->route('admin.home');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Auth::routes();
    Route::group(['middleware' => 'can:access-admin'], function () {
        Route::get('/home', 'HomeController@index')->name('home');
    });
});
