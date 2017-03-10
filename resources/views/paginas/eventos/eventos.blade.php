@extends('layouts.user_layout.user_layout')


@section('title')
 Eventos
@stop

@section('MetaContent')
  Description Home 
@stop

@section('MetaRobot')
 INDEX,FOLLOW
@stop


 

@section('content')

 

 



    <div id="eventos">
    
    
<!--para agregar los márgenes laterales-->
<div class="container-fluid section-wrapper bgcolor-3light">

{{-- contiene hasta diez eventos como máximo --}}
	<div class="row">

	<div class="col-xs-12 no-padding">
	{{-- rombo divisor con el logo de GT --}}
	<div class="decorative-divider"><img class="img-responsive" src="imagenes/Empresa/isologo.png"></div>
	</div>

		<div class="col-md-8 col-md-push-2 super-space-top super-space-bottom">
			<h1 class="text-center">Eventos en los que participamos</h1>
			<p class="text-center super-space-bottom">A lo largo de nuestra trayectoria hemos sido organizadores y representantes de nuestros clientes en una amplia gama de eventos.</p>
		</div>

		{{-- for each... insertar aquí las entidades --}}
    @foreach($Eventos as $Evento)
     @include('paginas.eventos.entidad_evento_para_listado')
    @endforeach

 	</div>
</div>



   </div> 


  
@stop