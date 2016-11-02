@extends('layouts.user_layout.user_layout')


@section('title')
 Proyecto Individual
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
        	<h1>{{$Proyecto->name}}</h1>
      	</div>



      	<!--primera parte (foto a la izquierda y texto a la derecha)-->
      	<div class="row space-bottom">

      		<div class="col-md-6">
      			<img class="img-responsive img-rounded" src="{{$Proyecto->url_img}}">
      		</div>

      		<div class="col-md-6">
      			<hr style="width:50%;left:0;">
      			<h3>Fecha del proyecto</h3>
      			<h4>
      			Ubicación del proyecto
      			<br>Método de construcción del proyecto
      			</h4>

      			<h5 class="color-gris-claro">
      			Primer autor del proyecto
      			<br>segundo autor del proyecto
      			<br>tercer autor del proyecto
      			</h5>

      			<hr style="width:50%;left:0;">
      		</div>

      		<div class="col-md-12">
      			<h3>Acerca del proyecto</h3>
      			<p>{{$Proyecto->description}}</p>
      		</div>

      	</div>



      	<!--slideshow de fotos-->
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
				      <img class="img-carousel" src="imagenes/Img/imagen_del_proyecto_1.jpg">
				    </div>

				    <div class="item">
				      <img class="img-carousel" src="imagenes/Img/imagen_del_proyecto_2.jpg">
				    </div>

				    <div class="item">
				      <img class="img-carousel" src="imagenes/Img/imagen_del_proyecto_3.jpg">
				    </div>

				    <div class="item">
				      <img class="img-carousel" src="imagenes/Img/imagen_del_proyecto_4.jpg">
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

			<div class="col-md-12">
				<a href="{{route('get_pagina_proyecto_listado')}}"><p><span class="glyphicon glyphicon-circle-arrow-left"></span> volver a Proyectos</p></a>
			</div>
		</div>
     


    </div>  
  </div>
</div>

@stop