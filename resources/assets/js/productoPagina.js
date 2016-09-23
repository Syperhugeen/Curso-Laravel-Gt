
////////////////////////////////////////////////
//Resta Unidades
$('body').on('click','.Resta-Input',function(e){


NProgress.start();

var input = $(this).siblings('input');

if(input.val() > 1)
{
  input.val(input.val() -1);
  input.trigger('change');
}
else
{
  //notifico al usuario que se ha guardado el cambio
        $.notify({
        // options
        message: 'Ya indicaste el minimo posible de unidades'  
        },{
        // settings
        placement: {
        from: "bottom",
        align: "left"},
        type: 'warning'
        });
}
//paro la barra
CargaProgressBar();
});
 

////////////////////////////////////////////////
//Suma Unidades
$('body').on('click','.Suma-Input',function(e){


NProgress.start();

var input = $(this).siblings('input');
var stock = $(this).data('stock');



if(input.val() < stock)
{
  input.val(parseInt(input.val()) + parseInt(1));
  input.trigger('change');
}
else
{
  //notifico al usuario que se ha guardado el cambio
        $.notify({
        // options
        message: 'Tenemos en stock solo ' + stock +' unidades'  
        },{
        // settings
        placement: {
        from: "bottom",
        align: "left"},
        type: 'warning'
        });
}
//paro la barra
CargaProgressBar();
});