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

Route::get('/', 'Controller@mi_login')->name('miLogin');

Route::get('/redireccionar-usuario', 'UsuarioController@redirect')->name('usuario.redirect');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {

	Route::get('/', 'AdminController@admin_index')->name('admin.index');

	Route::group(['prefix' => 'usuario'], function()
	{ 
		Route::post('create', 'AdminController@usuario_create')->name('usuario.create');

		Route::get('edit/{codigo}', 'AdminController@usuario_form_edit')->name('usuario.form-edit');

		Route::put('update/{id}', [
		    'uses' => 'AdminController@usuario_update',
			'as' => 'usuario.update'
		]);

		Route::get('delete/{id}', 'AdminController@usuario_delete')->name('usuario.delete');
	});

});	

Route::group(['prefix' => 'votante', 'middleware' => 'auth'], function() {

	Route::get('/', 'VotanteController@votante_index')->name('votante.index');

});	

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
