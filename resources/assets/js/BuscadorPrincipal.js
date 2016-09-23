//Boton de Formulario Busqueda Envio Form
$('body').on('click','.header-buscador-form-btn',function(e){

  e.preventDefault();

  // Show the progress bar 
  NProgress.start();

  var form   = $(this).parents('form');

  form.submit();
  
});


//easy AutoComplete
//ruta para que trae la busqueda
var url = $(".header-buscador-form-input").data('url');

var urlAbsoluta = $(".header-buscador-form-input").attr('data-urlAbsoluta');

//ruta para fijar las ruta absoluta de las imagenes
//el metodo attr a diferencia de data me devuelve un string-
var urlParaImagen = urlAbsoluta +  $(".header-buscador-form-input").attr('data-pathImg');



var options = {
    
    //url que trae los productos
    url: url,

    getValue: "name",

    //css personalizado que envuelve el input
    cssClasses:"header-contiene-input-buscador",

    adjustWidth:false,

    list:{
        match: {enabled: true}
    },

    ajaxSettings:{
            dataType: "json",
              method: "GET",
                data: { }
    },


    preparePostData: function(data) {
    data.name = $('.header-buscador-form-input').val();
    return data;
    },


    //template de la Li   
    template: {
            type: "custom",
          method: function(value, item) {
         return "<a href='"+urlAbsoluta+'/'+item.slug + '/'+item.id + '/en-worldmaster-uruguay' +"' class='contenedor-imagen-titulo-buscador'><img class='header-buscardor-img'  src='" +  urlParaImagen +  item.img + "' />" + "<div class='header-buscardor-texto'>"+ value + "</div></a>";
    }},
    //para evitar saturar el servidor
    requestDelay: 500
};

$(".header-buscador-form-input").easyAutocomplete(options);