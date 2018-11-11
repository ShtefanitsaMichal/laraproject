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

Route::get('/welcome', function(){return view('welcome');});
Route::get('/layout', function(){return view('layout');});
Route::get('/task', function(){return view('task');});

Route::get('employee', function () {   $employee = DB::table('employee')->get(); return view('employee', ['employee' => $employee]); });
Route::get('main_apps', function () {   $main_apps = DB::table('main_apps')->get(); return view('main_apps', ['main_apps' => $main_apps]); });



Route::get('main_apps/{id}', function ($id) {
    $main_apps = DB::table('main_apps')->get(); return view('main_apps', ['main_apps' => $main_apps]);
//Example 3-6. Optional Route Parameter
})->where('id', '[0-9]');

Route::get('main_apps/{session_id}', function ($session_id) {
$main_apps = DB::table('main_apps')->get(); return view('main_apps', ['main_apps' => $main_apps]);
})->where('session_id', '[0-9A-Za-z]+');

//Example 3-9. Defining route names
// app/Http/routes.php
    Route::get('main_apps/{id}', [
    'as' => 'main_apps.show',
    'uses' => 'MainApps@show'
]);

//Example 3-10. Defining Closure routes with a configuration array
Route::get('/main_apps/{id}/edit', ['as' => 'main_apps.edit',function ($id){ }]);

//Example 3-11. Defining a route group
Route::group([], function(){
    Route::get('hello', function(){
        return 'Hello';
    });
    Route::get('world', function(){
        return 'world';
    });
});
//Example 3-24. Route for the simplest controller
Route::get('/', 'MySampleController@home');

//Example 3-26. Binding basic form actions
Route::get('tasks/create', 'TasksController@create');
Route::post('tasks', 'TasksController@store');