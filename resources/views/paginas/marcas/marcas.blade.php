@extends('layouts.user_layout.user_layout')


@section('title')
 Marcas
@stop

@section('MetaContent')
  Descripcion de pagina de marcas
@stop

@section('MetaRobot')
 INDEX,FOLLOW
@stop


 

@section('content')

 

<!--para agregar los márgenes laterales-->
<div class="container-fluid section-wrapper">
  <div class="row">    
    <div class="col-md-10 col-md-push-1 col-lg-8 col-lg-push-2">
      <div class="page-header">
        <h1>Marcas</h1>
      </div>

      <!--contenedor de publicaciones individuales-->
      {{-- contiene hasta séis publicaciones como máximo --}}
      <div class="home-section-display">

            @foreach($Marcas as $Marca)
             @include('paginas.marcas.entidad_marca_para_listado')
            @endforeach

      </div>

    <div class="col-centered">
      {!! $Marcas->appends(Request::all())->render() !!}
    </div>

    </div>  
  </div>
</div>

@stop
