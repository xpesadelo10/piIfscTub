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

Route::get('/', function () {
    return redirect('/produtos');
});

Route::resource('produtos','ProdutoController');

Route::view('login-usuario','login');

Route::get('/', 'FullCalendarController@index')->name('index');

Route::get('/load-events-calendar ','EventCalendarController@loadEvents')->name('routeLoadEvents');
