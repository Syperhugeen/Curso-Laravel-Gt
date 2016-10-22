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

     {{-- la parte de vienvenidad --}}
     @include('home.partes.datos_bienvenida')

     {{-- la parte de los globitos --}}
     @include('home.partes.globitos')

     {{-- la parte de proyectos  --}}
     @include('home.partes.proyectos')


    </div>  
  </div>
</div>

@stop