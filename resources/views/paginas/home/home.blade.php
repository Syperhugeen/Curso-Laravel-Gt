@extends('layouts.user_layout.user_layout')


@section('title')
 Home
@stop

@section('MetaContent')
  Description Home 
@stop

@section('MetaRobot')
 INDEX,FOLLOW
@stop

@section('content')



<!--header (carousel de imágenes)-->
  <div id="section1">
    @include('paginas.home.home_header')
  </div>

<!--para agregar los márgenes laterales-->
<div class="container-fluid section-wrapper" id="section2">
    <div class="row">    
      <div class="col-md-10 col-md-push-1 col-lg-8 col-lg-push-2">
       @include('paginas.home.home_brands')
      </div>
  </div>
</div>

<!--para agregar los márgenes laterales-->
<div class="container-fluid section-wrapper" id="section3">
  <div class="row">    
    <div class="col-md-10 col-md-push-1 col-lg-8 col-lg-push-2">
     @include('paginas.home.home_globitos')
    </div>  
  </div>
</div>

<!--para agregar los márgenes laterales-->
<div class="container-fluid section-wrapper" id="section4">
  <div class="row">    
    <div class="col-md-10 col-md-push-1 col-lg-8 col-lg-push-2">
     @include('paginas.home.home_proyectos')
    </div>  
  </div>
</div>

<!--para agregar los márgenes laterales-->
<div class="container-fluid section-wrapper" id="section5">
  <div class="row">    
    <div class="col-md-10 col-md-push-1 col-lg-8 col-lg-push-2">
     @include('paginas.home.home_publicaciones')
    </div>  
  </div>
</div>

@stop