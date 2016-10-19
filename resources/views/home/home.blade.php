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
 <div class="content-wrapper">


     {{-- imagenes en grande --}}
     @include('home.partes.datos_bienvenida')

     {{-- imagenes en grande --}}
     @include('home.partes.globitos')


 </div>

@stop