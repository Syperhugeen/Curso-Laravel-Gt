<!--row para anunciar título de las best brands y mini-link para ampliar (ver más brands)-->
<div class="row space-bottom">

<!--ribbon bolt of cloth (red or golden)-->
<div class="col-md-3 col-md-push-2  hidden-xs hidden-sm text-center">
<div class="destacado-pliegues"><h1 class="quote">Nuestro prestigio yace en la grandeza de aquellos que nos eligen.</h1></div>
</div>

<div class="col-sm-10 col-sm-push-1 hidden-md hidden-lg text-center space-bottom">
<div><h1 class="quote">Nuestro prestigio yace en la grandeza de aquellos que nos eligen.</h1></div>
</div>

<div class="col-xs-12 logos-carousel-col"><!--logos slider-->
	<section class="customer-logos slider">

		{{-- las marcas de la base de datos --}}
	  @foreach($Marcas as $Marca)
		 <div class="slide"><img src="{{$Marca->url_img}}"></div>
		@endforeach 

		{{-- 
		  *
		  * son las imagenes que tenias de muestra te las deje muteadas 
		  *		 
		--}}

		<div class="slide"><img src="imagenes/Img/icon_airplane(brown).png"></div>
		<div class="slide"><img src="imagenes/Img/icon_enlaces(brown).png"></div>
		<div class="slide"><img src="imagenes/Img/icon_handshake(brown).png"></div>
		<div class="slide"><img src="imagenes/Img/icon_sign(vanilla).png"></div>
		<div class="slide"><img src="imagenes/Img/icon_team(vanilla).png"></div>
		<div class="slide"><img src="imagenes/Img/icon_world(vanilla).png"></div>
		<div class="slide"><img src="imagenes/Img/icon_portfolio(vanilla).png"></div>
		<div class="slide"><img src="imagenes/Img/icon_graphics(brown).png"></div>

	</section>
</div>

<div class="col-xs-12"><!-- ver más / ampliar / explorar -->
	<a href="{{route('get_pagina_marcas')}}">
		<h5 class="ampliar text-center">
		 <span class="glyphicon glyphicon-triangle-right"></span> 
		  ver todas las marcas
		</h5>
	</a> 
</div>

<!-- /row-->
</div>









<!-- ESTO E VA A BORRAR, POR AHORA LO VOY GUARDANDO ACÁ-->

<!--text slide vertical, lo dejo acá mientras decido donde irá-->
<div class="text-slide-container">
<ul class="text-slide">
<a class="smoothScroll" href="#section-globitos"><li><h4><span class="chevron-saltarin"><span class="glyphicon glyphicon-chevron-down"></span></span> Explora el contenido</h4></li></a>
<a class="smoothScroll" href="#section-ultimas-publicaciones"><li><h4><span class="chevron-saltarin"><span class="glyphicon glyphicon-chevron-down"></span></span> Últimas publicaciones</h4></li></a>
<a class="smoothScroll" href="#section-ultimos-proyectos"><li><h4><span class="chevron-saltarin"><span class="glyphicon glyphicon-chevron-down"></span></span> Últimos proyectos</h4></li></a>
<a class="smoothScroll" href="#section-globitos"><li><h4><span class="chevron-saltarin"><span class="glyphicon glyphicon-chevron-down"></span></span> Explora el contenido</h4></li></a>
</ul>
</div>