@extends('layouts.user_layout.user_layout')


@section('title')
 Publicación Individual
@stop

@section('MetaContent')
  Description Home 
@stop

@section('MetaRobot')
 INDEX,FOLLOW
@stop


 

@section('content')

 

<!--para agregar los márgenes laterales-->
<div class="container-fluid section-wrapper">
  <div class="row">    
    <div class="col-md-10 col-md-push-1 col-lg-8 col-lg-push-2">

    	<div class="page-header">
        	<h1>Nombre de publicación individual</h1>
      	</div>

      	<!--primera parte (foto a la izquierda y texto a la derecha)-->
      	<div class="row space-bottom">

      		<div class="col-md-6">
      			<h2>Header de la publicación; esto suele ser una frase tomada del texto.</h2>
      		</div>

      		<div class="col-md-6">
				<img class="img-responsive img-rounded" src="imagenes/Img/imagen_principal_de_la_noticia.jpg">
      		</div>

      	</div>


      	<!--primera parte (foto a la izquierda y texto a la derecha)-->
      	<div class="row space-bottom">

      		<div class="col-md-12">
      			<p>Primer párrafo agregado de texto. La idea es que puedan agregar párrafo por párrafo (y si es posible, que puedan hacerlo en orden, es decir, que si agregan un párrafo y luego agregan un video y luego vuelven a agregar otro párrafo, lo ideal sería que se muestre en ese mismo orden.</p>
      		</div>


      	</div>







      	<!--otra imagen de la noticia-->
      	<div class="row space-bottom">
	      	<div class="col-md-12">
				<img class="img-responsive img-rounded" src="imagenes/Img/otra_imagen_agregada_de_la_noticia.jpg">
	      	</div>
      	</div>








      	<!--video de la noticia-->
      	<div class="row space-bottom">
		    <div class="col-md-12">
		      	<div class="embed-responsive embed-responsive-16by9">
		    		<iframe class="embed-responsive-item" src="//www.youtube.com/embed/HBI1uPsqB_I"></iframe>
				</div>
			</div>
		</div>









      	<!--slideshow de fotos de la noticia-->
      	<div class="row space-bottom">
		<div class="col-md-12">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		    <li data-target="#myCarousel" data-slide-to="3"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		    <div class="item">
		      <img class="img-carousel" src="imagenes/Img/primera_imagen_de_la_noticia_individual.jpg">
		    </div>

		    <div class="item">
		      <img class="img-carousel" src="imagenes/Img/segunda_imagen_de_la_noticia_individual.jpg">
		    </div>

		    <div class="item">
		      <img class="img-carousel" src="imagenes/Img/tercera_imagen_de_la_noticia_individual.jpg">
		    </div>

		    <div class="item">
		      <img class="img-carousel" src="imagenes/Img/cuarta_imagen_de_la_noticia_individual.jpg">
		    </div>

		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
		</div>
		</div>

     



    </div>  
  </div>
</div>

@stop