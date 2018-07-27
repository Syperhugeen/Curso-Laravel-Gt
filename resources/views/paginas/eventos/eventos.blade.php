@extends('layouts.user_layout.user_layout')


@section('title')
 Galería
@stop

@section('MetaContent')
  Fotografías de nuestras acciones promocionales, eventos y lanzamientos.
@stop

@section('MetaRobot')
 INDEX,FOLLOW
@stop


 

@section('content')

 

 



<div id="eventos">
    
    



  <!--para agregar los márgenes laterales-->
  <div class="section-wrapper bg-eventos-header" id="eventos-header"    

      @if($Eventos->hasPages())  
        @if($Eventos->currentPage() != 1)
            style="display:none;"
        @endif
      @endif
  >
    <div class="container-fluid">
      <div class="row super-space-bottom space-top">
          <div class="col-md-8 col-md-push-3 col-lg-8 col-lg-push-2">


            <div class="row super-space-bottom">
              <div class="col-sm-6 col-sm-push-6">
                <!--<h1 class="section-title">Galería</h1>-->
                <h2 class="section-subtitle">Acciones y eventos destacados</h2>
                <div class="section-text super-space-bottom">
                  <h3>Reseñas e imágenes de acciones promocionales y eventos transcurridos a lo largo de estos 15 años de crecimiento en conjunto con nuestros clientes.</h3>
                </div>
              </div>
            </div>


          <div class="row space-bottom hidden-xs">
            <div class="col-sm-6 col-sm-push-6 half-space-bottom">
              <div>
                <h4 class="buscador-predescription">¿Buscas los eventos relacionados a una marca en particular?</h4>
              </div>
              <div class="buscador wow fadeInRight" id="eventos-buscador">@include('paginas.eventos.partes.select_buscador')
              </div>
            </div>
          </div>


  <!--fin de los márgenes laterales-->
         </div> <!--/ fin de la col-->
      </div> <!--/ fin del row-->
    </div>
  </div>






  <!--para agregar los márgenes laterales-->
  <div class="container-fluid no-padding section-wrapper" id="eventos-listado">





  	{{-- rombo divisor con el logo de GT --}}
    <!--desaparece cuando no hay header-->
  	<div class="decorative-divider"

    @if($Eventos->hasPages())  
        @if($Eventos->currentPage() != 1)
            style="display:none;"
        @endif
      @endif>

      <img class="img-responsive" src="imagenes/Empresa/isologo_color3.png"></div>








 {{-- contiene hasta 10 eventos como máximo a la vez (luego aparece la paginación) --}}
  	 <div class="row hr-border-top-pegado">

  			{{-- for each... insertar aquí las entidades --}}
  	    @foreach($Eventos as $Evento)
  	     @include('paginas.eventos.entidad_evento_para_listado')
  	    @endforeach


     @if($Eventos->hasPages() )     
        <!-- pagination -->
         <div class="col-xs-12 special-col">
          <div class="pagination-block">
             @if($Marca_seleccionada != '')
                {!! $Eventos->appends(Request::all())->render() !!}
             @else
                {!! $Eventos->appends(Request::all())->render() !!}
             @endif 
          </div>
        </div>
        <!-- /pagination -->
     @endif
  		


   	</div>

  </div>



</div> 


  
@stop