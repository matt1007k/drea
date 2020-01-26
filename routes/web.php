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
    Route::get('/admin', 'DashboardController@index')->name('admin.index')->middleware('auth');

    Route::get('/admin/documentos', 'DocumentosController@index')->name('admin.documents.index')->middleware('auth');
    Route::get('/admin/documentos/create', 'DocumentosController@create')->name('admin.documents.create')->middleware('auth');
    Route::post('/admin/documentos', 'DocumentosController@store')->name('admin.documents.store')->middleware('auth');
    Route::get('/admin/documentos/{document}/edit', 'DocumentosController@edit')->name('admin.documents.edit')->middleware('auth');
    Route::put('/admin/documentos/{document}', 'DocumentosController@update')->name('admin.documents.update')->middleware('auth');
    Route::delete('/admin/documentos/{document}', 'DocumentosController@destroy')->name('admin.documents.destroy')->middleware('auth');


    Route::get('/admin/tipos/create', 'TypeDocumentsController@create')->name('admin.types.create')->middleware('auth');
    Route::post('/admin/tipos', 'TypeDocumentsController@store')->name('admin.types.store')->middleware('auth');


    Route::get('/admin/avisos/create', 'PostsController@create')->name('admin.posts.create')->middleware('auth');
    Route::post('/admin/avisos', 'PostsController@store')->name('admin.posts.store')->middleware('auth');
    Route::get('/admin/avisos/{post}', 'PostsController@show')->name('admin.posts.show')->middleware('auth');
});
