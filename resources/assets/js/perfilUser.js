
//envio Formulario Editar desde Admin
$('body').on('click','.boton-editar-perfil-user-desde-admin',function(e){

e.preventDefault();
 // Show the progress bar 
 NProgress.start();

var form  = $(this).siblings('.perfil-user-admin-form');

form.submit();

});