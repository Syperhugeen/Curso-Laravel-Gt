@extends('layouts.user_layout.user_layout')


@section('title')
 Cartera de Clientes
@stop

@section('MetaContent')
  Cartera de Clientes de Global Target
@stop

@section('MetaRobot')
 INDEX,FOLLOW
@stop


 

@section('content')

 

    <div id="marcas">
    
    
<!--para agregar los márgenes laterales-->
<div class="container-fluid section-wrapper no-padding bgcolor-3light">

{{-- contiene hasta diez eventos como máximo --}}
  <div class="row">

    <div class="col-md-8 col-md-push-2 super-space-top super-space-bottom">
      <h1 class="text-center">Marcas con las que trabajamos</h1>
      <p class="text-center super-space-bottom">Aquí alguna frase con respecto a nuestros clientes.</p>
      {{-- rombo divisor con el logo de GT --}}
      <div class="decorative-divider"><img class="img-responsive" src="imagenes/Empresa/isologo.png"></div>
    </div>

            @foreach($Marcas as $Marca)
             @include('paginas.marcas.entidad_marca_para_listado')
            @endforeach


    <!-- pagination -->
      <div class="col-xs-12 special-col">
      <div class="row">
        <div class="">
          
            <h5 class="ampliar text-center">aqui ira la paginacion</h5>
                  
        </div>
      </div>
    </div>


  </div>
</div>



   </div> 





<!--¿qué es esto? no lo borré porque no sé ni qué es ni dónde tiene que ir -->
    <div class="col-centered">
      {!! $Marcas->appends(Request::all())->render() !!}
    </div>


@stop
