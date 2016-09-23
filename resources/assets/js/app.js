


$('.btn.btn-danger.btn-xs').click(function(e){

  e.preventDefault();

  //obtengo el elemto de la fila
  var row  = $(this).parents('tr');

  var id   = row.data('id');

  var form = $('#form-eliminar');

  var url  = form.attr('action').replace(':USER_ID', id);

  var data = form.serialize();

  // creo la variable para determinar con if si es tru or false
  ///
  var confirmacion = confirm('¿estas seguro de eliminar?');
  
  //Si es verdaderoa se borra
  if (confirmacion)
  {
       //envio de peticion con ayax

     $.post(url,data, function(resul){
    
     //elimino de la vista al usuario
     row.fadeOut();

     //alert(resul);
     
     $.notify({
      // options
      message: resul 
      },{
      // settings
      type: 'danger'
      });
      });
  }
  else
  {
  //notifico que el usuario no fue borrado
  $.notify({
      // options
      message: 'usuario no borrado' 
      },{
      // settings
      type: 'warning'
      });
  } 

   
});

/////////////////////Fin de el boton delet users//////////////////////////////////////////


    /// Aqui estoy quitando los espacio y sustituirlos por "-".
    //  Es para los campos que tienen slug
    $("#name").keyup(function () {
        var value = $(this).val().replace(/\s+/g, '-');
        $("#slug").val(value);
    });




        

        









