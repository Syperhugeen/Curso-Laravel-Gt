//funcion que inicia mostrar mas

function MostrarMas(contenedor,cantidad,contenedor_hijos)
{
  var CantidadDeElementos = contenedor
  .children('.'+contenedor_hijos).length;

  //es la cantidad pero contada desde 0
  var indiceSeleccio = -(CantidadDeElementos);

   //compruebo cuantos elementos hay
   if(CantidadDeElementos >= cantidad)
   {
    contenedor.children('.'+contenedor_hijos)
              //del primero hasta la cantidad que elegi de elementos
              .slice(0,cantidad) 
              .removeClass(''+contenedor_hijos)
              .addClass(contenedor_hijos+'__show');

    //muestro el boton
    contenedor.children('.Boton-mostrar-mas')
              .removeClass('Boton-mostrar-mas')
              .addClass('Boton-mostrar-mas__show');
   } 
   else
   {
     contenedor
            .children('.'+contenedor_hijos)
            .slice(indiceSeleccio)
            .removeClass(contenedor_hijos)
            .addClass(contenedor_hijos+'__show');

    //oculto el boton
    contenedor.children('.Boton-mostrar-mas__show')
              .removeClass('Boton-mostrar-mas__show')  
              .addClass('Boton-mostrar-mas');
   }
}
 
////////////////////////////////////////////////////////
////////////////////////////////////////////////////////
//Mostrar Reviews
MostrarMas($('.contenedor-Reviews-footer-producto'),3,'contenido-review-individual-grande');

//cuando da click en el boton mostrar mas Reviews
$('body').on('click','#Boton-Mostrar-mas-Reviews',function(e){

var contenedor = $(this).parent('div'); 
MostrarMas(contenedor,1,'contenido-review-individual-grande');
});


////////////////////////////////////////////////////////
////////////////////////////////////////////////////////
//Mostrar Reviews en el Footer
MostrarMas($('.contenedor-Reviews-footer-worldmaster'),3,'contenido-review-individual-grande');


//cuando da click en el boton mostrar mas Reviews
$('body').on('click','#Boton-Mostrar-mas-Reviews',function(e){

var contenedor = $(this).parent('div'); 
MostrarMas(contenedor,1,'contenido-review-individual-grande');
});


////////////////////////////////////////////////////////
////////////////////////////////////////////////////////
//Mostrar Preguntas
MostrarMas($('.contenedor-de-preguntas-realizadas'),1,'contenedor-preguntas-respuestas');

//cuando da click en el boton mostrar mas Preguntas
$('body').on('click','#Boton-mostrar-mas-Preguntas',function(e){

var contenedor = $(this).parent('div'); 
MostrarMas(contenedor,1,'contenedor-preguntas-respuestas');
});

////////////////////////////////////////////////////////
////////////////////////////////////////////////////////
//Mostrar Reviews Hover Articulos
MostrarMas($('.contiene-los-review-del-hover-prducto'),1,'contenido-review-individual-grande');

//cuando da click en el boton mostrar mas Preguntas
$('body').on('click','#Boton-Mostrar-mas-Reviews-hover-articulo',function(e){

var contenedor = $(this).parent('div'); 
MostrarMas(contenedor,1,'contenido-review-individual-grande');
});