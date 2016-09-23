function Noty(resul,cantidad)
{
  return $.notify(
      {
      // options
      icon: resul.ProductoImagen,
      title: 'Agregastes al carro' + ' ' + cantidad +' ',
      message: resul.ProductoNombre 

      },


      {
      // settings
      type: 'minimalist',
      icon_type: 'image',
      placement: {
        from: "bottom",
        align: "right"
      },
      template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
        '<img data-notify="icon" class="img-circle pull-left">' +
        '<span data-notify="title">{1}</span>' +
        '<span data-notify="message">{2}</span>' +
        '<a href="'+resul.CarritoURL+'"  data-notify="url">'+ ' Ir al Carrito'+'</a>'+
        '</div>'
      });
}







/*agregar mediante ajax las unidades al carrito*/
/////////////////////////////////////////////////
     // comeinza
////////////////////////////////////////////////
$('body').on('click','.articulo-subcontenedor-datos-spam',function(e){

  e.preventDefault();

  // Show the progress bar 
  NProgress.start();

  var url             = $(this).data('url');
  var id_producto     = $(this).data('id');
  var precio_producto = $(this).data('precio');
  var moneda_producto = $(this).data('moneda');

  //Facebook Pixel Agregar Al Carro
  fbq('track', 'AddToCart', {
      content_ids: [id_producto],
      content_type: 'product',
      value: precio_producto,
      currency: moneda_producto 
  }); 

  
  //envio de peticion con ayax

     $.ajax({
      url: url,
      cache: false,
      async: true,
      type: 'GET',
      dataType:'json',
      success:  function(resul){

     //para recargar las unidades del carrito en header
     $('.header-nav-elements-carrito-mobile').load(resul.CarritoURLCargar,CargaProgressBar);

     //para recargar la lista de articulos carrito deplegable
     $('.carrito-ul').load(resul.RenderCarrito,CargaProgressBar);

     $('.carrito-contenedor').load(resul.RenderCarritoPag);
     //notificacion al agregar una unidad
     $.notify(
      {
      // options
      icon: resul.ProductoImagen,
      title: 'Agregastes al carro' + ' ' +resul.ProductoCantidad +' ',
      message: resul.ProductoNombre 

      },


      {
      // settings
      type: 'minimalist',
      icon_type: 'image',
      placement: {
		    from: "bottom",
		    align: "right"
	},
      template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
		'<img data-notify="icon" class="img-circle pull-left">' +
		'<span data-notify="title">{1}</span>' +
		'<span data-notify="message">{2}</span>' +
		'<a href="'+resul.CarritoURL+'"  data-notify="url">'+ ' Ir al Carrito'+'</a>'+
	'</div>'
      });

     }});
});


/////////////////////////////////////////////////
     // termina
////////////////////////////////////////////////



/*eliminar mediante ajax las unidades al carrito-pagina*/
//////////
/////////// Pagina Pagina Pagina Pagina 
///////////
$('body').on('click','.li-carrito-eliminar-a',function(e){

  e.preventDefault();

  var url   = $(this).data('url');
  var li    = $(this).parent('.li-carrito'); 
  
   // Show the progress bar 
   NProgress.start();
    

     //envio de peticion con ayax

     $.ajax({
      url: url,
      cache: false,
      type: 'GET',
      dataType:'json',
      success: function(resul){

     //para recargar las unidades del carrito en header
     $('.header-nav-elements-carrito-mobile').load(resul.CarritoURLCargar,CargaProgressBar);

     //para recargar la lista de articulos carrito deplegable
     $('.carrito-ul').load(resul.RenderCarrito);

     
     $('.carrito-contenedor').load(resul.RenderCarritoPag);
     //para recargar la lista de articulos carrito pag
     /*li.hide();*/
     }});
});

/*eliminar mediante ajax las unidades al carrito-desplegado*/
//////////
/////////// Desplegado Desplegado Desplegado 
///////////
$('body').on('click','.carrito-li-eliminar',function(e){

  e.preventDefault();

  var url   = $(this).data('url');
  var li    = $(this).parent('.carrito-li'); 
  
 // Show the progress bar 
 NProgress.start();
   

     //envio de peticion con ayax
     $.ajax({
      url: url,
      cache: false,
      type: 'GET',
      dataType:'json',
      success: function(resul){

     //para recargar las unidades del carrito en header
     $('.header-nav-elements-carrito-mobile').load(resul.CarritoURLCargar,CargaProgressBar);

     $('.carrito-ul').load(resul.RenderCarrito);
     
     $('.carrito-contenedor').load(resul.RenderCarritoPag);
     }});
});




//Actualizo unidades (cuando doy click en comprar on pagina)
$('body').on('click','.Boton-Comprar-Pagina',function(e){

  e.preventDefault();

  NProgress.start();

 
  var Parcial      = $(this).data('parcial');  
  var cantidad     = $(this).siblings('input').val();
  var input        = $(this).siblings('input');

  //stock del prodcuto
  var stock           = $(this).data('stock');
  var url             = Parcial + cantidad; 
  var id_producto     = $(this).data('id');
  var precio_producto = $(this).data('precio');
  var moneda_producto = $(this).data('moneda');

  //Facebook Pixel Agregar Al Carro
  fbq('track', 'AddToCart', {
      content_ids: [id_producto],
      content_type: 'product',
      value: precio_producto,
      currency: moneda_producto 
  });  
  

  if (stock >= cantidad) //Si esto se cumple envio la peticion
  {
    //envio de peticion con ayax

     $.ajax({
      url: url,
      cache: false,
      type: 'GET',
      dataType:'json',
      success: function(resul){ 

     //para recargar las unidades del carrito en header
     $('.header-nav-elements-carrito-mobile').load(resul.CarritoURLCargar,CargaProgressBar);

     //para recargar la lista de articulos carrito deplegable
     $('.carrito-ul').load(resul.RenderCarrito);

     
     $('.carrito-contenedor').load(resul.RenderCarritoPag);

     //funcion Noty
     Noty(resul,cantidad);
     }});
  }
  else
  {
    //funcion que para el progres bar
    CargaProgressBar();

    $.notify({
      // options
      message: 'Nos quedan en stock solo ' +stock +' unidades.' 
      },
      {
      // settings
      type: 'warning',
      placement: {
                  from: "top",
                  align: "left"
                 }

      });

     //Receteo el input de cantidad a 1 sola unidad.
     $(this).siblings('input').val(1);
  }

    

     
});

//Actualizo unidades (cuando cambio el valor del input en carrito page)
$('body').on('change','.li-carrito-cantidad-input',function(e){

  e.preventDefault();

   NProgress.start();

  

  var Parcial      = $(this).data('parcial');
  
  var cantidad     = $(this).val();

  

  //stock del prodcuto
  var stock        = $(this).data('stock');

  var url          = Parcial + cantidad;  
  

  if (stock >= cantidad) //Si esto se cumple envio la peticion
  {
    //envio de peticion con ayax

     $.ajax({
      url: url,
      cache: false,
      type: 'GET',
      dataType:'json',
      success: function(resul){ 

     //para recargar las unidades del carrito en header
     $('.header-nav-elements-carrito-mobile').load(resul.CarritoURLCargar,CargaProgressBar);

     //para recargar la lista de articulos carrito deplegable
     $('.carrito-ul').load(resul.RenderCarrito);

     
     $('.carrito-contenedor').load(resul.RenderCarritoPag);


     
     }});
  }
  else
  {
    //funcion que para el progres bar
    CargaProgressBar();

    $.notify({
      // options
      message: 'Nos quedan en stock solo ' +stock +' unidades.' 
      },
      {
      // settings
      type: 'warning',
      placement: {
                  from: "top",
                  align: "left"
                 }

      });

     //Receteo el input de cantidad a 1 sola unidad.
     $(this).val(1);
  }

    

     
});


//Actualizo unidades (cuando doy click en comprar por mayor on pagina)
$('body').on('click','.Boton-Comprar-Mayor-Pagina',function(e){

  e.preventDefault();

   NProgress.start();

  var Parcial      = $(this).data('parcial');
  
  var cantidad     = $(this).data('cantidad');

  
  //stock del prodcuto
  var stock        = $(this).data('stock');

  var url          = Parcial + cantidad;  
  

  if (stock >= cantidad) //Si esto se cumple envio la peticion
  {
    //envio de peticion con ayax

     $.ajax({
      url: url,
      cache: false,
      type: 'GET',
      dataType:'json',
      success: function(resul){ 

     //para recargar las unidades del carrito en header
     $('.header-nav-elements-carrito-mobile').load(resul.CarritoURLCargar,CargaProgressBar);

     //para recargar la lista de articulos carrito deplegable
     $('.carrito-ul').load(resul.RenderCarrito);

     
     $('.carrito-contenedor').load(resul.RenderCarritoPag);
     
     //funcion Noty
     Noty(resul,cantidad);
     
  }});
  }
  

    

     
});