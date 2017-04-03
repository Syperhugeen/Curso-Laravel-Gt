@extends('layouts.user_layout.user_layout')


@section('title')
 {{$Evento->name}}
@stop

@section('MetaContent')
  {{$Evento->description}}
@stop

@section('MetaRobot')
 INDEX,FOLLOW
@stop


 

@section('content')

 

<!--para agregar los márgenes laterales-->
<div class="container-fluid space-top">
  <div class="row">    

    <div class="col-sm-6 special-col table-outer">
        <div class="table-inner">
			<h2>{{$Evento->name}}</h2>
			<p class="text-center">{{$Evento->description}}</p>
		</div>
    </div> 

    <div class="col-sm-6 special-col">
        <div class="thumbnail-gallery-parent">
        	<div class="thumbnail-gallery-child">
          
          {{-- solo la imagen pricnipal --}}
          <img src="{{$Evento->url_img}}">
				  
          {{-- todas las imagenes asociadas al evento --}}
          @foreach($Evento->imagenesevento as $img)
            <img src="{{$img->url_img}}">
          @endforeach
			</div>
		</div>
    </div> 

  </div>

  
  @if($Evento->marcasevento->count() > 0) 
    @foreach($Evento->marcasevento as $Marca)
    <!-- ver más todos los eventos de esta misma marca (link a estamarca.blade.php) --> 
  	<div class="row"><!-- ver más / ampliar / explorar -->
  		<div class="col-xs-12 special-col">
  				<a href="{{$Marca->marca->route}}">
  					<h5 class="ampliar text-center">

               {{-- imagen de la marca --}}
               <img src="{{$Marca->marca->url_img}}">
               <span class="glyphicon glyphicon-triangle-right"></span> ver todos los eventos relacionados a {{$Marca->marca->name}}

            </h5>
  				</a>
  		</div>
  	</div>
    @endforeach
  @endif

	<!-- ver el listado completo de eventos (link a eventos.blade.php) -->
	<div class="row"><!-- ver más / ampliar / explorar -->
		<div class="col-xs-12 special-col">
				<a href="{{route('get_pagina_eventos')}}">
					<h5 class="ampliar text-center"><span class="glyphicon glyphicon-triangle-right"></span>ver listado completo de eventos</h5>
				</a>
		</div>
	</div>


</div>

@stop