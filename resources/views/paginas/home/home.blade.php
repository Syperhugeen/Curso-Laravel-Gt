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
  <div class="bgcolor-3" id="section0">
    @include('paginas.home.home_header')
  </div>

<!--para agregar los márgenes laterales-->
<div class="container-fluid section-wrapper bgcolor-2" id="section1">
  <div class="row">    
      <div class="col-md-10 col-md-push-1 col-lg-8 col-lg-push-2">
       @include('paginas.home.home_services')
      </div>
  </div>
</div>

<!--para agregar los márgenes laterales-->
<div class="container-fluid section-wrapper bgcolor-3light" id="section2">
      <div>
       @include('paginas.home.home_brands')
      </div>
</div>

<!--para agregar los márgenes laterales-->
<div class="container-fluid bgdecoratedcolor-2" id="section3">
     @include('paginas.home.home_puzzle')
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