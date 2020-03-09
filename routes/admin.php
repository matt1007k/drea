<?php

use Illuminate\Support\Facades\Route;

Route::get('dashboard', 'DashboardController@index')->name('index');

Route::resource('documents', 'DocumentosController');
Route::resource('menus', 'MenusController');
Route::resource('menus.pages', 'MenuPagesController')->except(['index', 'show']);
Route::resource('menus.submenus', 'SubmenusController')->except(['index', 'show']);
Route::resource('menus.submenus.pages', 'SubmenuPagesController')->except(['index', 'show']);
Route::resource('albums', 'AlbumesController');
Route::resource('photos', 'PhotosController');
Route::resource('videos', 'VideosController');
Route::resource('external_links', 'ExternalLinksController');
Route::resource('announcement_groups', 'AnnouncementGroupsController');
Route::resource('announcements', 'AnnouncementsController');
Route::resource('announcements.links', 'AnnouncementLinksController')->except(['index', 'show']);
Route::resource('slideshows', 'SlideshowsController');
Route::resource('roles', 'RolesController');
Route::resource('permissions', 'PermissionsController');
Route::resource('users', 'UsersController');
Route::resource('ads', 'AdsController');

Route::get('/tipos/create', 'TypeDocumentsController@create')->name('types.create');
Route::post('/tipos', 'TypeDocumentsController@store')->name('types.store');

Route::get('/avisos', 'PostsController@index')->name('posts.index');
Route::get('/avisos/create', 'PostsController@create')->name('posts.create');
Route::post('/avisos', 'PostsController@store')->name('posts.store');
Route::get('/avisos/{post}', 'PostsController@show')->name('posts.show');
Route::get('/avisos/{post}/edit', 'PostsController@edit')->name('posts.edit');
Route::put('/avisos/{post}', 'PostsController@update')->name('posts.update');
Route::delete('/avisos/{post}', 'PostsController@destroy')->name('posts.destroy');

Route::post('posts.upload', 'PostsController@upload')->name('posts.upload');
Route::post('pages.upload', 'MenuPagesController@upload')->name('pages.upload');
