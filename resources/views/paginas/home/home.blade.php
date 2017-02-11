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
<div class="container-fluid puzzle-section-bg-decoration-outlines" id="section3">
  <div class="row">
    <div class="col-md-2 col-md-push-1 col-lg-2 col-lg-push-2">

      <!--para md y lg-->
        <div class="puzzle-left-col-container wow puzzle-left-col-animation table-outer hidden-sm hidden-xs">
          <div class="puzzle-left-col-content wow fadeInUp delay7 table-inner">
            <h5 class="space-bottom">La búsqueda de la excelencia es el principal &#60;&#60;<em>leit motiv</em>&#62;&#62; de<span class="logo-font" style="font-weight:600;"><br>Global Target</span>.</h5>
            <h5><span class="color-3superlight">Profesionalismo</span> y <span class="color-3superlight">constante innovación</span> a lo largo de 15 años de experiencia nos han convertido en la agencia más prestigiosa del Uruguay.</h5>
          </div>
        </div>

        <!--para xs y sm-->
        <div class="puzzle-responsive-top-text space-top hidden-md hidden-lg">
          <div class="row wow fadeInUp">
          <div class="col-xs-6"><div class="puzzle-responsive-top-text-col">
            <h5>La búsqueda de la excelencia es el principal &#60;&#60;<em>leit motiv</em>&#62;&#62; de<span class="logo-font" style="font-weight:600;"> Global Target</span>.</h5>
          </div></div>
          <div class="col-xs-6"><div class="puzzle-responsive-top-text-col">
            <h5><span class="color-3superlight">Profesionalismo</span> y <span class="color-3superlight">constante innovación</span> a lo largo de 15 años de experiencia nos han convertido en la agencia más prestigiosa del Uruguay.</h5>
          </div></div>
          </div>
        </div>

    </div>

    <div class="col-md-10 col-md-push-1 col-lg-6 col-lg-push-2">
     @include('paginas.home.home_puzzle')
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