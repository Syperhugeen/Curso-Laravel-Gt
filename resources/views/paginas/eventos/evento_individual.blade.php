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

<div id="evento-individual">


<!--para agregar los márgenes laterales-->
<div class="container-fluid">
  

  <div class="row special-col no-padding">  

    <div class="col-sm-6 special-col special-col-img no-padding">
      <!-- solo la imagen principal -->
      <img class="img-main" src="{{$Evento->url_img}}">
    </div>

    <div class="col-sm-6 no-margin">
      <div class="table-outer">
        <div class="table-inner">
          <div>
      			<h2>{{$Evento->name}}</h2>
      			<p class="text-center">{{$Evento->description}}</p>
            <div class="inline-logos">
              @foreach($Evento->marcasevento as $Marca)
                <a href="{{$Marca->marca->route}}">
                  <!-- logo de la(s) marca(s) asociada(s) al evento -->
                  <img src="{{$Marca->marca->url_img}}">
                </a>
              @endforeach
            </div>
          </div>
        </div>
		  </div>
    </div> 

  </div>

  
    <div class="row">  
      <div class="col-sm-12 no-padding bgcolor-2">
        <!-- todas las imagenes asociadas al evento -->
        <div class="thumbnail-gallery-parent">
          @foreach($Evento->imagenesevento as $img)
            <div class="thumbnail-gallery-child">
              <img class="img-greyscale-hover" src="{{$img->url_img}}">
            </div>
          @endforeach
        </div>
      </div>
    </div>









 
    @if($Evento->marcasevento->count() > 1) 
      @foreach($Evento->marcasevento as $Marca)
      <!-- ver más todos los eventos de esta misma marca (link a estamarca.blade.php) --> 
    	<div class="row"><!-- ver más / ampliar / explorar -->
    		<div class="col-xs-12 special-col">
    				<a href="{{$Marca->marca->route}}">
    					<h5 class="ampliar text-center">

                 <!-- logo de la marca -->
                 <span class="glyphicon glyphicon-triangle-right"></span> ver todos los eventos y promociones asociados a {{$Marca->marca->name}}

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
  					<h5 class="ampliar text-center"><span class="glyphicon glyphicon-triangle-right"></span>ver listado completo de eventos y promociones</h5>
  				</a>
  		</div>
  	</div>


  </div>

</div>


@stop