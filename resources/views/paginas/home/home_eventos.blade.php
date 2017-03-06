{{-- rombo divisor con el logo de GT --}}
<div class="decorative-divider"><img class="img-responsive" src="imagenes/Empresa/isologo.png"></div>

{{-- contenedor de la parte de eventos de la home --}}

{{-- contiene hasta dos eventos como máximo --}}
<div class="row">

	{{-- contiene la imagen principal del último evento --}}
	<div class="col-md-6 special-col no-padding">
		<img class="img-greyscale" src="{{$UltimoEvento->url_img}}">
	</div>

	<div class="col-md-6">


		<div class="row">

			{{-- contiene el último evento --}}
			<div class="col-xs-12 special-col">
				<h2>{{$UltimoEvento->name}}</h2>
				<p>{{$UltimoEvento->description}}</p>
				<a href="{{$UltimoEvento->route}}">
					<h5 class="ampliar"><span class="glyphicon glyphicon-chevron-right"></span>AMPLIAR</h5>
				</a>
			</div>

			{{-- contiene el penúltimo evento --}}
			<div class="col-xs-12 special-col">
				<h2>{{$PenultimoEvento->name}}</h2>
				<p>{{$PenultimoEvento->description}}</p>
				<a href="{{$PenultimoEvento->route}}">
					<h5 class="ampliar"><span class="glyphicon glyphicon-chevron-right"></span>AMPLIAR</h5>
				</a>			
			</div>
		</div>

	</div>

	<div class="col-xs-12">
		<div class="row"><!-- ver más / ampliar / explorar -->
			<div class="special-col">
				<a href="{{route('get_pagina_eventos')}}">
					<h5 class="ampliar text-center"><span class="glyphicon glyphicon-triangle-right"></span>ver más eventos</h5>
				</a>				
			</div>
		</div>
	</div>

</div>