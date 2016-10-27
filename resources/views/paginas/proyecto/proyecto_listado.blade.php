@extends('layouts.user_layout.user_layout')


@section('title')
 Listado de Proyectos
@stop

@section('MetaContent')
  Description Home 
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
        <h1>Proyectos <small>(nota para mí mismo: este tipo de título, creo que se lo voy a poner a los individuales en cada página)</small></h1>
      </div>



    <!--contenedor de proyectos individuales-->
      {{-- contiene hasta séis proyectos como máximo --}}
      <div class="home-section-display">

            @foreach($Proyectos as $Proyecto)
            <a href="{{$Proyecto->route}}"> 
              <div class="media home-section-display-item">
                <div class="media-left">
                  <img class="media-object img-rounded" src="{{$Proyecto->url_img}}" alt="..."">
                </div>
                <div class="media-body">
                  <h4 class="media-heading">{{$Proyecto->name}}</h4>
                  <p>{{$Proyecto->description}}</p>
                </div>
              </div> 
            </a>
          <hr class="home-section-display-divider">
            @endforeach

      </div>




      <!--paginación para cuando sean más de 6 en la primera-->
      <nav aria-label="Page navigation">
      <div class="text-center">
        <ul class="pagination pagination-lg">
          <li class="disabled"> <!-- <li> -->
            <span> <!-- <a href="#" aria-label="Previous"> -->
              <span aria-hidden="true">&laquo;</span>
            </span> <!-- </a> -->
          </li>
          <li class="active"><span>1<span class="sr-only">(current)</span></span></li> <!-- <li><a href="#">1</a></li> -->
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li>
            <a href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </div>
      </nav>




    </div>  
  </div>
</div>

@stop