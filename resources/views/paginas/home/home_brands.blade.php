<!--row para anunciar título de las best brands y mini-link para ampliar (ver más brands)-->
<div class="row">

<!--ribbon bolt of cloth (red or golden)-->
<div class="col-md-3 col-md-push-1 col-lg-2 col-lg-push-2 puzzle-box-index10 wow slideInLeft hidden-xs hidden-sm text-center">
<div class="destacado-pliegues"><h2 class="quote">Nuestro prestigio yace en la grandeza de aquellos que nos eligen.</h2></div>
</div>

<div class="col-sm-10 col-sm-push-1 hidden-md hidden-lg text-center space-bottom">
<div><h1 class="quote color-2light">Nuestro prestigio yace en la grandeza de aquellos que nos eligen.</h1></div>
</div>

<div class="col-xs-12 logos-carousel-col"><!--logos slider-->
	<section class="customer-logos wow fadeIn delay1b">

		{{-- las marcas de la base de datos --}}
	  @foreach($Marcas as $Marca)
		 <a href="{{$Marca->route}}"><img src="{{$Marca->url_img}}"></a> 
		@endforeach 

	</section>
</div>

<!-- /row-->
</div>

<div class="row">
<div class="col-xs-12 special-col"><!-- ver más / ampliar / explorar -->
	<a href="{{route('get_pagina_marcas')}}">
		<h5 class="ampliar text-center">
		 <span class="glyphicon glyphicon-triangle-right"></span> 
		  ver todas las marcas
		</h5>
	</a> 
</div>


<!-- /row-->
</div>