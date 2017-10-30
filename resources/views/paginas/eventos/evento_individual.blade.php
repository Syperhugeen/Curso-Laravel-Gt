@extends('layouts.user_layout.user_layout')


@section('title')
 {{$Evento->name}}
@stop

@section('MetaContent')
  {{$Evento->description}}
@stop

@section('MetaRobot')
 INDEX,FOLLOW
@stop


 

@section('content')

<div id="evento-individual">







<!--evento individual - título, logos de marcas asociadas y descripción del mismo-->
<div class="container-fluid no-padding section-wrapper bgcolor-white">
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-push-2 space-bottom super-space-top">


          <div class="row" id="evento-individual-header">

            <div class="col-sm-6">
              <h1 class="section-title hidden-xs">{{$Evento->name}}</h1>
              <h1 class="section-title visible-xs">{{$Evento->name}}</h1>
              <div class="section-text visible-xs">
                <h3>{{$Evento->description}}</h3>
              </div>
            </div>

            <div class="col-sm-6">
              <div class="section-text hidden-xs">
                <h3>{{$Evento->description}}</h3>
              </div>
            </div>
          </div>

          <div class="center-block text-center">
            <div class="inline-logos">
              @foreach($Evento->marcasevento as $Marca)
                <a href="{{$Marca->marca->route}}">
                  <!-- logo de la(s) marca(s) asociada(s) al evento -->
                  <img src="{{$Marca->marca->url_img}}">
                </a>
              @endforeach
            </div>
          </div>


       </div>
    </div>
  </div>
</div><!--fin de filosofia-->









<!--para agregar los márgenes laterales-->
<div class="container-fluid">
  

  
    <div class="row">  
      <div class="col-sm-12 no-padding special-col-fake">
        <!-- todas las imagenes asociadas al evento -->
        <div class="thumbnail-gallery-parent">
          @foreach($Evento->imagenesevento as $img)
            <div class="thumbnail-gallery-child">
               <!--<a href="">-->
                <img class="img-greyscale-hover" src="{{$img->url_img}}">
              <!--</a>-->
            </div>
          @endforeach
        </div>
      </div>
    </div>









 
    @if($Evento->marcasevento->count() > 1) 
      @foreach($Evento->marcasevento as $Marca)
      <!-- ver más todos los eventos de esta misma marca (link a estamarca.blade.php) --> 
    	<div class="row"><!-- ver más / ampliar / explorar -->
    		<div class="col-xs-12 special-col">
    				<a href="{{$Marca->marca->route}}">
    					<h5 class="ampliar text-center">

                 <!-- logo de la marca -->
                 <span class="glyphicon glyphicon-triangle-right"></span> ver todos los eventos y promociones asociados a {{$Marca->marca->name}}

              </h5>
    				</a>
    		</div>
    	</div>
      @endforeach
    @endif









    <!-- ver el listado completo de eventos (link a eventos.blade.php) -->
  	<div class="row"><!-- ver más / ampliar / explorar -->
  		<div class="col-xs-12 special-col">
  				<a href="{{route('get_pagina_eventos')}}">
  					<h5 class="ampliar text-center"><span class="glyphicon glyphicon-triangle-right"></span>ver listado completo de eventos y promociones</h5>
  				</a>
  		</div>
  	</div>


  </div>

</div>


@stop



<!-- modal con lightbox de foto elegida -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- script para que dictaminar que los thumbnail abren el modal -->
<script type="text/javascript">
$(document).ready(function(){
  $('div.thumbnail-gallery-parent').bsPhotoGallery({
    "classes" : "col-lg-2 col-md-4 col-sm-3 col-xs-4 col-xxs-12",
    "hasModal" : true
  });
})
</script>


<!-- script para abrir el modal con el lightbox de las fotos -->
<script type="text/javascript">
$(document).ready(function(){
   $('div.thumbnail-gallery-child img').on('click',function(){
        var src = $(this).attr('src');
        var img = '<img src="' + src + '" class="img-responsive"/>';
        $('#myModal').modal();
        $('#myModal').on('shown.bs.modal', function(){
            $('#myModal .modal-body').html(img);
        });
        $('#myModal').on('hidden.bs.modal', function(){
            $('#myModal .modal-body').html('');
        });
   });
})
</script>