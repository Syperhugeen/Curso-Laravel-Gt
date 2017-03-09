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
    <div class="col-md-10 col-md-push-1 col-lg-8 col-lg-push-2">
      <div class="page-header">
        <h1>{{$Evento->name}}</h1>
      </div>
      <h1>Pagina del Evento ...  {{$Evento->name}} .</h1>
    </div>  
  </div>
</div>

@stop