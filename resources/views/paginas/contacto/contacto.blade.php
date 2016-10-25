@extends('layouts.user_layout.user_layout')


@section('title')
 Contacto
@stop

@section('MetaContent')
  Description Home 
@stop

@section('MetaRobot')
 INDEX,FOLLOW
@stop


 

@section('content')

 

 <!--para agregar los márgenes laterales-->
 <div class="section-wrapper">   
     
    @include('formularios.auth.login_form')
    
    <!-- comienza el form -->
    <h4 class="wow fadeInUp delay1"><span class="glyphicon glyphicon-chevron-right color-contacto" style="font-size:70%"></span> Envíame un mensaje
    </h4>
    <p class="lead wow fadeInUp delay1b">Si deseas comunicarte conmigo, puedes hacerlo vía telefónica, por correo o aquí mismo:
    </p>
    @include('formularios.contacto_form')

 </div>

@stop