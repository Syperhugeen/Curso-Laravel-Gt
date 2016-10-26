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


   <h1>formulario de login</h1>
   <div class="container-fluid section-wrapper">
     <div class="row">    
      <div class="col-sm-8 col-sm-push-2 col-md-6 col-md-push-3 col-lg-4 col-lg-push-4 wow fadeInUp">
       @include('formularios.auth.login_form')
      </div>
    </div>
  </div>



    <h1>formulario de registro</h1>
    <div class="container-fluid section-wrapper">
     <div class="row">    
      <div class="col-sm-8 col-sm-push-2 col-md-6 col-md-push-3 col-lg-4 col-lg-push-4 wow fadeInUp">
       @include('formularios.auth.register_form')
      </div>
    </div>
  </div>
    
    
    <h1>formulario de contacto</h1>
    <div class="container-fluid section-wrapper">
     <div class="row">    
      <div class="col-sm-8 col-sm-push-2 col-md-6 col-md-push-3 col-lg-4 col-lg-push-4 wow fadeInUp">
       @include('formularios.contacto_form')
      </div>
    </div>
  </div>
    



@stop