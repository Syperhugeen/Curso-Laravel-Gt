<?php 

//Ruta de Home Panel Admin
Route::get('/',
[
  'uses'  => 'Admin_Empresa\AdminController@get_admin_home',
  'as'    => 'get_admin_home'
]);



//Ruta de Admin Empresa Datos
Route::get('get_datos_corporativos',
[
  'uses'  => 'Admin_Empresa\Admin_Datos_Corporativos_Controller@get_datos_corporativos',
  'as'    => 'get_datos_corporativos'
]);

Route::patch('set_datos_corporativos',
[
  'uses'  => 'Admin_Empresa\Admin_Datos_Corporativos_Controller@set_datos_corporativos',
  'as'    => 'set_datos_corporativos'
]);


Route::get('get_admin_users',
[
  'uses'  => 'Admin_Empresa\Admin_Users_Controllers@get_admin_users',
  'as'    => 'get_admin_users'
]);

Route::get('get_admin_users_crear',
[
  'uses'  => 'Admin_Empresa\Admin_Users_Controllers@get_admin_users_crear',
  'as'    => 'get_admin_users_crear'
]);

Route::post('set_admin_users_crear',
[
  'uses'  => 'Admin_Empresa\Admin_Users_Controllers@set_admin_users_crear',
  'as'    => 'set_admin_users_crear'
]);

Route::get('get_admin_users_editar{id}',
[
  'uses'  => 'Admin_Empresa\Admin_Users_Controllers@get_admin_users_editar',
  'as'    => 'get_admin_users_editar'
]);

Route::patch('set_admin_users_editar{id}',
[
  'uses'  => 'Admin_Empresa\Admin_Users_Controllers@set_admin_users_editar',
  'as'    => 'set_admin_users_editar'
]);