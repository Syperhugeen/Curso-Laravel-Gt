//Form Pregunta en Pagina

$('body').on('click','.Boton-Enviar-Pregunta-Pagina',function(e){

e.preventDefault();

 // muestro barra de progreso
 NProgress.start(); 

var form  = $(this).parent().parent('form');
//envio el form
form.submit();

//paro de cargar
CargaProgressBar;

});


