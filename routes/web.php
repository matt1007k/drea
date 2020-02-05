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
    // Route::get('/{tipo}', 'PaginasController@index')->name('pages.index');
    Route::get('/nosotros', 'NosotrosController@index')->name('pages.nosotros');
    Route::get('/organigrama', 'OrganigramaController@index')->name('pages.organigrama');
    Route::get('/directorio-institucional', 'DirectorioInstitucionalController@index')->name('pages.directorio');
    Route::get('/superior', 'SuperiorController@index')->name('pages.superior');
    Route::get('/documentos', 'DocumentosController@index')->name('pages.documentos.index');
    Route::get('/avisos', 'AvisosController@index')->name('pages.avisos.index');
    Route::get('/avisos/{aviso}', 'AvisosController@show')->name('pages.avisos.show');
    Route::get('/galeria', 'GaleriaController@index')->name('pages.galeria.index');
    Route::get('/videos', 'VideoController@index')->name('pages.videos.index');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::namespace('Admin')->group(function () {

        Route::prefix('admin')->group(function () {

            Route::name('admin.')->group(function () {
                Route::get('/', 'DashboardController@index')->name('index');

                Route::resource('documents', 'DocumentosController');
                Route::resource('menus', 'MenusController');
                Route::resource('albums', 'AlbumesController');
                Route::resource('photos', 'PhotosController');
                Route::resource('videos', 'VideosController');
                Route::resource('external_links', 'ExternalLinksController');
                Route::resource('announcement_groups', 'AnnouncementGroupsController');

                Route::get('/tipos/create', 'TypeDocumentsController@create')->name('types.create');
                Route::post('/tipos', 'TypeDocumentsController@store')->name('types.store');


                Route::get('/avisos', 'PostsController@index')->name('posts.index');
                Route::get('/avisos/create', 'PostsController@create')->name('posts.create');
                Route::post('/avisos', 'PostsController@store')->name('posts.store');
                Route::get('/avisos/{post}', 'PostsController@show')->name('posts.show');
                Route::get('/avisos/{post}/edit', 'PostsController@edit')->name('posts.edit');
                Route::put('/avisos/{post}', 'PostsController@update')->name('posts.update');
                Route::delete('/avisos/{post}', 'PostsController@destroy')->name('posts.destroy');
            });
        });
    });
});
