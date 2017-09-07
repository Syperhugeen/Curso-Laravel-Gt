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

    <!--para agregar los márgenes laterales-->
    <div class="container-fluid no-padding section-wrapper bg-contacto-header">

      <div class="container-fluid" id="contacto-header">
        <div class="row super-space-top super-space-bottom">
            <div class="col-md-8 col-md-push-2 super-space-top space-bottom">
            <div class="super-space-top"><img class="home-isologo center-block" src="imagenes/Empresa/isologo_color3.png"></div>
            <!--<h1 class="text-center section-title">Ponte en contacto</h1>-->
            <h2 class="text-center quote space-bottom">Su satisfacción es nuestro objetivo;<br>superar sus expectativas, nuestro deber.</h2>

          </div> 
        </div>
      </div>
              {{-- rombo divisor con el logo de GT --}}
        <div class="decorative-divider"><img class="img-responsive" src="imagenes/Empresa/isologo_color3.png"></div>
    </div>


    <div class="row special-col no-padding no-margin" id="contacto-datos">

      <div class="col-md-6 special-col-fake">
        <div class="table-outer">
          <div class="table-inner">

            <h2 class="text-center section-title half-space-bottom">Comunícate directamente</h2>

            @if($Empresa->telefono != null) 
            <h4><span class="glyphicon glyphicon-earphone color-3dark"></span> {{$Empresa->telefono}}</h4>
            @endif

            @if($Empresa->celular != null)
            <h4><span class="glyphicon glyphicon-phone color-3dark"></span> {{$Empresa->celular}}</h4>
            @endif

            @if($Empresa->email != null)
            <h4><span class="glyphicon glyphicon-envelope color-3dark"></span> {{$Empresa->email}}</h4>
            @endif

            @if($Empresa->direccion != null) 
            <h4><span class="glyphicon glyphicon-map-marker color-3dark"></span> {{$Empresa->direccion}}</h4>
            @endif

            @if($Empresa->horarios_dias != null)
            <h4><span class="glyphicon glyphicon-time color-3dark"></span> {{$Empresa->horarios_dias}}</h4>
            @endif

          </div>
        </div>
      </div>



      <div class="col-md-6 special-col-fake">
        <div class="table-outer">
          <div class="table-inner">

            <h2 class="text-center section-title half-space-bottom">Síguenos en las redes sociales</h2>

          <a href="https://www.facebook.com/GLOBALTARGET/" target="_blank" alt="Global Target social media"><h4><span class="socicon socicon-facebook"></span> /globaltarget</h4></a>
          <a href="https://instme.com/profile/globaltarget_agencia" target="_blank" alt="Global Target social media"><h4><span class="socicon socicon-instagram"></span> /globaltarget_agencia</h4> </a>
          <a href="https://www.linkedin.com/company/agencia-global-target" target="_blank" alt="Global Target social media"><h4><span class="socicon socicon-linkedin"></span> /agencia-global-target</h4></a>
            
          </div>
        </div>
      </div>

<!-- cierro row -->
</div>


<!--para agregar los márgenes laterales-->
<div class="section-wrapper bg-contacto-formulario">
  <div class="container-fluid">
    <div class="row space-bottom space-top" id="contacto-formulario">
        <div class="col-md-8 col-md-push-2 space-top">

                <h1 class="section-title text-center space-bottom">Formulario de contacto</h1>

                @include('formularios.contacto_form')
                
      </div>
    </div>
  </div>
</div>




    </div>
  </div>
</div>


@stop