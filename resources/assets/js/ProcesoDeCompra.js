

// focalizar es para movel el la pantalla hasta ahi.
function MoverHastaElemnto(Elemnto)
{
   // focalizar
var focalizar = $(Elemnto).offset().top ;
$('html,body').animate({scrollTop: focalizar}, 1000); 
}




//el usuario click en una de las opciones para enviar
//si es de Montevideo o Interior
$('body').on('change','.Envio-Label-Montevideo_Interior',function(e){

e.preventDefault();
 // Show the progress bar 
 NProgress.start();

var form  = $(this).parent('form');
var url   = form.data('url');
var data  = form.serialize();
form.submit();

});

///////////////////////////////////////////////////////////////////////////////////
//Usuario Selecciona Retira en Tienda (Seccion == Montevideo)
$('body').on('change','.Label-Retiro-Tienda , .Label-Envio-Montevideo',function(e){

e.preventDefault();

 // Show the progress bar 
 NProgress.start();

var form  = $(this).parent('form');

//envio el formulario
form.submit();
});


///////////////////////////////////////////////////////////////////////////////////
//el usuario click en una de las opciones para enviar
//si es de Montevideo o Interior
$('body').on('change','.Label-Retiro-Tienda , .Label-Envio-Interior',function(e){

e.preventDefault();

 // Show the progress bar 
 NProgress.start();

var form  = $(this).parent('form');
var url   = form.data('url');
var data  = form.serialize();

$.ajax({
      url: url,
      data: data,
      type: 'POST',
      dataType:'json',
      success:  function(resul){

        //actualizo contenedor Metodo de envio
        $('.metodo_envio-contenedor').load(resul.ActualizaMetodoEnvio,CargaProgressBar);
        
        //notifico al usuario que se ha guardado el cambio
        $.notify({
        // options
        message: 'Genial ' + resul.Nombre + ' Nos has indicado que quieres ' +  resul.MetodoDeEnvio  
        },{
        // settings
        placement: {
        from: "bottom",
        align: "left"},
        type: 'success'
        });
      }

})//cierre ajax
}
);

///////////////////////////////////////////////////////////////////////////////////
//Es para cuando el cliente Llena el Departamento aparezca El Label Ciudad
$('body').on('change','.Label-Departamento',function(e){

e.preventDefault();
$(this).siblings('.Label-ciudad')
       .removeClass('Label-ciudad')
       .addClass('Label-ciudad__show');

       MoverHastaElemnto('.Label-ciudad__show');

});
///////////////////////////////////////////////////////////////////////////////////
//Es para cuando el cliente Llena el Ciudad aparezca El Boton
$('body').on('click','.Label-Ciudad-Input',function(e){

e.preventDefault();
$(this).parents()
       .siblings('.Boton-Continuar-Envio_Interior')
       .removeClass('Boton-Continuar-Envio_Interior')
       .addClass('Boton-Continuar-Envio_Interior__show');

       MoverHastaElemnto('.Boton-Continuar-Envio_Interior__show');

});

///////////////////////////////////////////////////////////////////////////////////
//Es para cuando el cliente rellena los datos de Departamento y Ciudad
$('body').on('click','.Boton-Continuar-Envio_Interior__show',function(e){

e.preventDefault();

 

var form  = $(this).parent('form');
form.submit();

});

///////////////////////////////////////////////////////////////////////////////////
//Es para cuando el cliente Elige una empresa de Tranposrte y le aparexca las opciones
$('body').on('change','.Select-Metodo-Envio-Interiro ',function(e){

$(this).parents()
       .siblings('.opciones-envio-Interior-contendor')
       .removeClass('opciones-envio-Interior-contendor')
       .addClass('opciones-envio-Interior-contendor__show');

       MoverHastaElemnto('.opciones-envio-Interior-contendor__show');

      

});

///////////////////////////////////////////////////////////////////////////////////
//Es para cuando el cliente Confirma que los datos son correctos
$('body').on('change','.label-interior-retiro_agencia ,.label-interior-direccion',function(e){

e.preventDefault();

 // Show the progress bar 
 NProgress.start();

var form  = $(this).parent()
                   .parent('form');
var url   = form.data('url');
var data  = form.serialize();
form.submit();


});

//para cuando guarda la dirección del usuario (sea interior o Montevideo)
$('body').on('click','.boton-confirmar-Listo_Direccion',function(e){

e.preventDefault();

 

var form  = $(this).parent().parent('form');

form.submit();


});

///////////////////////////////////////////////////////////////////////////////////
//para cuando confirma que la direccion es correcta(Se interior o Montevideo)
$('body').on('click','.boton-confirmar-direccion',function(e){

e.preventDefault();

 // Show the progress bar 
 NProgress.start();

var form  = $(this).parent('form');

form.submit();


});

///////////////////////////////////////////////////////////////////////////////////
//para cuando confirma que la direccion es correcta(Se interior o Montevideo)
$('body').on('change','.Select-Metodo-Envio-Montevideo-Barrio:not(#selecbarrioperfil)',function(e){

e.preventDefault();

 $(this).siblings('.boton-confirmar-Listo_Barrio')
        .show();

 // Show the progress bar 
 NProgress.start();

 var form  = $(this).parent('form');

 form.submit();

});




///////////////////////////////////////////////////////////////////////////////////
//El usuario Elige una empresa de Transporte (Montevideo)
//
$('body').on('change','.Label-Empresa-Transporte-Montevideo',function(e){

e.preventDefault();

 // Show the progress bar 
 NProgress.start();

var form  = $(this).parents('form');
form.submit();

});

///////////////////////////////////////////////////////////////////////////////////
//El usuario Elige un Metodo de Pago
//
$('body').on('change','.Label-MetodoPago',function(e){

e.preventDefault();

 // Show the progress bar 
 NProgress.start();

var form  = $('.Form-Envio');
form.submit();

});


///////////////////////////////////////////////////////////////////////////////////
//El usuario Elige un Metodo de Pago
//
$('body').on('change','.Sub-Contenedor-Eleccion-Moneda',function(e){

e.preventDefault();

 // Show the progress bar 
 NProgress.start();



 var form = $(this).parents().parents('form');

 form.submit();

});

///////////////////////////////////////////////////////////////////////////////////
//El usuario Elige un Metodo de Pago
//
$('body').on('change','#select-seleccion-cuotas',function(e){

 e.preventDefault();

 // Show the progress bar 
 NProgress.start();

 var form = $(this).parents('form');

 form.submit();

});

///////////////////////////////////////////////////////////////////////////////////
//El usuario Elige un Metodo de Pago
//
$('body').on('click','.boton-de-confirmacion-pago',function(e){

 e.preventDefault();

 // Show the progress bar 
 NProgress.start();

 var form = $(this).parents('form');

 form.submit();

});