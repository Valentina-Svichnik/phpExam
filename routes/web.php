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

Auth::routes();

Route::get('/home', 'PanelController@index');

Route::get('/', 'PanelController@index')->name('home');

Route::get('/session/all', 'FormController@index');

Route::get('/session/new', 'FormController@new');

Route::get('/pass', function () {
    return password_hash("12345", PASSWORD_BCRYPT);
});
