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
<div id="section0">
  <div class="bgcolor-3">
    @include('paginas.home.home_header')
  </div>
</div>

<!--para agregar los márgenes laterales-->
<div id="section1">
  <div class="container-fluid section-wrapper bgcolor-2">
    <div class="row">    
        <div class="col-md-10 col-md-push-1 col-lg-8 col-lg-push-2">
         @include('paginas.home.home_services')
        </div>
    </div>
  </div>
</div>

<!--para agregar los márgenes laterales-->
<div id="section2">
  <div class="container-fluid section-wrapper bgcolor-3light">
        <div>
         @include('paginas.home.home_brands')
        </div>
  </div>
</div>

<!--para agregar los márgenes laterales-->
<div id="section3">
  <div class="container-fluid bgdecoratedcolor-2">
       @include('paginas.home.home_puzzle')
  </div>
</div>

<!--para agregar los márgenes laterales-->
<div id="section4">
  <div class="container-fluid bgcolor-3superlight">

       @include('paginas.home.home_eventos')

  </div>
</div>

@stop