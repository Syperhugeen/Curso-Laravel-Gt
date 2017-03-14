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
<div class="container-fluid section-wrapper">
  <div class="row">    

    <div class="col-sm-6 special-col table-outer">
        <div class="table-inner">
			<h2>{{$UltimoEvento->name}}</h2>
			<p>{{$UltimoEvento->description}}</p>
		</div>
    </div> 

    <div class="col-sm-6 special-col">
        <div class="thumbnail-gallery-parent">
        	<div class="thumbnail-gallery-child">
				<!-- insertar aqui las fotos de este evento -->
			</div>
		</div>
    </div> 

  </div>

  	<!-- ver más todos los eventos de esta misma marca (link a estamarca.blade.php) -->
	<div class="col-xs-12 special-col">
		<div class="row"><!-- ver más / ampliar / explorar -->
				<a href="{{route('get_pagina_eventos')}}">
					<h5 class="ampliar text-center"><span class="glyphicon glyphicon-triangle-right"></span>ver todos los eventos relacionados a [esta marca]</h5>
				</a>
		</div>
	</div>

	<!-- ver el listado completo de eventos (link a eventos.blade.php) -->
	<div class="col-xs-12 special-col">
		<div class="row"><!-- ver más / ampliar / explorar -->
				<a href="{{route('get_pagina_eventos')}}">
					<h5 class="ampliar text-center"><span class="glyphicon glyphicon-triangle-right"></span>ver listado completo de eventos</h5>
				</a>
		</div>
	</div>


</div>

@stop