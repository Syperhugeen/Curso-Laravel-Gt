@extends('layouts.user_layout.user_layout')


@section('title')
 Cartera de Clientes
@stop

@section('MetaContent')
  Elegidos por las mejores marcas del mundo; Absolut, Audi, BMW, Carolina Herrera, Chivas, Givenchy, Gucci, Jeep, Marc Jacobs, Ralph Lauren, Ray-Ban, Versace, Victoria's Secret ...entre otras.
@stop

@section('MetaRobot')
 INDEX,FOLLOW
@stop


 

@section('content')

 

<div id="marcas">
    
    
  <!--para agregar los márgenes laterales-->
  <div class="section-wrapper bg-marcas-header" id="marcas-header">
    <div class="container-fluid">
      <div class="row space-bottom space-top">
          <div class="col-md-8 col-md-push-3 col-lg-8 col-lg-push-2">


          <div class="row super-space-bottom">
            <div class="col-sm-6 col-sm-push-6">
              <!--<h1 class="section-title">Repertorio de clientes</h1>-->
              <h2 class="section-title super-space-bottom">Elegidos por las mejores marcas del mundo</h2>
              <!--<div class="section-text">
                <h3>A lo largo de nuestra trayectoria hemos representado a las más grandes marcas, tanto locales como internacionales.</h3>
                <h3>La calidad y profesionalidad de nuestro personal brinda distinción y prestigio en cada acción promocional o evento organizado.</h3>
              </div>-->
            </div>
          </div>

          <div class="row super-space-top space-bottom hidden-xs">
            <div class="col-sm-6 col-sm-push-6 space-bottom">
              <div>
                <h4 class="buscador-predescription">¿Buscas una marca en particular?</h4>
              </div>
              <div class="buscador wow fadeInRight" id="marcas-buscador">
                @include('paginas.marcas.select_buscador')  
              </div>
            </div>
          </div>

  <!--fin de los márgenes laterales-->
         </div> <!--/ fin de la col-->
      </div> <!--/ fin del row-->
    </div>
  </div>



  <!--para agregar los márgenes laterales-->
  <div class="container-fluid section-wrapper no-padding bgcolor-3light" id="marcas-logos">
          {{-- rombo divisor con el logo de GT --}}
          <div class="decorative-divider"><img class="img-responsive" src="imagenes/Empresa/isologo_color3.png"></div>

  {{-- contiene hasta 20 logos de marcas como máximo a la vez (luego aparece la paginación) --}}
    <div class="row hr-border-top-pegado">


                {{-- ordenadas alfabeticamente --}}
                @foreach($Marcas as $Marca)
                 @include('paginas.marcas.entidad_marca_para_listado')
                @endforeach
                
                 {{--  @if($Marca != '')
                    @include('paginas.marcas.entidad_marca_para_listado')
                  @else
                    @foreach($MarcasRango3 as $Marca)
                     @include('paginas.marcas.entidad_marca_para_listado')
                    @endforeach

                    @foreach($MarcasRango2 as $Marca)
                     @include('paginas.marcas.entidad_marca_para_listado')
                    @endforeach

                    @foreach($MarcasRango1 as $Marca)
                     @include('paginas.marcas.entidad_marca_para_listado')
                    @endforeach
                  @endif --}}
   

      
      @if($Marcas->hasPages())            
      <!-- pagination MUTEADO por ahora-->
      <div class="col-xs-12 special-col">
          <div class="pagination-block">
            {!! $Marcas->appends(Request::all())->render() !!}
          </div>
      </div>
      <!-- /pagination -->
      @endif


    </div>
  </div>


</div><!-- /#marcas -->





   


@stop
