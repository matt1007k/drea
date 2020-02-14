<?php

Route::namespace('Pages')->group(function () {
    Route::get('/', 'InicioController@index')->name('pages.inicio');

    Route::get('/nosotros', 'NosotrosController@index')->name('pages.nosotros');
    Route::get('/organigrama', 'OrganigramaController@index')->name('pages.organigrama');
    Route::get('/directorio-institucional', 'DirectorioInstitucionalController@index')->name('pages.directorio');
    Route::get('/superior', 'SuperiorController@index')->name('pages.superior');
    Route::get('/documentos', 'DocumentosController@index')->name('pages.documentos.index');
    Route::get('/avisos', 'AvisosController@index')->name('pages.avisos.index');
    Route::get('/avisos/{aviso}', 'AvisosController@show')->name('pages.avisos.show');
    Route::get('/galeria', 'GaleriaController@index')->name('pages.galeria.index');
    Route::get('/videos', 'VideoController@index')->name('pages.videos.index');

    Route::get('/{tipo}', 'PaginasController@index')->name('pages.index');
});
