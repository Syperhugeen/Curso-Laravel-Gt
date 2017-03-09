	<div class="col-xs-12 special-col">
	<div class="row">

		<div class="col-md-6 no-padding">
			<div class="event-col"></div>
			<img class="img-greyscale" src="{{$Evento->url_img}}">
		</div>

		<div class="col-md-6 table-outer">
			{{-- contiene el último evento --}}
			<div class="table-inner">
				<h2>{{$Evento->name}}</h2>
				<p class="text-center">{{$Evento->description}}</p>
				<a href="{{$Evento->route}}">
					<h5 class="ampliar"><span class="glyphicon glyphicon-chevron-right"></span>AMPLIAR</h5>
				</a>
			</div>
		</div>

	</div>
	</div>