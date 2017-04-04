@extends('layouts.user_layout.user_layout')


@section('title')
 Servicios
@stop

@section('MetaContent')
  Servicios - Personal, Entrenamiento y Organización | Global Target
@stop

@section('MetaRobot')
 INDEX,FOLLOW
@stop


 

@section('content')

 <div id="servicios">
    
    
<!--para agregar los márgenes laterales-->
<div class="container-fluid section-wrapper no-padding bgcolor-3light">

  <div class="row">

      <div class="col-md-8 col-md-push-2 super-space-top space-bottom">
        <h1 class="text-center">Servicios</h1>
        <p class="text-center space-bottom">Aquí irá alguna frase breve de un renglón (o dos como mucho) a modo de introducción a los servicios.</p>
        <h4 class="text-center kerning space-bottom">
        <a class="smoothScroll" href="#personal">personal</a> | 
        <a class="smoothScroll" href="#entrenamiento">entrenamiento</a> | 
        <a class="smoothScroll" href="#organizacion">organización</a>
        </h4>

      </div>



  <div>
    <img class="header-pic" src="imagenes/Img/servicios-header.jpg">
  </div>



  <div class="col-xs-12 special-col no-padding">
    <div class="row" id="personal">

    {{-- rombo divisor con el logo de GT --}}
    <div class="decorative-divider"><img class="img-responsive" src="imagenes/Empresa/isologo.png"></div>

      <div class="col-sm-6 no-padding eventos-imagen">
        <img class="img-greyscale-hover" src="imagenes/Img/servicios-personal.jpg">
      </div>

      <div class="col-sm-6 table-outer">
        <div class="table-inner">
          <h2 class="text-left">Personal</h2>
          <h5 class="text-left"><strong>Personal de reposición para todo el país. Selección y captación de personal vía fotográfica o en directo.</strong></h5>
          <p><span class="color-2light">·</span> Actores y actrices para campañas y comerciales</p>
          <p><span class="color-2light">·</span> Azafatas de eventos</p>
          <p><span class="color-2light">·</span> Bartenders profesionales</p>
          <p><span class="color-2light">·</span> Maquilladoras y cosmetólogas</p>
          <p><span class="color-2light">·</span> Modelos publicitarias</p>
          <p><span class="color-2light">·</span> Modelos de pasarela</p>
          <p><span class="color-2light">·</span> Promovendedoras</p>
          </div>
      </div>

    </div>
  </div>






  <div class="col-xs-12 special-col no-padding">
    <div class="row" id="entrenamiento">

      <div class="col-sm-6 table-outer">
        <div class="table-inner">
          <h2 class="text-right">Entrenamiento</h2>
          <p class="text-right"><span class="color-2light">·</span> Asesoría en actitúd laboral</p>
          <p class="text-right"><span class="color-2light">·</span> Asesoramiento técnico y de imagen</p>
          <p class="text-right"><span class="color-2light">·</span> Selección y capacitación de personal tercerizado</p>
          <p class="text-right"><span class="color-2light">·</span> Yoga laboral</p>
        </div>
      </div>

      <div class="col-sm-6 no-padding eventos-imagen">
        <img class="img-greyscale-hover" src="imagenes/Img/servicios-entrenamiento.jpg">
      </div>

    </div>
  </div>







  <div class="col-xs-12 special-col no-padding">
    <div class="row" id="organizacion">

      <div class="col-sm-6 no-padding eventos-imagen">
        <img class="img-greyscale-hover" src="imagenes/Img/servicios-organizacion.jpg">
      </div>

      <div class="col-sm-6 table-outer">
        <div class="table-inner">
          <h2 class="text-left">Organización</h2>
          <p><span class="color-2light">·</span> Campañas de publicidad directas</p>
          <p><span class="color-2light">·</span> Contratación de personal zafral capacitado para acciones a término</p>
          <p><span class="color-2light">·</span> Diseño y confección de uniformes</p>
          <p><span class="color-2light">·</span> Diseño y producción de stands, folletería, banners, ploteos, etc.</p>
          <p><span class="color-2light">·</span> Organización de fiestas y eventos</p>
          <p><span class="color-2light">·</span> Reactivación de marcas</p>
          <p><span class="color-2light">·</span> Recepción, traslados y óptima coordinación de actividades con clientes del exterior</p>
          <p><span class="color-2light">·</span> Redacción de informes destinados a marcas con presencia local</p>
        </div>
      </div>

    </div>
  </div>






    <!-- pagination -->
    <div class="col-xs-12 special-col">
      <div class="row">
        <div class="">
          <a href="{{route('get_pagina_contacto')}}">
            <h5 class="ampliar text-center"><span class="glyphicon glyphicon-triangle-right"></span>Contáctanos</h5>
          </a>       
        </div>
      </div>
    </div>






  </div>
</div>



   </div> 

@stop