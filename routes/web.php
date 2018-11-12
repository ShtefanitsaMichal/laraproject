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

Route::get('/', function () {return view('welcome');});
Route::get('master', function () {return view('layouts/master');});
Route::get('dashboard', function () {return view('dashboard');});


Route::get('employee', function () {   $employee = DB::table('employee')->get(); return view('employee', ['employee' => $employee]); });
Route::get('main_apps', function () {   $main_apps = DB::table('main_apps')->get(); return view('main_apps', ['main_apps' => $main_apps]); });
