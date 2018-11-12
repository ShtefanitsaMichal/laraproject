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


Route::group(['prefix'=>'admin', 'namespace'=>'admin', 'middleware'=>['auth']], function(){
 Route::get('/','DashboardController@dashboard') -> name('admin.index');
});

Route::get('/', function () {return view('welcome');});
Route::get('master', function () {return view('layouts/master');});
Route::get('dashboard', function () {return view('dashboard');});
Route::get('sidebar', function () {return view('sidebar');});
Route::get('home', function () {
    $pageName = "home page";
    return view('home')
    
    ;});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('passing-data-to-views', function () {
return view('dashboard')
->with('key', 'value');
});
