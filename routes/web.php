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

Route::view('/', 'welcome');

Auth::routes(['register' => false]);

//> Административная часть
$groupDataAdmin = [
  'namespace' => 'Admin',
  'middleware' => 'auth',
  'prefix' => 'admin',
  'as' => 'admin.'
];
Route::group($groupDataAdmin, function () {
    Route::resource('users', 'UserController');
});
//>
