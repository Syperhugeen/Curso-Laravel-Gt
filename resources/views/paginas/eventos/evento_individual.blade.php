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







<!--evento individual - título, logos de marcas asociadas y descripción del mismo-->
<div class="container-fluid no-padding section-wrapper bgcolor-white">
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-push-2 space-bottom super-space-top">


          <div class="row" id="evento-individual-header">

            <div class="col-sm-6">
              <h1 class="section-title hidden-xs">{{$Evento->name}}</h1>
              <h1 class="section-title visible-xs">{{$Evento->name}}</h1>
              <div class="section-text visible-xs">
                <h3>{{$Evento->description}}</h3>
              </div>
            </div>

            <div class="col-sm-6">
              <div class="section-text hidden-xs">
                <h3>{{$Evento->description}}</h3>
              </div>
            </div>
          </div>

          <div class="center-block text-center">
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
</div><!--fin de filosofia-->









<!--para agregar los márgenes laterales-->
<div class="container-fluid">
  

  
    <div class="row">  
      <div class="col-sm-12 no-padding special-col-fake">
        <!-- todas las imagenes asociadas al evento -->
        <div class="thumbnail-gallery-parent">
          @foreach($Evento->imagenesevento as $img)
            <div class="thumbnail-gallery-child">
              <a href="{{$img->url_img}}" data-toggle="lightbox" data-gallery="evento-gallery" data-type="image" data-title="{{$Evento->name}}" data-footer="{{$Empresa->name}}">
                <img class="img-opacity-hover img-fluid ease" src="{{$img->url_img}}">
              </a>
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
                 <span class="glyphicon glyphicon-triangle-right"></span> ver todos los eventos asociados a {{$Marca->marca->name}}

              </h5>
    				</a>
    		</div>
    	</div>
      @endforeach
    @endif









    <!-- ver el listado completo de eventos (link a eventos.blade.php) -->
  	<a href="{{route('get_pagina_eventos')}}">
      <div class="row"><!-- ver más / ampliar / explorar -->
  		<div class="col-xs-12 special-col">
  				<a href="{{route('get_pagina_eventos')}}">
  					<h5 class="ampliar text-center"><span class="glyphicon glyphicon-triangle-right"></span>ver todos los eventos</h5>
  				</a>
  		</div>
  	</div>
    </a>


  </div>



<!-- /fin de #evento-individual -->
</div>


@stop




