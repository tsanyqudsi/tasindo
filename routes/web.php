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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/orders/print_note/{id}','OrderController@print_note')->name('print_note');
Route::get('/admin/orders/refreshStatus/{id}','OrderController@refresh_status')->name('refresh_status');

Route::post('/admin/orders/import_csv','OrderController@import_csv')->name('import_csv');
Route::post('/admin/orders/bulk_print_note','OrderController@bulk_print_note')->name('bulk_print_note');
Route::post('/admin/orders/editable','OrderController@editable');

