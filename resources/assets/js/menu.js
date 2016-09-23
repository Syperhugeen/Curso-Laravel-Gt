

//Oculto
//*************************************************************
$('.menu_mobil').hide(); 

$('.menu_mobil-contenedor-childs').hide();

 

$('.SubCategoria-ul').hide();

//*************************************************************

//Al tocar span desplega categorias
//*************************************************************
function desplego (){
$(this).removeClass( "icon-keyboard_arrow_down" )
       .addClass("icon-cancel")
       .addClass("menu_mobil-contenedor_padres-ul-Super_Categorias-span--show")
       .parent().parent().find('.menu_mobil-contenedor-childs').show();

}

function plego(){
$(this).addClass( "icon-keyboard_arrow_down" )
       .removeClass("icon-cancel")
       .removeClass("menu_mobil-contenedor_padres-ul-Super_Categorias-span--show")
       .parent().parent().find('.menu_mobil-contenedor-childs').hide();

}


 $('.menu_mobil-contenedor_padres-ul-Super_Categorias-span').clicktoggle(desplego,plego);
//*************************************************************


//Al tocar span desplega Subcategorias
//*************************************************************
function desplegosub(){
$(this).removeClass( "icon-add_circle_outline" )
       .addClass("icon-remove_circle_outline")
       .addClass("categoria_li-img_text_span-span--show")
       .parent().parent().find('.SubCategoria-ul').show();
 
}

function plegosub(){
$(this).addClass( "icon-add_circle_outline" )
       .removeClass("icon-remove_circle_outline")
       .removeClass("categoria_li-img_text_span-span--show")
       .parent().parent().find('.SubCategoria-ul').hide();

}


$('.categoria_li-img_text_span-span').clicktoggle(desplegosub,plegosub);
//*************************************************************

























