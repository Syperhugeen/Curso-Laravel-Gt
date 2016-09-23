<?php 
//Loguin Get
Route::get('iniciar', [
  'uses'  => 'Auth\AuthController@getLogin',
  'as'    => 'auth_login_get'  

]);

//Login post
Route::post('iniciar', [

   'uses' => 'Auth\AuthController@postLogin',
   'as'   => 'auth_login_post'


]);

//Logout
Route::get('salir', [
  'uses'  => 'Auth\AuthController@getLogout',
  'as'    => 'logout'

]);


// Registration routes...
Route::get('registro', [
  'uses'  => 'Auth\AuthController@getRegister',
  'as'    => 'register_get'
]);

Route::post('registro', [
  'uses'  => 'Auth\AuthController@postRegister',
  'as'    => 'register_post'
]);


//confirmacion de la cuenta
Route::get('confirma/{token}', [
  'uses'  => 'Auth\AuthController@getConfirmation',
  'as'    => 'confirmation'
]);




// Password reset link request routes...
Route::get('password/email', [ 
  'uses' => 'Auth\PasswordController@getEmail',
  'as'   => 'password_recet_get'
]);
Route::post('password/email',[ 
  'uses' => 'Auth\PasswordController@postEmail',
  'as'   => 'password_recet_post'
]);

// Password reset routes...
Route::get('password/reset/{token}', [
  'uses' => 'Auth\PasswordController@getReset',
  'as'   => 'password_recet_route_get'
]);
Route::post('password/reset', [
  'uses' => 'Auth\PasswordController@postReset',
  'as'   => 'password_recet_route_post'
]);


//Reenvio Email De Confirmacion
Route::get('-user_confirmacion', [
  'uses'  => 'ReenvioEmail\ReenvioEmailController@Reenvio_De_EmailDe_Confirmacion',
  'as'    => 'Reenvio_De_EmailDe_Confirmacion'
]);

//ruta para eliminar usuario de Newslleter
Route::get('CancelarEnvioDeNewslleter{email}' , [
'uses' => 'Newslleter\NewslleterController@CancelarEnvioDeNewslleter',
'as'   => 'CancelarEnvioDeNewslleter'
]);