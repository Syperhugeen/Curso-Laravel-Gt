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
<div class="container-fluid section-wrapper no-padding bgcolor-white">

  <div class="row">

    <div class="col-md-8 col-md-push-2 super-space-top space-bottom">
      <h1 class="section-title text-center">Servicios</h1>
      <h2 class="section-subtitle text-center">Ofrecemos soluciones adaptadas a las necesidades de cada cliente.</h2>
      <div class="non-semantic-protector">
        <h1 class="ribbon"> 
          <span class="ribbon-contentenido">Superar sus expectativas es nuestro objetivo principal.</span>
        </h1>
      </div>

      <h4 class="text-center kerning space-bottom">
        <a class="smoothScroll" href="#personal">listado</a> <span class="color-2">|</span> 
        <a class="smoothScroll" href="#entrenamiento">diferencial</a>
      </h4>
    </div>

  </div>




  <div class="bg-servicios-header">
  </div>



<div class="row">
  <div class="col-xs-12 special-col no-padding">
    
    {{-- rombo divisor con el logo de GT --}}
    <div class="decorative-divider"><img class="img-responsive" src="imagenes/Empresa/isologo_color3.png"></div>


    <div class="row" id="listado">
          <div class="col-sm-6 no-padding eventos-imagen">
            <img class="img-greyscale-hover img-main" src="imagenes/Img/servicios-personal.jpg">
          </div>

          <div class="col-sm-6">
            <div class="table-outer">
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

                <h2 class="text-right">Entrenamiento</h2>
                <p class="text-right"><span class="color-2light">·</span> Asesoría en actitúd laboral</p>
                <p class="text-right"><span class="color-2light">·</span> Asesoramiento técnico y de imagen</p>
                <p class="text-right"><span class="color-2light">·</span> Selección y capacitación de personal tercerizado</p>
                <p class="text-right"><span class="color-2light">·</span> Yoga laboral</p>

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






            <!-- ultimo boton -->
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

</div> 

@stop