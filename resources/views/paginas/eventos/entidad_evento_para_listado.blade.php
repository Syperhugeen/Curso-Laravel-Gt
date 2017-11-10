<a href="{{$Evento->route}}">
	<div class="col-xs-12 special-col no-padding">
	
	<div class="row">

		<div class="col-sm-6 no-padding eventos-imagen special-col-img">
			<img class="img-main" src="{{$Evento->url_img}}">
		</div>

	    <div class="col-sm-6 no-margin">
	      <div class="table-outer">
			<div class="table-inner">
				<div class="inline-logos chiqui-logos">
					@foreach($Evento->marcasevento as $Marca)
		                <!-- <a href="{{$Marca->marca->route}}"> -->
		                  <img src="{{$Marca->marca->url_img}}"> <!-- logo demarca asociada al evento -->
		                <!-- </a> -->
		             @endforeach
				</div>
				<h2>{{$Evento->name}}</h2>
				<div class="p-container hidden-xs">
					 <p class="text-center">{{$Evento->description}}</p>
				</div>
				<a href="{{$Evento->route}}">
					<h5 class="ampliar">
						<span class="glyphicon glyphicon-chevron-right"></span>AMPLIAR

					</h5>
				</a>
			</div>
		  </div>
		</div>

	</div>

	</div>
</a>
	
