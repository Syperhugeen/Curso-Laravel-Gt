//cuando da clic en boton de calificar
$('body').on('click','.Boton-Enviar-Review',function(e){

e.preventDefault();


var form  = $(this).parent('form');

form.submit();

});