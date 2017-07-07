{{-- rombo divisor con el logo de GT --}}
<div class="decorative-divider"><img class="img-responsive" src="imagenes/Empresa/isologo_color3.png"></div>

{{-- contenedor de la parte de eventos de la home --}}

{{-- contiene hasta dos eventos como máximo --}}
<div class="row">

	{{-- contiene la imagen principal del último evento --}}
	<div class="col-sm-6 special-col no-padding">
		<img class="img-greyscale img-main" src="{{$UltimoEvento->url_img}}">
	</div>

	<div class="col-sm-6 no-padding">


		<div class="row no-padding no-margin">

			{{-- contiene el último evento --}}
			<div class="col-xs-12 special-col table-outer"><div class="table-inner">
				<h2>{{$UltimoEvento->name}}</h2>
				<div class="p-container"><p class="text-center">{{$UltimoEvento->description}}</p></div>
				<a href="{{$UltimoEvento->route}}">
					<h5 class="ampliar"><span class="glyphicon glyphicon-chevron-right"></span>AMPLIAR</h5>
				</a>
			</div></div>

			{{-- contiene el penúltimo evento --}}
			<div class="col-xs-12 special-col table-outer"><div class="table-inner">
				<h2>{{$PenultimoEvento->name}}</h2>
				<div class="p-container"><p class="text-center">{{$PenultimoEvento->description}}</p></div>
				<a href="{{$PenultimoEvento->route}}">
					<h5 class="ampliar"><span class="glyphicon glyphicon-chevron-right"></span>AMPLIAR</h5>
				</a>			
			</div></div>
		</div>

	</div>

	<div class="col-xs-12 special-col">
		<div class="row"><!-- ver más / ampliar / explorar -->
			<div class="">
				<a href="{{route('get_pagina_eventos')}}">
					<h5 class="ampliar text-center"><span class="glyphicon glyphicon-triangle-right"></span>ver más eventos</h5>
				</a>				
			</div>
		</div>
	</div>

</div>