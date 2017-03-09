		
		<div class="col-md-6 special-col no-padding">
			<div class="event-col"></div>
			<img class="img-greyscale" src="{{$Evento->url_img}}">
		</div>




		<div class="col-md-6 special-col table-outer">

			{{-- contiene el último evento --}}
			<div class="table-inner">
				<h2>{{$Evento->name}}</h2>
				<p>{{$Evento->description}}</p>
				<a href="{{$Evento->route}}">
					<h5 class="ampliar"><span class="glyphicon glyphicon-chevron-right"></span>AMPLIAR</h5>
				</a>
			</div>
		
		</div>

		</div>