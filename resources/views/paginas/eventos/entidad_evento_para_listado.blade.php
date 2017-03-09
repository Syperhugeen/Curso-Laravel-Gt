		
		<div class="col-md-6 special-col no-padding">
			<div class="event-col"></div>
			<img class="img-greyscale" src="{{$UltimoEvento->url_img}}">
		</div>




		<div class="col-md-6 special-col table-outer">

			{{-- contiene el último evento --}}
			<div class="table-inner">
				<h2>{{$UltimoEvento->name}}</h2>
				<p>{{$UltimoEvento->description}}</p>
				<a href="{{$UltimoEvento->route}}">
					<h5 class="ampliar"><span class="glyphicon glyphicon-chevron-right"></span>AMPLIAR</h5>
				</a>
			</div>
		
		</div>

		</div>