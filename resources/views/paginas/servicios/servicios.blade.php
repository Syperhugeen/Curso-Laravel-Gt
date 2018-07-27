@extends('layouts.user_layout.user_layout')


@section('title')
 Servicios
@stop

@section('MetaContent')
  Eventos y promociones. Personal de la más alta calidad en azafatas, modelos, promotoras, maquilladoras y bartenders.
@stop

@section('MetaRobot')
 INDEX,FOLLOW
@stop


 

@section('content')

<div id="servicios">
    
<!--para agregar los márgenes laterales-->
<div class="container-fluid section-wrapper no-padding bg-color-white">


<div class="container-fluid section-wrapper no-padding bg-servicios-header">
  <div class="row" id="servicios-intro">

    <div class="col-md-8 col-md-push-2 super-space-top space-bottom">
      <!--<h1 class="section-title text-center">Servicios</h1>-->
      <!--<h2 class="section-subtitle text-center">Ofrecemos soluciones adaptadas a las necesidades de cada cliente.</h2>-->
      <div class="super-space-top non-semantic-protector">
        <h1 class="ribbon"> 
          <!--<span class="ribbon-contenido">Superar sus expectativas es nuestro objetivo principal.</span>-->
          <span class="ribbon-contenido">Ofrecemos soluciones adaptadas a sus necesidades.</span>
        </h1>
      </div>

      <div class="row super-space-bottom">
        <div class="col-xs-6 col-xs-push-3">
         <div class="row">
            <div class="col-sm-6 special-col">
                <a class="smoothScroll" href="#servicios-listado">
                <h4>servicios</h4>
                </a>
            </div>
            <div class="col-sm-6 special-col">
                <a class="smoothScroll" href="#servicios-diferencial">
                <h4>diferencial</h4>
                </a>
            </div>
          </div>
        </div>
       </div>

    </div>

  </div>
</div>


<!--
  <div>
    <img class="img-responsive hidden-xs" src="imagenes/Img/bg-servicios-chicas.jpg">
    <img class="img-responsive visible-xs" src="imagenes/Img/bg-servicios-chicas(responsive).jpg">
  </div>
-->


  <div class="row hr-border-top-pegado">
    <div class="col-xs-12 special-col-fake no-padding">
      
      {{-- rombo divisor con el logo de GT --}}
      <div class="decorative-divider">
        <img class="img-responsive" src="imagenes/Empresa/isologo_color3.png">
      </div>


      <div class="row" id="servicios-listado">
            <div class="col-sm-6 no-padding bg-servicios-listado">
            </div>

            <div class="col-sm-6 special-col-fake">
                  <h1 class="section-title super-space-top">Personal</h1>
                  <h3 class="section-subtitle">Personal de reposición para todo el país. Selección y captación de personal vía fotográfica o en directo.</h3>
                  <div class="section-text">
                  <h4><small><span class="glyphicon glyphicon-triangle-right"></span></small>Actores y actrices para campañas y comerciales</h4>
                  <h4><small><span class="glyphicon glyphicon-triangle-right"></span></small>Azafatas de eventos</h4>
                  <h4><small><span class="glyphicon glyphicon-triangle-right"></span></small>Bartenders profesionales</h4>
                  <h4><small><span class="glyphicon glyphicon-triangle-right"></span></small>Maquilladoras y cosmetólogas</h4>
                  <h4><small><span class="glyphicon glyphicon-triangle-right"></span></small>Modelos publicitarias</h4>
                  <h4><small><span class="glyphicon glyphicon-triangle-right"></span></small>Modelos de pasarela</h4>
                  <h4><small><span class="glyphicon glyphicon-triangle-right"></span></small>Promovendedoras</h4>
                  </div>


                  <h1 class="section-title super-space-top">Entrenamiento</h1>
                  <div class="section-text">
                  <h4><small><span class="glyphicon glyphicon-triangle-right"></span></small>Asesoría en actitúd laboral</h4>
                  <h4><small><span class="glyphicon glyphicon-triangle-right"></span></small>Asesoramiento técnico y de imagen</h4>
                  <h4><small><span class="glyphicon glyphicon-triangle-right"></span></small>Selección y capacitación de personal tercerizado</h4>
                  <h4><small><span class="glyphicon glyphicon-triangle-right"></span></small>Yoga laboral</h4>
                  </div>



                  <h1 class="section-title super-space-top">Organización</h1>
                  <div class="section-text space-bottom">
                  <h4><small><span class="glyphicon glyphicon-triangle-right"></span></small>Campañas de publicidad directas</h4>
                  <h4><small><span class="glyphicon glyphicon-triangle-right"></span></small>Contratación de personal zafral capacitado para acciones a término</h4>
                  <h4><small><span class="glyphicon glyphicon-triangle-right"></span></small>Diseño y confección de uniformes</h4>
                  <h4><small><span class="glyphicon glyphicon-triangle-right"></span></small>Diseño y producción de stands, folletería, banners, ploteos, etc.</h4>
                  <h4><small><span class="glyphicon glyphicon-triangle-right"></span></small>Organización de fiestas y eventos</h4>
                  <h4><small><span class="glyphicon glyphicon-triangle-right"></span></small>Reactivación de marcas</h4>
                  <h4><small><span class="glyphicon glyphicon-triangle-right"></span></small>Recepción, traslados y óptima coordinación de actividades con clientes del exterior</h4>
                  <h4><small><span class="glyphicon glyphicon-triangle-right"></span></small>Redacción de informes destinados a marcas con presencia local</h4>
                  </div>
            </div>
      </div>

      <div class="row">
        <a href="{{route('get_pagina_contacto')}}">
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
        </a>
      </div>



    </div>
  </div><!-- fin de row que contiene la special-col-fake filosofia-listado -->


  <!--DIFERENCIAL-->
  <!--para agregar los márgenes laterales-->
  <div class="container-fluid no-padding section-wrapper bg-servicios-diferencial" id="servicios-diferencial">
    <div class="container-fluid">
      <div class="row space-bottom">
          <div class="col-sm-6 col-sm-push-3 col-lg-4 col-lg-push-4 super-space-top space-bottom">


                <div class="space-top">
                  <div>
                    <h1 class="section-title text-center no-margin">Diferencial</h1>
                    <h1 class="section-subtitle text-center no-margin">Está en la profesionalidad, eficiencia y calidad de nuestro trabajo.</h1>
                  </div>

                  <div class="section-text space-bottom">
                    <h4><small><span class="glyphicon glyphicon-triangle-right"></span></small>Confianza generada a partir de más de diez años de trayectoria ininterrumpida, forjada a partir del trabajo contínuo con organizaciones de distintos tamaños, tanto en nuestro país como en el exterior.</h4>
                    <h4><small><span class="glyphicon glyphicon-triangle-right"></span></small>Amplio conocimiento del mercado local y regional</h4>
                    <h4><small><span class="glyphicon glyphicon-triangle-right"></span></small>Personal con formación académica y conocimiento de idiomas (inglés y portugués)</h4>
                    <h4><small><span class="glyphicon glyphicon-triangle-right"></span></small>Capacitación constante a todo el personal</h4>
                    <h4><small><span class="glyphicon glyphicon-triangle-right"></span></small>Staff capacitado para suplencias, de acuerdo al perfil buscado</h4>
                    <h4><small><span class="glyphicon glyphicon-triangle-right"></span></small>Estricto cumplimiento de contratos y normas vigente</h4>
                    <h4><small><span class="glyphicon glyphicon-triangle-right"></span></small>Vasta experiencia en publicidad directa y acciones promocionales</h4>
                    <h4><small><span class="glyphicon glyphicon-triangle-right"></span></small>Atención personalizada: calidez y contacto directo con cada uno de nuestros clientes</h4>
                    <h4><small><span class="glyphicon glyphicon-triangle-right"></span></small>Flexibilidad organizacional, que permite la rápida adaptación ante cualquier eventualidad o cambio solicitado por el cliente</h4>
                    <h4><small><span class="glyphicon glyphicon-triangle-right"></span></small>Seguimiento constante, con el objetivo de generar el mejor clima laboral</h4>
                    <h4><small><span class="glyphicon glyphicon-triangle-right"></span></small>Miembros de la Asociación de Marketing Promocional del Uruguay (AMPRO)</h4>
                    <h4><small><span class="glyphicon glyphicon-triangle-right"></span></small>En proceso de certificación de calidad</h4>
                    <div class="row space-top">
                      <div class="col-xs-4 col-xs-push-4 servicios-logo-ampro">
                        <a href="http://amprouruguay.com.uy/"><img class="img-responsive center-block" src="imagenes/Empresa/ampro_asociado_globaltarget.png" title="Asociación de Marketing Promocional del Uruguay"></a>
                      </div>
                    </div>      
                  </div>
                </div>


  <!--fin de los márgenes laterales-->
         </div>
      </div>
    </div>
  </div><!-- / DIFERENCIAL-->



</div> <!-- page.ID -->

@stop