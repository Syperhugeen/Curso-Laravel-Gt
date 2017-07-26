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
          <span class="ribbon-contenido">Superar sus expectativas es nuestro objetivo principal.</span>
        </h1>
      </div>

      <h4 class="text-center kerning space-bottom">
        <a class="smoothScroll" href="#listado">listado</a> <span class="color-2">|</span> 
        <a class="smoothScroll" href="#entrenamiento">diferencial</a>
      </h4>
    </div>

  </div>




  <div>
    <img class="img-responsive hidden-xs" src="imagenes/Img/bg-servicios-chicas.jpg">
    <img class="img-responsive visible-xs" src="imagenes/Img/bg-servicios-chicas(responsive).jpg">
  </div>



<div class="row" id="listado">
  <div class="col-xs-12 special-col-fake no-padding">
    
    {{-- rombo divisor con el logo de GT --}}
    <div class="decorative-divider">
      <img class="img-responsive" src="imagenes/Empresa/isologo_color3.png">
    </div>


    <div class="row">
          <div class="col-sm-6 special-col-fake no-padding bg-servicios-listado">
          </div>

          <div class="col-sm-6 special-col-fake">
                <h1 class="section-title">Personal</h1>
                <h2 class="section-subtitle">Personal de reposición para todo el país. Selección y captación de personal vía fotográfica o en directo.</h2>
                <div class="section-text">
                <h3>Actores y actrices para campañas y comerciales</h3>
                <h3>Azafatas de eventos</h3>
                <h3>Bartenders profesionales</h3>
                <h3>Maquilladoras y cosmetólogas</h3>
                <h3>Modelos publicitarias</h3>
                <h3>Modelos de pasarela</h3>
                <h3>Promovendedoras</h3>
                </div>

                <h1 class="section-title">Entrenamiento</h1>
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