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

 

 



    
    
    
    <h1>formulario de contacto</h1>
  <div class="container-fluid section-wrapper">
    <div class="row">    
      <div class="col-md-10 col-md-push-1 col-lg-8 col-lg-push-2">
       @include('formularios.contacto_form')
      </div>
    </div>
  </div>



    


  
@stop