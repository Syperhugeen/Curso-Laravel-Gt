
	<div class="col-xs-12 special-col no-padding">
	<div class="row">

		<div class="col-sm-6 no-padding">
			<img class="img-greyscale" src="{{$Evento->url_img}}">
		</div>

		<div class="col-sm-6 table-outer">
			{{-- contiene el último evento --}}
			<div class="table-inner">
				<h2>{{$Evento->name}}</h2>
				<div class="p-container"><p class="text-center">{{$Evento->description}}</p></div>
				<a href="{{$Evento->route}}">
					<h5 class="ampliar"><span class="glyphicon glyphicon-chevron-right"></span>AMPLIAR</h5>
				</a>
			</div>
		</div>

	</div>
	</div>
	
