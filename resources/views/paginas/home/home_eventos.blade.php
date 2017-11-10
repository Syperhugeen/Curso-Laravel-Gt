<div class="row bgcolor-white space-bottom">
	<div class="col-md-8 col-md-push-2 space-top">
	  <h2 class="section-title text-center">Recientes lanzamientos</h2>
	</div>

	<!--flecha guía hacia abajo (indicando que hay más contenido)-->
	<div class="col-md-8 col-md-push-2">
		<div class="text-center">
		<h1 class="color-3light"><span class="glyphicon glyphicon-triangle-bottom"></span></h1>
		</div>
	</div>
</div>

{{-- rombo divisor con el logo de GT --}}
<div class="decorative-divider"><img class="img-responsive" src="imagenes/Empresa/isologo_color3.png"></div>

{{-- contenedor de la parte de eventos de la home --}}

{{-- contiene hasta dos eventos como máximo --}}
<div class="row hr-border-top-pegado">

{{-- ultimo evento --}}
<a href="{{$UltimoEvento->route}}">
	<div class="col-xs-12 special-col no-padding">
		<div class="row">
			<div class="col-sm-6 no-padding eventos-imagen">
				<img class="img-main" src="{{$UltimoEvento->url_img}}">
			</div>
		    <div class="col-sm-6 no-margin">
		      <div class="table-outer">
				<div class="table-inner">
					<div class="inline-logos chiqui-logos">
						@foreach($UltimoEvento->marcasevento as $Marca)
			                <!-- <a href="{{$Marca->marca->route}}"> -->
			                  <img src="{{$Marca->marca->url_img}}"> <!-- logo demarca asociada al evento -->
			                <!-- </a> -->
			             @endforeach
					</div>
					<h2>{{$UltimoEvento->name}}</h2>
					<div class="p-container hidden-xs"><p class="text-center">{{$UltimoEvento->description}}</p></div>
					<a href="{{$UltimoEvento->route}}">
						<h5 class="ampliar"><span class="glyphicon glyphicon-chevron-right"></span>AMPLIAR</h5>
					</a>
				</div>
			  </div>
			</div>
		</div>
	</div>
</a>


{{-- penultimo evento --}}
<a href="{{$PenultimoEvento->route}}">
	<div class="col-xs-12 special-col no-padding">
		<div class="row">
			<div class="col-sm-6 no-padding eventos-imagen">
				<img class="img-main" src="{{$PenultimoEvento->url_img}}">
			</div>
		    <div class="col-sm-6 no-margin">
		      <div class="table-outer">
				<div class="table-inner">
					<div class="inline-logos chiqui-logos">
						@foreach($PenultimoEvento->marcasevento as $Marca)
			                <!-- <a href="{{$Marca->marca->route}}"> -->
			                  <img src="{{$Marca->marca->url_img}}"> <!-- logo demarca asociada al evento -->
			                <!-- </a> -->
			             @endforeach
					</div>
					<h2>{{$PenultimoEvento->name}}</h2>
					<div class="p-container hidden-xs"><p class="text-center">{{$PenultimoEvento->description}}</p></div>
					<a href="{{$PenultimoEvento->route}}">
						<h5 class="ampliar"><span class="glyphicon glyphicon-chevron-right"></span>AMPLIAR</h5>
					</a>
				</div>
			  </div>
			</div>
		</div>
	</div>
</a>


{{-- boton - ver mas eventos --}}
<a href="{{route('get_pagina_eventos')}}">
	<div class="col-xs-12 special-col">
		<div class="row"><!-- ver más / ampliar / explorar -->
			<div class="">
				<a href="{{route('get_pagina_eventos')}}">
					<h5 class="ampliar text-center"><span class="glyphicon glyphicon-triangle-right"></span>ver más eventos</h5>
				</a>				
			</div>
		</div>
	</div>
</a>


</div>























