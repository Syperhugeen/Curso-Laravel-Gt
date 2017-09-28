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

<div id="marca-individual">


  <!--para agregar los márgenes laterales-->
  <div class="container-fluid section-wrapper no-padding bgcolor-white">

  {{-- contiene hasta diez eventos como máximo --}}
    <div class="row">

      <div class="col-md-8 col-md-push-2 super-space-top space-bottom">
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

    
    
    <div class="hr-border-top-pegado">

      @if(count($Eventos) > 0)

        <!-- aquí se muestra cada evento relacionado a la marca -->
        @foreach($Eventos as $Evento)
        <div class="row special-col no-padding">
            
          <div class="col-sm-6 no-padding eventos-imagen">
            <img class="img-main" src="{{$Evento->evento->url_img}}">
          </div>
              
          <div class="col-sm-6 no-margin">
            <div class="table-outer">
              <div class="table-inner">
                <div>
                  <h2>{{$Evento->evento->name}}</h2>

                 
                  <div class="p-container">
                    <p class="text-center">
                      @if(isset($Evento->evento->description))
                       {{$Evento->evento->description}}
                      @endif
                    </p>
                  </div>
                  <a href="{{$Evento->evento->route}}">
                    <h5 class="ampliar"><span class="glyphicon glyphicon-chevron-right"></span>AMPLIAR</h5>
                  </a>
                </div>
              </div>
            </div> 
          </div>
        </div>                
        @endforeach
     

        <!-- pagination -->
        <div class="col-xs-12 special-col">
          <div class="row">
            <div class="">          
                <h5 class="ampliar text-center">aqui ira la paginacion</h5>  

                {{-- es la paginacio --}}
                <div class="col-centered">
                  {!! $Eventos->appends(Request::all())->render() !!}
                </div>    

            </div>
          </div>
        </div>

        @else

          <!-- cuando no hay eventos asociados a la marca -->
          <div class="row bgcolor-grey0">
            <div class="col-md-8 col-md-push-2 col-lg-6 col-lg-push-3 super-space-top super-space-bottom">
                <h3 class="text-center space-bottom">Lo sentimos, pero de momento no hay eventos para mostrar relacionados a la marca.</h3>
                <p class="text-center">Debido a que recientemente hemos re-diseñado nuestro sitio web desde sus cimientos para poder brindarte una mejor experiencia como usuario, estamos limpiando nuestro antiguo banco de imágenes para ofrecerte la mejor calidad de contenido.</p>       
            </div>
          </div>

        @endif

    </div>

  </div>
</div>
@stop