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

Route::get('/',['as' => 'web', 'uses' => 'PublicController@index']);
Route::get('/inicio',['as' => 'web.home', 'uses' => 'PublicController@index']);
Route::get('/servicios',['as' => 'web.services', 'uses' => 'PublicController@services']);
Route::get('/productos',['as' => 'web.product', 'uses' => 'PublicController@products']);
Route::get('/galeria',['as' => 'web.gallery', 'uses' => 'PublicController@gallery']);
Route::get('/contacto',['as' => 'web.contact', 'uses' => 'PublicController@contact']);
Route::post('/contacto',['as' => 'web.contacto', 'uses' => 'PublicController@postContact']);
Route::get('/administracion',['as' => 'web.admin', 'uses' => 'PublicController@admin']);
Route::post('/login',['as' => 'web.login', 'uses' => 'Auth\LoginController@authenticate']);
Route::get('/logout',['as' => 'web.logout', 'uses' => 'Auth\LoginController@logout']);


Route::group(['middleware' => ['web']], function ()
{
    Route::get('/panel', ['as' => 'web.panel', 'uses' => 'HomeController@index']);

    Route::group(['prefix' => 'productos'], function()
    {
        Route::get('/listado', ['as' => 'web.products.list', 'uses' => 'ProductController@index']);
        Route::get('/crear', ['as' => 'web.products.add', 'uses' => 'ProductController@add']);
        Route::get('/editar/{id}', ['as' => 'web.products.editar', 'uses' => 'ProductController@edit']);
        Route::post('/crear', ['as' => 'web.products.store', 'uses' => 'ProductController@store']);
        Route::post('/editar', ['as' => 'web.products.update', 'uses' => 'ProductController@update']);
        Route::get('/eliminar/{id}', ['as' => 'web.products.destroy', 'uses' => 'ProductController@destroy']);
    });

    Route::group(['prefix' => 'galeria'], function()
    {
        Route::get('/listado', ['as' => 'web.gallery.list', 'uses' => 'GalleryController@index']);
        Route::get('/crear', ['as' => 'web.gallery.add', 'uses' => 'GalleryController@add']);
        Route::get('/editar/{id}', ['as' => 'web.gallery.editar', 'uses' => 'GalleryController@edit']);
        Route::post('/crear', ['as' => 'web.gallery.store', 'uses' => 'GalleryController@store']);
        Route::post('/editar', ['as' => 'web.gallery.update', 'uses' => 'GalleryController@update']);
        Route::get('/eliminar/{id}', ['as' => 'web.gallery.destroy', 'uses' => 'GalleryController@destroy']);
    });

    Route::group(['prefix' => 'servicios'], function()
    {
        Route::get('/listado', ['as' => 'web.services.list', 'uses' => 'ServiceController@index']);
        Route::get('/crear', ['as' => 'web.services.add', 'uses' => 'ServiceController@add']);
        Route::get('/editar/{id}', ['as' => 'web.services.edit', 'uses' => 'ServiceController@edit']);
        Route::post('/crear', ['as' => 'web.services.store', 'uses' => 'ServiceController@store']);
        Route::post('/editar', ['as' => 'web.services.update', 'uses' => 'ServiceController@update']);
        Route::get('/eliminar/{id}', ['as' => 'web.services.destroy', 'uses' => 'ServiceController@destroy']);
    });

    Route::group(['prefix' => 'titulos'], function()
    {
        Route::get('/listado', ['as' => 'web.titles.list', 'uses' => 'TitlesController@index']);
        Route::get('/crear', ['as' => 'web.titles.add', 'uses' => 'TitlesController@add']);
        Route::get('/editar/{id}', ['as' => 'web.titles.edit', 'uses' => 'TitlesController@edit']);
        Route::post('/crear', ['as' => 'web.titles.store', 'uses' => 'TitlesController@store']);
        Route::post('/editar', ['as' => 'web.titles.update', 'uses' => 'TitlesController@update']);
        Route::get('/eliminar/{id}', ['as' => 'web.titles.destroy', 'uses' => 'TitlesController@destroy']);
    });

    Route::group(['prefix' => 'footerText'], function()
    {
        Route::get('/listado', ['as' => 'web.footerText.list', 'uses' => 'FooterTextController@index']);
        Route::get('/crear', ['as' => 'web.footerText.add', 'uses' => 'FooterTextController@add']);
        Route::get('/editar/{id}', ['as' => 'web.footerText.edit', 'uses' => 'FooterTextController@edit']);
        Route::post('/crear', ['as' => 'web.footerText.store', 'uses' => 'FooterTextController@store']);
        Route::post('/editar', ['as' => 'web.footerText.update', 'uses' => 'FooterTextController@update']);
        Route::get('/eliminar/{id}', ['as' => 'web.footerText.destroy', 'uses' => 'FooterTextController@destroy']);
    });
/*
    Route::group(['prefix' => 'usuarios'], function()
    {
        Route::get('/', ['as' => 'web.usuarios', 'uses' => 'UserController@index']);
        Route::get('/agregar', ['as' => 'web.usuarios.create', 'uses' => 'UserController@add']);
        Route::get('/editar', ['as' => 'web.usuarios.edit', 'uses' => 'UserController@edit']);
        Route::post('/lista', ['as' => 'web.usuarios.lista', 'uses' => 'UserController@lista']);
        Route::post('/roles', ['as' => 'web.usuarios.roles', 'uses' => 'UserController@roles']);
        Route::post('/roles/change', ['as' => 'web.usuarios.roles.change', 'uses' => 'UserController@changeRol']);
        Route::post('/estado/change', ['as' => 'web.usuarios.estado.change', 'uses' => 'UserController@changeStatus']);
        Route::post('/crear', ['as' => 'web.usuarios.add', 'uses' => 'UserController@store']);
        Route::post('/editar', ['as' => 'web.usuarios.update', 'uses' => 'UserController@update']);
        Route::post('/eliminar', ['as' => 'web.usuarios.destroy', 'uses' => 'UserController@destroy']);
    });*/
});

