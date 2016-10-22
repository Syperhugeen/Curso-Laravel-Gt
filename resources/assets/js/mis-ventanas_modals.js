// Muestro Form De Direccion en Perfil User
 function MuestroForm(elem)
 {
   elem
    .removeClass('contenedor-form-de-direccion-en-perfil-user')
    .addClass('contenedor-form-de-direccion-en-perfil-user__show');

    
 }

 function OcultoForm()
 {
   $(this)
    .removeClass('contenedor-form-de-direccion-en-perfil-user__show')
    .addClass('contenedor-form-de-direccion-en-perfil-user');


 }

$('#show-direccion-en-perfil-user').avgrund(

{
    width: 370, // max is 640px
    height: 580, // max is 350px
    showClose: true, // switch to 'true' for enabling close button
    showCloseText: 'cerrar', // type your text for close button
    closeByEscape: true, // enables closing popup by 'Esc'..
    closeByDocument: true, // ..and by clicking document itself
    holderClass: '', // lets you name custom class for popin holder..
    overlayClass: '', // ..and overlay block
    enableStackAnimation: false, // enables different type of popin's animation
    onBlurContainer: '', // enables blur filter for specified block
    openOnEvent: true, // set to 'false' to init on load
    setEvent: 'click', // use your event like 'mouseover', 'touchmove', etc.
   
    template: $('.contenedor-form-de-direccion-en-perfil-user') // or function (elem) { ... }, or selector $('.content')
}


  );
////////////////////////////////////////////////////////////////////////

$('#show-crear-direccion-en-perfil-user').avgrund(

{
    width: 370, // max is 640px
    height: 580, // max is 350px
    showClose: true, // switch to 'true' for enabling close button
    showCloseText: 'cerrar', // type your text for close button
    closeByEscape: true, // enables closing popup by 'Esc'..
    closeByDocument: true, // ..and by clicking document itself
    overlayClass: '', // ..and overlay block
    enableStackAnimation: false, // enables different type of popin's animation
    onBlurContainer: '', // enables blur filter for specified block
    openOnEvent: true, // set to 'false' to init on load
    setEvent: 'click', // use your event like 'mouseover', 'touchmove', etc.
   
    template: $('.contenedor-form-de-crear-direccion-en-perfil-user') // or function (elem) { ... }, or selector $('.content')
}


  );
////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////

$('#boton-agregar-producto-desde-admin').avgrund(

{
    width: 640, // max is 640px
    height: 640, // max is 350px
    showClose: true, // switch to 'true' for enabling close button
    showCloseText: 'cerrar', // type your text for close button
    closeByEscape: false, // enables closing popup by 'Esc'..
    closeByDocument: false, // ..and by clicking document itself
    holderClass: '', // lets you name custom class for popin holder..
    overlayClass: '', // ..and overlay block
    enableStackAnimation: false, // enables different type of popin's animation
    onBlurContainer: '', // enables blur filter for specified block
    openOnEvent: true, // set to 'false' to init on load
    setEvent: 'click', // use your event like 'mouseover', 'touchmove', etc.
   
    template: $('.form-agregar-producto-agrupado') // or function (elem) { ... }, or selector $('.content')
}


  );
////////////////////////////////////////////////////////////////////////