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

Route::post('/enviar', 'MailController@enviarCertificado')->name('enviarCertificado');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {

	Route::get('/', 'AdminController@admin_index')->name('admin.index');

	Route::group(['prefix' => 'usuario'], function()
	{
		Route::post('create', 'AdminController@usuario_create')->name('usuario.create');

		Route::get('edit/{codigo}', 'AdminController@usuario_form_edit')->name('usuario.form-edit');

		Route::put('update/{codigo}', 'AdminController@usuario_update')->name('usuario.update');

		Route::get('delete/{codigo}', 'AdminController@usuario_delete')->name('usuario.delete');

		Route::get('autorizar/{codigo}', 'AdminController@autorizar_usuario')->name('usuario.autorizar');
		Route::get('desautorizar/{codigo}', 'AdminController@desautorizar_usuario')->name('usuario.desautorizar');
	});

});

Route::group(['prefix' => 'votante', 'middleware' => 'auth'], function() {

	Route::get('/', 'VotanteController@votante_index')->name('votante.index');

	Route::post('votar', 'VotanteController@votar')->name('votante.votar');

});

Route::group(['prefix' => 'jurado', 'middleware' => 'auth'], function() {

	Route::get('/', 'JuradoController@jurado_index')->name('jurado.index');

	// Route::post('votar', 'JuradoController@otra')->name('jurado.otra');
	Route::get('autorizar/{codigo}', 'JuradoController@autorizar')->name('autorizar');
	Route::get('desautorizar/{codigo}', 'JuradoController@desautorizar')->name('desautorizar');
	Route::post('buscarVotante', 'JuradoController@buscarVotante')->name('buscarVotante');

});

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
