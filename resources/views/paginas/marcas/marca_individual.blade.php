@extends('layouts.user_layout.user_layout')


@section('title')
 Eventos asociados a {{$Marca->name}} | Global Target - Uruguay
@stop

@section('MetaContent')
   A lo largo su trayectoria, Global Target ha organizado y representado a sus clientes en una amplia gama de eventos y promociones en Uruguay. En esta página puedes encontrar aquellos relacionados a {{$Marca->name}}.
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
        <h1>{{$Marca->name}}</h1>
      </div>

      <h1>Pagina de la marca ...  {{$Marca->name}} .</h1>
      
      {{-- aqui se muestra todos los eventos asociados a esa marca --}}
      @if($Eventos->count() > 0)
        @foreach($Eventos as $Evento)
         {{$Evento->name}} 
        @endforeach
      @else
       <h2>No hay eventos asociados a esta marca</h2>
      @endif
    

    </div>  
  </div>
</div>

@stop