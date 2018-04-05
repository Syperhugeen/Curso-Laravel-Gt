@extends('layouts.user_layout.user_layout')


@section('title')
 Eventos asociados a {{$Marca->name}} | Global Target - Uruguay
@stop

@section('MetaContent')
   A lo largo su trayectoria, Global Target ha organizado y representado a sus clientes en una amplia gama de eventos y promociones en Uruguay. En esta página puedes encontrar aquellos relacionados a {{$Marca->name}}.
@stop

@section('MetaRobot')
 INDEX,FOLLOW
@stop


 

@section('content')

<div class="bgcolor-white" id="marca-individual">


  <!--para agregar los márgenes laterales-->
  <div class="container-fluid">

  {{-- contiene hasta diez eventos como máximo --}}
    <div class="row">

      <div class="col-md-6 col-md-push-3 super-space-top space-bottom">
        <h1 class="section-title text-center">Eventos y promociones asociados a {{$Marca->name}}</h1>
        <div class="table-outer">
          <div class="table-inner">
            <div class="inline-logos">
                <img src="{{$Marca->url_img}}">
                <img src="imagenes/Empresa/logo-gt.png"> 
            </div>
          </div>
        </div>
      {{-- rombo divisor con el logo de GT --}}
      <div class="decorative-divider"><img class="img-responsive" src="imagenes/Empresa/isologo_color3.png"></div>
      </div>


    </div>
  </div>

    
    
    <div class="container-fluid hr-border-top-pegado">
      

      @if(count($Eventos) > 0)
        <!-- aquí se muestra cada evento relacionado a la marca -->
        <div class="row"> <!-- row que incluye todos los eventos -->
        @foreach($Eventos as $Evento)
         @if($Evento->estado == "si")
          <!-- col del evento individual -->
          <a href="{{$Evento->route}}">
          <div class="col-xs-12 special-col no-padding">
            <div class="row">
                
              <div class="col-sm-6 no-padding eventos-imagen special-col special-col-img no-vertical-border">
                <img class="img-main" src="{{$Evento->url_img}}">
              </div>
                  
              <div class="col-sm-6 no-margin">
                <div class="table-outer">
                  <div class="table-inner">

                    <div class="inline-logos chiqui-logos">
                      @foreach($Evento->marcasevento as $Marca) <!-- ACÁ ACÁ ACÁ -->
                      <!--<a href="{{$Marca->marca->route}}">-->
                        <img src="{{$Marca->marca->url_img}}"> <!-- logo demarca asociada al evento -->
                      <!--</a> -->
                      @endforeach
                    </div>

                    <h2>{{$Evento->name}}</h2>
                    <div class="p-container hidden-xs">
                      <p class="text-center">
                        @if(isset($Evento->description))
                         {{$Evento->description}}
                        @endif
                      </p>
                    </div>
                    <a href="{{$Evento->route}}">
                      <h5 class="ampliar"><span class="glyphicon glyphicon-chevron-right"></span>AMPLIAR</h5>
                    </a>

                  </div>
                </div> 
              </div>
            </div>
          </div><!-- /col del evento individual -->
          </a>
         @endif
                        
        @endforeach
        </div><!-- /row que incluye todos los eventos -->






        <!-- row de la pagination 
          ESTO DEBERÍA APARECER SÓLO CUANDO APARECE LA PAGINACIÓN
          (es decir, sólo cuando la cantidad de eventos asociados a la marca es mayor
          que la cantidad de eventos mostrados por página-->
        @if($Eventos->hasPages())  
          <div class="row special-col no-padding">
            <!-- pagination -->
             <div class="col-xs-12 special-col">
              <div class="pagination-block">
                    {!! $Eventos->appends(Request::all())->render() !!}
              </div>
            </div>
          </div>
        @endif


        






        @else
          <!-- cuando no hay eventos asociados a la marca -->
          <div class="row bgcolor-grey0">
            <div class="col-md-8 col-md-push-2 col-lg-6 col-lg-push-3 super-space-top super-space-bottom">
                <h3 class="text-center space-bottom">Lo sentimos, pero de momento no hay eventos para mostrar relacionados a la marca.</h3>
                <p class="text-center">Debido a que recientemente hemos re-diseñado nuestro sitio web desde sus cimientos para poder brindarte una mejor experiencia como usuario, estamos limpiando nuestro antiguo banco de imágenes para ofrecerte la mejor calidad de contenido.</p>       
            </div>
          </div>

        @endif

      </div><!-- /container-fluid -->


</div>
@stop