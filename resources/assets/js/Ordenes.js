//boton de cobrado o no cobrado
///////////////////////////////////////////////////////////////
$('body').on('click','.orden-lista-acciones',function(e){

e.preventDefault();
 // Show the progress bar 
 NProgress.start();

var form  = $(this).parent('form');
var data  = form.serialize();
form.submit();

});

//boton de eliminar
///////////////////////////////////////////////////////////////
$('body').on('click','.orden-lista-acciones-eliminar',function(e){


 // Show the progress bar 
 NProgress.start();

var form  = $(this).parent('form');
var data  = form.serialize();
form.submit();

});

//desplegar productos
///////////////////////////////////////////////////////////////
function desplegarProductosOrdnes()
{
  var productos  = $(this).parents()
                          .siblings('.Productos-De-Ordenes-Contenedor')
                          ;
  
                          
  var span       = $(this).children('span');

 //oculto los productos
  productos.removeClass('Productos-De-Ordenes-Contenedor')
           .addClass('Productos-De-Ordenes-Contenedor__show');

  //cambio el icono de desplegar         
  span.removeClass('icon-keyboard_arrow_down')
      .addClass('icon-cancel');
}

function plegarProductosOrdnes()
{
  var productos  = $(this).parents()
                          .siblings('.Productos-De-Ordenes-Contenedor__show')
                          ;
                          
                          ;
  var span       = $(this).children('span');


  span.removeClass('icon-cancel')
      .addClass('icon-keyboard_arrow_down');

  //oculto los productos
  productos.removeClass('Productos-De-Ordenes-Contenedor__show')
           .addClass('Productos-De-Ordenes-Contenedor');
}






$('.orden-lista-acciones-desplegar').clicktoggle(desplegarProductosOrdnes,plegarProductosOrdnes);