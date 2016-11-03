<?php 



//Post Form Contacto
Route::post('post_contacto_form',
[
  'uses'  => 'Publicas\Envio_Formularios_Controller@post_contacto_form',
  'as'    => 'post_contacto_form'
]);