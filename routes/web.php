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

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('hola', 'PruebaController');
Route::resource('hom','TemaController');



Route::resource('backup', 'BackupController');

//Rutas con Midelware


Route::middleware(['auth'])->group(function () {
	//Roles
	Route::post('roles/store', 'RoleController@store')->name('roles.store')
		->middleware('permission:roles.create');

	Route::get('roles', 'RoleController@index')->name('roles.index')
		->middleware('permission:roles.index');

	Route::get('roles/create', 'RoleController@create')->name('roles.create')
		->middleware('permission:roles.create');

	Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
		->middleware('permission:roles.edit');

	Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
		->middleware('permission:roles.show');

	Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
		->middleware('permission:roles.destroy');

	Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
		->middleware('permission:roles.edit');
	//Users
	Route::get('users', 'UserController@index')->name('users.index')
		->middleware('permission:users.index');

	Route::put('users/{user}', 'UserController@update')->name('users.update')
		->middleware('permission:users.edit');

	Route::get('users/{user}', 'UserController@show')->name('users.show')
		->middleware('permission:users.show');

	Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
		->middleware('permission:users.destroy');

	Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
		->middleware('permission:users.edit');

	Route::get('users/regist', 'UserController@regist')->name('users.regist')
	->middleware('permission:users.regist');
	
	//Clientes
	Route::post('clientes/store', 'ClientesController@store')->name('clientes.store')
		->middleware('permission:clientes.create');

	Route::get('clientes', 'ClientesController@index')->name('clientes.index')
		->middleware('permission:clientes.index');

	Route::get('clientes/create', 'ClientesController@create')->name('clientes.create')
		->middleware('permission:clientes.create');

	Route::put('clientes/{cliente}', 'ClientesController@update')->name('clientes.update')
		->middleware('permission:clientes.edit');

	Route::get('clientes/{cliente}', 'ClientesController@show')->name('clientes.show')
		->middleware('permission:clientes.show');

	Route::delete('clientes/{cliente}', 'ClientesController@destroy')->name('clientes.destroy')
		->middleware('permission:clientes.destroy');

	Route::get('clientes/{cliente}/edit', 'ClientesController@edit')->name('clientes.edit')
		->middleware('permission:clientes.edit');
	
		//Categoria
	Route::post('categoria/store', 'CategoriaController@store')->name('categorias.store')
		->middleware('permission:categorias.create');

	Route::get('categoria', 'CategoriaController@index')->name('categorias.index')
		->middleware('permission:categorias.index');

	Route::get('categoria/create', 'CategoriaController@create')->name('categorias.create')
		->middleware('permission:categorias.create');

	Route::put('categoria/{categoria}', 'CategoriaController@update')->name('categorias.update')
		->middleware('permission:categorias.edit');

	Route::get('categoria/{categoria}', 'CategoriaController@show')->name('categorias.show')
		->middleware('permission:categorias.show');

	Route::delete('categoria/{categoria}', 'CategoriaController@destroy')->name('categorias.destroy')
		->middleware('permission:categorias.destroy');

	Route::get('categoria/{categoria}/edit', 'CategoriaController@edit')->name('categorias.edit')
		->middleware('permission:categorias.edit');

	//Proveedor
	Route::post('proveedor/store', 'ProveedorController@store')->name('proveedors.store')
	->middleware('permission:proveedors.create');

	Route::get('proveedor', 'ProveedorController@index')->name('proveedors.index')
		->middleware('permission:proveedors.index');

	Route::get('proveedor/create', 'ProveedorController@create')->name('proveedors.create')
		->middleware('permission:proveedors.create');

	Route::put('proveedor/{proveedor}', 'ProveedorController@update')->name('proveedors.update')
		->middleware('permission:proveedors.edit');

	Route::get('proveedor/{proveedor}', 'ProveedorController@show')->name('proveedors.show')
		->middleware('permission:proveedors.show');

	Route::delete('proveedor/{proveedor}', 'ProveedorController@destroy')->name('proveedors.destroy')
		->middleware('permission:proveedors.destroy');

	Route::get('proveedor/{proveedor}/edit', 'ProveedorController@edit')->name('proveedors.edit')
		->middleware('permission:proveedors.edit');

	//Pais
	Route::post('pais/store', 'PaisController@store')->name('paiss.store')
	->middleware('permission:paiss.create');

	Route::get('pais', 'PaisController@index')->name('paiss.index')
		->middleware('permission:paiss.index');

	Route::get('pais/create', 'PaisController@create')->name('paiss.create')
		->middleware('permission:paiss.create');

	Route::put('pais/{pais}', 'PaisController@update')->name('paiss.update')
		->middleware('permission:paiss.edit');

	Route::get('pais/{pais}', 'PaisController@show')->name('paiss.show')
		->middleware('permission:paiss.show');

	Route::delete('pais/{pais}', 'PaisController@destroy')->name('paiss.destroy')
		->middleware('permission:paiss.destroy');

	Route::get('pais/{pais}/edit', 'PaisController@edit')->name('paiss.edit')
		->middleware('permission:paiss.edit');
	//Cargo
	Route::post('cargos/store', 'CargoController@store')->name('cargos.store')
		->middleware('permission:cargos.create');
	
	Route::get('cargos', 'CargoController@index')->name('cargos.index')
		->middleware('permission:cargos.index');
	
	Route::get('cargos/create', 'CargoController@create')->name('cargos.create')
		->middleware('permission:cargos.create');
	
	Route::put('cargos/{cargo}', 'CargoController@update')->name('cargos.update')
		->middleware('permission:cargos.edit');
	
	Route::get('cargos/{cargo}', 'CargoController@show')->name('cargos.show')
		->middleware('permission:cargos.show');
	
	Route::delete('cargos/{cargo}', 'CargoController@destroy')->name('cargos.destroy')
		->middleware('permission:cargos.destroy');
	
	Route::get('cargos/{cargo}/edit', 'CargoController@edit')->name('cargos.edit')
		->middleware('permission:cargos.edit');
	//Departamento
	Route::post('departamentos/store', 'DepartamentoController@store')->name('departamentos.store')
	->middleware('permission:departamentos.create');

	Route::get('departamentos', 'DepartamentoController@index')->name('departamentos.index')
		->middleware('permission:departamentos.index');

	Route::get('departamentos/create', 'DepartamentoController@create')->name('departamentos.create')
		->middleware('permission:departamentos.create');

	Route::put('departamentos/{cargo}', 'DepartamentoController@update')->name('departamentos.update')
		->middleware('permission:departamentos.edit');

	Route::get('departamentos/{cargo}', 'DepartamentoController@show')->name('departamentos.show')
		->middleware('permission:departamentos.show');

	Route::delete('departamentos/{cargo}', 'DepartamentoController@destroy')->name('departamentos.destroy')
		->middleware('permission:departamentos.destroy');

	Route::get('departamentos/{cargo}/edit', 'DepartamentoController@edit')->name('departamentos.edit')
		->middleware('permission:departamentos.edit');
	
});
