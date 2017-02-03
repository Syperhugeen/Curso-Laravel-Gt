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
  <div id="section-1">
    @include('paginas.home.home_header')
  </div>

<!--para agregar los márgenes laterales-->
<div class="container-fluid section-wrapper" id="section-2">
    <div class="row">    
      <div class="col-md-10 col-md-push-1 col-lg-8 col-lg-push-2">
       {{-- la parte de bienvenidad --}}
       @include('paginas.home.home_brands')
      </div>
  </div>
</div>

<!--para agregar los márgenes laterales-->
<div class="container-fluid section-wrapper" id="section-3">
  <div class="row">    
    <div class="col-md-10 col-md-push-1 col-lg-8 col-lg-push-2">
     {{-- la parte de los globitos --}}
     @include('paginas.home.home_globitos')
    </div>  
  </div>
</div>

<!--para agregar los márgenes laterales-->
<div class="container-fluid section-wrapper" id="section-ultimos-proyectos">
  <div class="row">    
    <div class="col-md-10 col-md-push-1 col-lg-8 col-lg-push-2">
     {{-- la parte de proyectos  --}}
     @include('paginas.home.home_proyectos')
    </div>  
  </div>
</div>

<!--para agregar los márgenes laterales-->
<div class="container-fluid section-wrapper" id="section-ultimas-publicaciones">
  <div class="row">    
    <div class="col-md-10 col-md-push-1 col-lg-8 col-lg-push-2">
     {{-- la parte de publicaciones  --}}
     @include('paginas.home.home_publicaciones')
    </div>  
  </div>
</div>

@stop