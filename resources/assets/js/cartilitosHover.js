
//icono productos Envio
 $('#icono-Envio-Productos').tooltipster();

 //icono productos Metodo de Pago
 $('#icono-MetodoPago-Productos').tooltipster();

  //icono productos Dirección Retiro en Tienda
 $('#icono-LocalReitor-Productos').tooltipster();

  //icono productos Dirección Preguntas
 $('#icono-Pregunta-Productos').tooltipster();

 //pagina de producto descuento por mayor
 $('.Producto-Pagina-Datos-TextoDescuentoMayor').tooltipster();

 //imagenes de empresas de transporte en pagina entidad
 $('.img-empresa-transporte').tooltipster();


 //review aclaración estrellitas
 $('.contenedor-estrellitas-text').tooltipster();

 //Perfil User
 //boton de editar
 $('.contenedor-direccion-perfil-user-editar').tooltipster();

 //admin Productos lista
 $('.icono-productos-agrupados').tooltipster();
  $('.si-vincula-con-ML').tooltipster();



//filtros Navegacion Entidades
 $('#ordenar-mayor-a-menor').tooltipster();
  $('#ordenar-menor-a-mayor').tooltipster();
   $('#ver-como-cuadros').tooltipster();
    $('#ver-como-lista').tooltipster();

 //footer
 $('.contenedor-pasos-para-comprar').tooltipster();
  $('.clase-general-de-titulo-footer').tooltipster();
   $('.footer-contenedor-datos-de-titulo').tooltipster();
    
     
 //carrito
 $('.orden-ir-paso-atras').tooltipster();
  $('.Label-MetodoPago').tooltipster();

       //ver mapa footer
        $('#ver-mapa-footer').tooltipster(

           {
            content: $('.pagina-productos-mapa'),
            interactive:true,
            theme:'contenedor-header-user-carrito-notificaciones-favoritos'
           }

        );

        //carrito hover
        $('.articulo-subcontenedor-datos-spam, .Boton-Comprar-Pagina').tooltipster(

           {
            content: $('.contenedor-carrito-hover'),
            interactive:true,
            theme:'contenedor-header-menugrande'
           }

        );  



 
 //footer
 $('.metodoPago_confirmaciom-aclaracion-comentaria-textarea').tooltipster();

//admin Ordenes lista
  $('.orden-lista-acciones-eliminar').tooltipster();
  $('.orden-lista-acciones').tooltipster();
  $('.orden-lista-acciones-desplegar').tooltipster();
  $('.estrellita-user').tooltipster();
  $('.estrellita-lista-user').tooltipster();
  $('.img-marca-admin').tooltipster();
//heder usuario auth
$('.header-nav-elements-usuario-mobile_auth ').tooltipster(

   {
    content: $('.header-nav-elements-ul-usuario'),
    interactive:true,
    theme:'contenedor-header-user-carrito-notificaciones-favoritos'
   }

);

//admin cotizaciones
$('#boton-cotizacion-header-admin ').tooltipster(

   {
    content: $('.form-subirCotizacion-enviar'),
    interactive:true,
    theme:'contenedor-header-user-carrito-notificaciones-favoritos'
   }

);

//admin Ofertas
$('#boton-ofertas-header-admin').tooltipster(

   {
    content: $('.form-subirOferta-enviar'),
    interactive:true,
    theme:'contenedor-header-user-carrito-notificaciones-favoritos'
   }

);


//heder usuario guest
$('.header-nav-elements-usuario-mobile').tooltipster(

   {
    content: $('.header-nav-elements-ul-usuario'),
    interactive:true,
    theme:'contenedor-header-user-carrito-notificaciones-favoritos'
   }

);




//notificaciones  desplegado
$('#icono-header-notificaciones').tooltipster(

   {
    content: $('.notificaciones-ul'),
    interactive:true,
    theme:'contenedor-header-user-carrito-notificaciones-favoritos'
   }

);


//menu-GRande
$('.header-nav-categoria-mobile-Grande').tooltipster(

   {
    content: $('.menu_mobil-contenedor_padres-ul-grande'),
    interactive:true,
    theme:'contenedor-header-menugrande'
   }

);  

//Hover Logo Worldmaster
$('#logo-principal').tooltipster(

   {
    content: $('.Contenedor-presentacion-Hover-Logo'),
    interactive:true,
    theme:'contenedor-header-logo-hover'
   }

);


//review en productos contenido-review-individual-grande

function ReviewArticuloON()
{
  $(this).children('.contiene-los-review-del-hover-prducto')
         .removeClass('contiene-los-review-del-hover-prducto') 
         .addClass('contiene-los-review-del-hover-prducto__show');
}

function ReviewArticuloOFF()
{
   $(this).children('.contiene-los-review-del-hover-prducto__show')
         .removeClass('contiene-los-review-del-hover-prducto__show') 
         .addClass('contiene-los-review-del-hover-prducto');
}


$('.articulo-contenedor-estrellitas').hover(ReviewArticuloON,ReviewArticuloOFF);

//review en productos contenido-review-individual-grande

var hoverTimeout;

function CarritoDesplegadoON()
{
    clearTimeout(hoverTimeout);

    $(this).children('.carrito-ul')
           .removeClass('carrito-ul') 
           .addClass('carrito-ul__show');
         
}

function CarritoDesplegadoOFF()
{
  
       var $self = $(this);
    hoverTimeout = setTimeout(function()
    {
        $self.children('.carrito-ul__show')
             .removeClass('carrito-ul__show') 
             .addClass('carrito-ul');
    },
    500);
}


$('.header-nav-elements-carrito-mobile').hover(CarritoDesplegadoON,CarritoDesplegadoOFF);


