@extends('layouts.user_layout.user_layout')


@section('title')
 Eventos
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
{{-- contiene hasta diez eventos como máximo --}}
	<div class="row">

		{{-- for each... insertar aquí las entidades --}}
    @foreach($Eventos as $Evento)
     @include('paginas.eventos.entidad_evento_para_listado')
    @endforeach

 	</div>
</div>



    


  
@stop