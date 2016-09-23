// aqui definimos los scroll que se hacen en la pagina

// usamos la funcion ""MoverHastaElemnto(Elemnto)"";


//////////////////////////////////////////////////////////////
//click en preguntas respondidas - Pagina Productos
$('body').on('click','#sroll-a-preguntas',function(e){

 // Show the progress bar 
 NProgress.start();

 //muevo hasta
 $('body').scrollTo('.contenedor-de-preguntas-realizadas',{duration:2000, offsetTop : '125'});

 //detengo la barra de carga
 CargaProgressBar();

});

//////////////////////////////////////////////////////////////
//click en reviews - Pagina Productos
$('body').on('click','#scroll-a-reviews',function(e){

 // Show the progress bar 
 NProgress.start();

 //muevo hasta
 $('body').scrollTo('.contenedor-Reviews-footer-producto',{duration:1000, offsetTop : '125'}); 

 //detengo la barra de carga
 CargaProgressBar();

});

//click boton envios
$('body').on('click','#icono-Envio-Productos',function(e){

 // Show the progress bar 
 NProgress.start();

 //muevo hasta
 $('body').scrollTo('.Contenedor-MetodosDeEnvios-Producto',{duration:2000, offsetTop : '125'}); 

 //detengo la barra de carga
 CargaProgressBar();

});

//click boton metodo de pagos 
$('body').on('click','#icono-MetodoPago-Productos',function(e){

 // Show the progress bar 
 NProgress.start();

 //muevo hasta
 $('body').scrollTo('.Contenedor-MetodosDeEnvios-Producto',{duration:2000, offsetTop : '125'}); 

 //detengo la barra de carga
 CargaProgressBar();

});

//click boton retiro
$('body').on('click','#icono-LocalReitor-Productos',function(e){

 // Show the progress bar 
 NProgress.start();

 //muevo hasta
 $('body').scrollTo('.Contenedor-MetodosDeEnvios-Producto',{duration:2000, offsetTop : '125'}); 

 //detengo la barra de carga
 CargaProgressBar();

});



//click boton preguntas
$('body').on('click','#icono-Pregunta-Productos',function(e){

 // Show the progress bar 
 NProgress.start();

 //muevo hasta
 $('body').scrollTo('.contenedor-de-preguntas-realizadas',{duration:2000, offsetTop : '125'}); 

 //detengo la barra de carga
 CargaProgressBar();

});
