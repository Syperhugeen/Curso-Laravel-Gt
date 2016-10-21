@extends('layouts.user_layout.user_layout')


@section('title')
 Home Ernesto
@stop

@section('MetaContent')
  Description Home 
@stop

@section('MetaRobot')
 INDEX,FOLLOW
@stop


 

@section('content')

 {{-- imagenes en grande --}}
 @include('home.partes.imagen_de_portada')

 <!--para agregar los márgenes laterales-->
<div class="container-fluid footer-wrapper">
  <div class="row" style="padding-top:40px;padding-bottom:40px;">    
    <div class="col-md-10 col-md-push-1 col-lg-8 col-lg-push-2">

    
     @include('home.partes.datos_bienvenida')

     
     @include('home.partes.globitos')


    </div>  
  </div>
</div>

@stop