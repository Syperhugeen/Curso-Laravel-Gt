@extends('layouts.user_layout.user_layout')


@section('title')
 Servicios
@stop

@section('MetaContent')
  Description Home 
@stop

@section('MetaRobot')
 INDEX,FOLLOW
@stop


 

@section('content')

 
 <div class="content-wrapper">

    aqui va la descripcion de servicios   

    {{-- boton para envio de curriculumn --}}
    @include('paginas.servicios.partes.click_aqui_envio_curriculumn')  

    {{-- boton para envio cotización de proyecto --}}
    @include('paginas.servicios.partes.click_aqui_envio_cotizacion_proyecto')  

 </div>

@stop