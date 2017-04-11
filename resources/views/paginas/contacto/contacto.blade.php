@extends('layouts.user_layout.user_layout')


@section('title')
 Contacto
@stop

@section('MetaContent')
  Description Home 
@stop

@section('MetaRobot')
 INDEX,FOLLOW
@stop


 

@section('content')

 

 

<div id="contacto">


  <!--para agregar los márgenes laterales-->
  <div class="container-fluid section-wrapper no-padding bgcolor-3light">

    <div class="row">



      <div class="col-md-8 col-md-push-2 super-space-top super-space-bottom">
        <h1 class="text-center">Ponte en contacto</h1>
        <h2 class="text-center quote super-space-bottom">Una frase aquí, de no más de un renglón de longitud.</h2>
            {{-- rombo divisor con el logo de GT --}}
            <div class="decorative-divider"><img class="img-responsive" src="imagenes/Empresa/isologo.png"></div>
      </div> 



      <div class="col-sm-6 special-col">
        <div class="table-outer">
          <div class="table-inner">

            <h5 class="text-center"><strong>Comunícate directamente</strong></h5>

            @if($Empresa->telefono != null) 
            <p><span class="glyphicon glyphicon-phone color-2light">·</span> {{$Empresa->telefono}}</p>
            @endif

            @if($Empresa->celular != null)
            <p><span class="glyphicon glyphicon-phone color-2light">·</span> {{$Empresa->celular}}</p>
            @endif

            @if($Empresa->email != null)
            <p><span class="glyphicon glyphicon-phone color-2light">·</span> {{$Empresa->email}}</p>
            @endif

            @if($Empresa->direccion != null) 
            <p><span class="glyphicon glyphicon-phone color-2light">·</span> {{$Empresa->direccion}}</p>
            @endif

            @if($Empresa->horarios_dias != null)
            <p><span class="glyphicon glyphicon-phone color-2light">·</span> {{$Empresa->horarios_dias}}</p>
            @endif

          </div>
        </div>
      </div> 



      <div class="col-sm-6 special-col">
        <div class="table-outer">
          <div class="table-inner">

            <h5 class="text-center"><strong>Síguenos en las redes</strong></h5>

            @if($Empresa->telefono != null) 
            <p><span class="glyphicon glyphicon-phone color-2light">·</span> {{$Empresa->telefono}}</p>
            @endif

            @if($Empresa->celular != null)
            <p><span class="glyphicon glyphicon-phone color-2light">·</span> {{$Empresa->celular}}</p>
            @endif

            @if($Empresa->email != null)
            <p><span class="glyphicon glyphicon-phone color-2light">·</span> {{$Empresa->email}}</p>
            @endif

            @if($Empresa->direccion != null) 
            <p><span class="glyphicon glyphicon-phone color-2light">·</span> {{$Empresa->direccion}}</p>
            @endif

            @if($Empresa->horarios_dias != null)
            <p><span class="glyphicon glyphicon-phone color-2light">·</span> {{$Empresa->horarios_dias}}</p>
            @endif
            
          </div>
        </div>
      </div> 



      <div class="col-sm-12 special-col">
        <div class="table-outer">
          <div class="table-inner">

            <h5 class="text-center"><strong>...o bien, escríbenos ahora mismo</strong></h5>

            @include('formularios.contacto_form')
            
          </div>
        </div>
      </div> 



    </div>
  </div>
</div>


@stop