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

Route::get('/', [
    'uses' => 'Controller@mi_login',
	'as' => 'miLogin'
]);

Route::get('/redireccionar-usuario', [
    'uses' => 'UsuarioController@redirect',
	'as' => 'usuario.redirect'
]);

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {

	// Route::get('/', [
	//     'uses' => 'UsuarioController@admin_index',
	// 	'as' => 'admin.index'
	// ]);

	Route::get('/', 'UsuarioController@admin_index')->name('admin.index');

	Route::post('/registrar-usuario', [
	    'uses' => 'UsuarioController@registar_usuario',
		'as' => 'registrar.usuario'
	]);

	Route::get('usuario/edit/{codigo}', [
	    'uses' => 'UsuarioController@usuario_form_edit',
		'as' => 'usuario.form-edit'
	]);

	Route::put('usuario/update/{id}', [
	    'uses' => 'UsuarioController@usuario_update',
		'as' => 'usuario.update'
	]);

	Route::get('/usuario/delete/{id}', 'UsuarioController@usuario_delete')->name('usuario.delete');

});	

Route::group(['prefix' => 'votante', 'middleware' => 'auth'], function() {

	Route::get('/', [
	    'uses' => 'UsuarioController@votante_index',
		'as' => 'votante.index'
	]);

});	

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
