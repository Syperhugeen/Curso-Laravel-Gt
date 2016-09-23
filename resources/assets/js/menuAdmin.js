

//menu de admin de categorias
function OnMenuAdmin()
{
 $(this).children('.admin-ul-contenedor')
 		.removeClass('admin-ul-contenedor')
 		.addClass('admin-ul-contenedor__show');
}

function OfMenuAdmin()
{
	$(this).children('.admin-ul-contenedor__show')
		   .removeClass('admin-ul-contenedor__show')
 		   .addClass('admin-ul-contenedor');
}

$('.admin-titulo-categoria').hover(OnMenuAdmin,OfMenuAdmin);