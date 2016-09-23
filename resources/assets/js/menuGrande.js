
//Cuando me pongo arriba de SuperCategoria
////////////////////////////////////////////////////////////////////////
function OnSuperCategoria()
{
 $(this).children('.ul-childs-categorias')
 		.removeClass('ul-childs-categorias')
 		.addClass('ul-childs-categorias__show')
 		;
 		
}

function OffSuperCategoria()
{
	$(this).children('.ul-childs-categorias__show')
		   .removeClass('ul-childs-categorias__show')
 		   .addClass('ul-childs-categorias');
}

$('.li-Super_Categorias').hover(OnSuperCategoria,OffSuperCategoria);