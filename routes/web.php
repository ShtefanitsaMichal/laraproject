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

<<<<<<< HEAD
Route::get('/', function () {return view('welcome');});
Route::get('master', function () {return view('layouts/master');});

Route::get('dashboard', function () {return view('dashboard');});


=======
Route::get('/', function () {
    return view('welcome');
});
    
>>>>>>> parent of 98acf40... dashboard created
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
    'as' => 'members.show',
    'uses' => 'MembersController@show'
]);

//Example 3-10. Defining Closure routes with a configuration array

Route::get('/main_apps/{id}/edit', [
'as' => 'main_apps.edit',
function ($id) {

}
]);