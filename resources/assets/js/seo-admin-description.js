


////////////////////////////////////////////////////
//automatizacion de rellenado de seo preview
var namee = $("#name").val();
var frase = $("#Seo_Frase").val();
var desription = $("#Seo_Description").val();
var keyworld = $("#Seo_KeyWord").val();
var textoplano ='  ../150 Caracteres ';
////////////////////////////////////////////////////////////
////Contador de Caracteres de la etiqueta p de seo ejemplo

var SeoPreView                  =  $("#seo_preview_productos");
var SeoPreViewSuperCategoria    =  $("#seo-preview-super_categorias");
var SeoCate                     =  $('#seo-preview_categorias');
var SeoPreViewSubCategoria      =  $("#seo-preview-sub_categorias");
var SeoPreViewCaracteres        =  $("#seo-preview-productos-contador");

if (SeoPreView.length){
/////////////////////////////////////////////////////////////////////////////////////////////
                               //////////////Producto////////////////////
$("#name").on('change', function(){

namee = $(this).val();
SeoPreView.html('Comprálo en Worldmaster Uruguay a Simbolo-Precio.'+' Encuentra más productos de '+ 'Categoria, ' + 'SubCategoria, ' + keyworld + ' ' + frase + ' ' +desription); 
SeoPreViewCaracteres.html(SeoPreView.text().length + '/150 *Cantidad de Caracteres*');

});

$("#Seo_Frase").on('change',function(){

frase = $(this).val();
SeoPreView.html('Comprálo en Worldmaster Uruguay a Simbolo-Precio.'+' Encuentra más productos de '+ 'Categoria, ' + 'SubCategoria, ' + keyworld + ' ' + frase + ' ' +desription);
SeoPreViewCaracteres.html(SeoPreView.text().length + '/150 *Cantidad de Caracteres*'); 
});

$("#Seo_Description").on('change',function(){

desription = $(this).val();
SeoPreView.html('Comprálo en Worldmaster Uruguay a Simbolo-Precio.'+' Encuentra más productos de '+ 'Categoria, ' + 'SubCategoria, ' + keyworld + ' ' + frase + ' ' +desription);
SeoPreViewCaracteres.html(SeoPreView.text().length + '/150 *Cantidad de Caracteres*'); 
});

$("#Seo_KeyWord").on('change',function(){

keyworld = $(this).val();
SeoPreView.html('Comprálo en Worldmaster Uruguay a Simbolo-Precio.'+' Encuentra más productos de '+ 'Categoria, ' + 'SubCategoria, ' + keyworld + ' ' + frase + ' ' +desription);
SeoPreViewCaracteres.html(SeoPreView.text().length + '/150 *Cantidad de Caracteres*'); 
});    
/////////////////////////////////////////////////////////////////////////////////////////////

}

if (SeoPreViewSuperCategoria.length){
/////////////////////////////////////////////////////////////////////////////////////////////
                               //////////////SuperCategorias////////////////////
$("#name").on('change', function(){

namee = $(this).val();
SeoPreViewSuperCategoria.html( frase + ' ' + namee + ' ' +desription + ' Worldmaster Uruguay. ' + keyworld ) ; 
SeoPreViewCaracteres.html( SeoPreViewSuperCategoria.text().length + '/150 *Cantidad de Caracteres*');
});

$("#Seo_Frase").on('change',function(){

frase = $(this).val();
SeoPreViewSuperCategoria.html(frase + ' ' + namee + ' ' +desription + ' Worldmaster Uruguay. ' + keyworld);
SeoPreViewCaracteres.html(SeoPreViewSuperCategoria.text().length + '/150 *Cantidad de Caracteres*'); 
});

$("#Seo_Description").on('change',function(){

desription = $(this).val();
SeoPreViewSuperCategoria.html(frase + ' ' + namee + ' ' +desription + ' Worldmaster Uruguay. ' + keyworld);
SeoPreViewCaracteres.html(SeoPreViewSuperCategoria.text().length + '/150 *Cantidad de Caracteres*'); 
});

$("#Seo_KeyWord").on('change',function(){

keyworld = $(this).val();
SeoPreViewSuperCategoria.html(frase + ' ' + namee + ' ' +desription + ' Worldmaster Uruguay. ' + keyworld );
SeoPreViewCaracteres.html(SeoPreViewSuperCategoria.text().length + textoplano); 
});    
/////////////////////////////////////////////////////////////////////////////////////////////
}

if(SeoCate.length){
/////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////Categorias 
$("#name").on('change',function(){

namee = $(this).val();
SeoCate.html( frase + ' ' + namee + ' ' + desription + ' | Worldmaster Uruguay ' +'| ' +keyworld ); 
SeoPreViewCaracteres.html( SeoCate.text().length + textoplano);
});textoplano

$("#Seo_Frase").on('change',function(){

frase = $(this).val();
SeoCate.html(frase + ' ' + namee + ' ' +desription + ' | Worldmaster Uruguay ' +'| '+ keyworld);
SeoPreViewCaracteres.html(SeoCate.text().length + textoplano); 
});

$("#Seo_Description").on('change',function(){

desription = $(this).val();
SeoCate.html(frase + ' ' + namee + ' ' +desription + ' | Worldmaster Uruguay ' +'| ' +keyworld);
SeoPreViewCaracteres.html(SeoCate.text().length + textoplano); 
});

$("#Seo_KeyWord").on('change',function(){

keyworld = $(this).val();
SeoCate.html(frase + ' ' + namee + ' ' +desription + ' | Worldmaster Uruguay ' +'| ' +keyworld );
SeoPreViewCaracteres.html(SeoCate.text().length + textoplano); 
});

/////////////////////////////////////////////////////////////////////////////////////////////
}

if(SeoPreViewSubCategoria.length){      
/////////////////////////////////////////////////////////////////////////////////////////////    
//////////////////////SubCategorias
$("#name").on('change',function(){

namee = $(this).val();
SeoPreViewSubCategoria.html( frase + ' ' + namee + ' ' +desription + ' | Worldmaster Uruguay ' +'| ' +keyworld ) ; 
SeoPreViewCaracteres.html(SeoPreViewSubCategoria.text().length + textoplano);
});

$("#Seo_Frase").on('change',function(){

frase = $(this).val();
SeoPreViewSubCategoria.html(frase + ' ' + namee + ' ' +desription + ' | Worldmaster Uruguay ' +'| '+ keyworld);
SeoPreViewCaracteres.html(SeoPreViewSubCategoria.text().length + textoplano); 
});

$("#Seo_Description").on('change',function(){

desription = $(this).val();
SeoPreViewSubCategoria.html(frase + ' ' + namee + ' ' +desription + ' | Worldmaster Uruguay ' +'| ' +keyworld);
SeoPreViewCaracteres.html(SeoPreViewSubCategoria.text().length + textoplano); 
});

$("#Seo_KeyWord").on('change',function(){

keyworld = $(this).val();
SeoPreViewSubCategoria.html(frase + ' ' + namee + ' ' +desription + ' | Worldmaster Uruguay ' +'| ' +keyworld );
SeoPreViewCaracteres.html(SeoPreViewSubCategoria.text().length + textoplano); 
});
 

/////////////////////////////////////////////////////////////////////////////////////////////
} 


