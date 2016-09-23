$('body').on('click','.buscar_por_span-span',function(e){

e.preventDefault();

 // Show the progress bar 
 NProgress.start();

var form  = $(this).children('form');
var url   = $(this).data('url');
var data  = form.serialize();

form.submit();
}
);