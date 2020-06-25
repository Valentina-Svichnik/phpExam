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

Route::get('/session/new', function () {
    return view('new');
})->name('new');

Route::get('/question/new', function () {
    return view('qnew');
})->name('qnew');

Route::get('/question/new/submit', function () {
    return redirect('/');
})->name('qsubmit');


Route::get('/session/all', 'FormController@index');

Route::get('/session/delete/{id}', 'FormController@delete')->name('delete');

Route::get('/session/close/{id}', 'FormController@close')->name('close');

Route::get('/session/new/submit', 'FormController@new')->name('submit');

Route::get('/pass', function () {
    return password_hash("12345", PASSWORD_BCRYPT);
});
