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
    return view('welcome');
});

Route::get('/admin/import_excel', 'XlsDataController@index');
Route::post('/import_excel/import', 'XlsDataController@import');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
