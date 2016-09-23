


//*********************************************
function a (){
  $(this).removeClass( "icon-view_headline" )
         .addClass("icon-cancel")
         .addClass("header-nav-elements-usuario--show")
         //Flechita abajo
         .children().hide();
         
  //Muestro el Menu       
  $('.menu_mobil').show();        
}

function b(){
  $(this).removeClass( "icon-cancel" )
         .addClass("icon-view_headline")
         .removeClass( "header-nav-elements-usuario--show" )
         //Flechita abajo
         .children().show();
 //Oculto el Menu       
  $('.menu_mobil').hide(); 
}

//icono de categoria
$('#header-btn-categoria-mobil').clicktoggle(a,b);
//*********************************************

//*********************************************





//*********************************************
//Formulario de Busqueda para mobiles

//oculto el form de busqueda
/*$('.contenedor-form-busqueda').hide();*/
//*********************************************

function e (){
  $(this).addClass("header-nav-elements-usuario--show")
         .addClass("icon-cancel")
         .removeClass( "icon-search" )
         //Flechita abajo
         .children().hide();
  //muestro form busqueda       
  $('.contenedor-form-busqueda').show();
}

function f(){
  $(this).removeClass( "header-nav-elements-usuario--show" )
         .removeClass( "icon-cancel" )
         .addClass("icon-search")
         //Flechita abajo
         .children().show();
  //oculto form busqueda       
  $('.contenedor-form-busqueda').hide();
         
}

//icono de buscador
$('#header-btn-busqueda-mobil').clicktoggle(e,f);






/////////////////////////////////////////////////////////
















