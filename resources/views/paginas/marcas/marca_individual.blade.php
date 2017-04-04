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
<div class="container-fluid section-wrapper no-padding bgcolor-3light">

{{-- contiene hasta diez eventos como máximo --}}
  <div class="row">

    <div class="col-md-8 col-md-push-2 super-space-top super-space-bottom">
      <h1 class="text-center">Eventos y promociones asociados a {{$Marca->name}}</h1>
      <div class="table-outer text-center">
        <div class="table-inner"><img class="img-responsive" src="{{$Marca->url_img}}"></div>

        {{-- creo que esto no va --}}
        <div class="table-inner"><img class="img-responsive" src="imagenes/Empresa/logo.png"></div>

      </div>
      {{-- rombo divisor con el logo de GT --}}
      <div class="decorative-divider"><img class="img-responsive" src="imagenes/Empresa/isologo.png"></div>
    </div>
    @if(count($Eventos) > 0)

        <!-- aquí se muestra cada evento relacionado a la marca -->
        @foreach($Eventos as $Evento)
          {{-- <div class="col-xs-12 special-col no-padding">
            <div class="row">
              <div class="col-sm-6 no-padding eventos-imagen">
                <img class="img-greyscale" src="{{$Evento->evento->url_img}}">
              </div>
              <div class="col-sm-6 table-outer">
                <div class="table-inner">
                  <h2>{{$Evento->evento->name}}</h2>
                  <div class="p-container"><p class="text-center">{{$Evento->evento->description}}</p></div>
                  <a href="{{$Evento->evento->route}}">
                    <h5 class="ampliar"><span class="glyphicon glyphicon-chevron-right"></span>AMPLIAR</h5>
                  </a>
                </div>
              </div>
            </div>
          </div>           --}}      
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
      <div class="col-xs-12 special-col-fake">
        <div class="row">
          <div class="">
            
              <h3 class="text-center">Lo sentimos, pero de momento no hay eventos para mostrar relacionados a la marca.</h3>
              <p class="text-center">Debido a que recientemente hemos re-diseñado nuestro sitio web desde sus cimientos para poder brindarte una mejor experiencia como usuario, estamos limpiando nuestro antiguo banco de imágenes para ofrecerte la mejor calidad de contenido.</p>
                    
          </div>
        </div>
      </div>
    @endif
  </div>
</div>














<!--para agregar los márgenes laterales-->


{{-- <div class="container-fluid section-wrapper">
  <div class="row">    
    <div class="col-md-10 col-md-push-1 col-lg-8 col-lg-push-2">
      <div class="page-header">
        <h1>{{$Marca->name}}</h1>
      </div>

      <h1>Pagina de la marca ...  {{$Marca->name}} .</h1>
      
      aqui se muestra todos los eventos asociados a esa marca
      @if($Eventos->count() > 0)
        @foreach($Eventos as $Evento)
         {{$Evento->evento->name}} 
        @endforeach
      @else
       <h2>No hay eventos asociados a esta marca</h2>
      @endif
    

    </div>  
  </div>
</div> --}}

  </div>

@stop