//icono de Admin Hovver
function OnBotonAdmin()
{
 $(this).children('ul')
    .removeClass('ul-contiene-mensaje-de-iconos-admin')
    .addClass('ul-contiene-mensaje-de-iconos-admin__show');
}

function OfBotonAdmin()
{
  $(this).children('ul')
       .removeClass('ul-contiene-mensaje-de-iconos-admin__show')
       .addClass('ul-contiene-mensaje-de-iconos-admin');
}

$('.class-icono-admin').hover(OnBotonAdmin,OfBotonAdmin);



/*Pagina De Preguntas Envio De Form De Refinamiento d
e Busqueda Segun Pendiente o Finalizada*/
$('body').on('change','#select-preguntas-pagina-admin',function(e){

  e.preventDefault();

  // Show the progress bar 
  NProgress.start();

  var form   = $(this).parent('form');

  form.submit();
});


/*Subir Stock con Excel*/
$('body').on('click','.boton-subis-stock',function(e){

  

  // Show the progress bar 
  NProgress.start();

  var form   = $(this).parent('form');

  form.submit();
});



/*Subir Producto Agrupado*/
$('body').on('click','#boton-agregar-producto-agrupado',function(e){
 

  // Show the progress bar 
  NProgress.start();

  var form   = $(this).parent('form');

  form.submit();
});

/*Editar Producto*/
$('body').on('click','#boto-editar-crear-producto',function(e){
 

  // Show the progress bar 
  NProgress.start();

  var form   = $('#form-editar-productoCrear');

  form.submit();
});




/*Editar Producto*/
$('body').on('change','.select-producto-entidad-Newslleter',function(e){
 

  // Show the progress bar 
  NProgress.start();

  var form   = $(this).parent('form');

  form.submit();
});