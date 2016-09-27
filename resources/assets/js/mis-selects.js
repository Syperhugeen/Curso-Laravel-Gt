//inicio chose en todos los selects
 $('select:not(.contenedor-estrellitas-select,.navbar-form,#SuperCategoria_id,#Categoria_id,#SubCategoria_id,#Marca_id)').chosen({
 width:"100%"}); //todos los select menos ese que indique


 $('#select-productos-agrupados').chosen({
 width:"100%"});




   //Creo una funcion
   //values es lo que viene por jason desde el controlador
   $.fn.populateSelect = function(values)
   {
     var options = '';

     //row es la data del array que viene desde el controlador

     $.each(values, function(key, row) {
      options += '<option value="'+ row.value +'">' +row.text+ '</option>';
     });
     //crea los options del select
     $(this).html(options);
   }
    
   
  
   //Metodo para Categorias
   $('#SuperCategoria_id').change(function(){      

      var SuperCategoria_id = $(this).val();
      if(SuperCategoria_id =='')
      {
        $('#Categoria_id').empty();
      }
      else
      {
        $.getJSON( 'Categoria/'+ SuperCategoria_id,null, function(values){
          $('#Categoria_id').populateSelect(values);
        });

      } 

   });

   //Metodo para SubCategorias
   $('#Categoria_id').change(function(){
      var Categoria_id = $(this).val();
      if(Categoria_id =='')
      {
        $('#SubCategoria_id').empty();
      }
      else
      {
        $.getJSON( 'SubCategoria/'+ Categoria_id,null, function(values){
          $('#SubCategoria_id').populateSelect(values);
        });
      } 

   });  

 


