@extends('layouts.user_layout.user_layout')


@section('title')
 Eventos
@stop

@section('MetaContent')
  Eventos y promociones de Global Target
@stop

@section('MetaRobot')
 INDEX,FOLLOW
@stop


 

@section('content')

 

 



    <div id="eventos">
    
    
<!--para agregar los márgenes laterales-->
<div class="container-fluid section-wrapper no-padding bgcolor-white">

{{-- contiene hasta diez eventos como máximo --}}
	<div class="row">

			<div class="col-md-8 col-md-push-2 super-space-top super-space-bottom">
				<h1 class="text-center">Eventos en los que participamos</h1>
				<p class="text-center super-space-bottom">A lo largo de nuestra trayectoria hemos sido organizadores y representantes de nuestros clientes en una amplia gama de eventos.</p>
		      	{{-- rombo divisor con el logo de GT --}}
		      	<div class="decorative-divider"><img class="img-responsive" src="imagenes/Empresa/isologo_color3.png"></div>
			</div>

			{{-- for each... insertar aquí las entidades --}}
	    @foreach($Eventos as $Evento)
	     @include('paginas.eventos.entidad_evento_para_listado')
	    @endforeach


		<!-- pagination -->
	    <div class="col-xs-12 special-col">
			<div class="row">
				<div class="">
					
						<h5 class="ampliar text-center">aqui ira la paginacion</h5>
									
				</div>
			</div>
		</div>


 	</div>
</div>



   </div> 


  
@stop