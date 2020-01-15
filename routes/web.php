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


Route::namespace('Pages')->group(function () {
    Route::get('/', 'InicioController@index')->name('pages.inicio');
    Route::get('/nosotros', 'NosotrosController@index')->name('pages.nosotros');
    Route::get('/organigrama', 'OrganigramaController@index')->name('pages.organigrama');
    Route::get('/directorio-institucional', 'DirectorioInstitucionalController@index')->name('pages.directorio');
    Route::get('/superior', 'SuperiorController@index')->name('pages.superior');
});

Auth::routes();

Route::namespace('Admin')->group(function () {
    // Controllers Within The 'App\Http\Controllers\Admin' Namespace
    Route::get('/admin', 'DashboardController@index')->name('admin.index');
});
