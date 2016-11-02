@extends('layouts.user_layout.user_layout')


@section('title')
 Publicaciones
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
        <h1>Publicaciones</h1>
      </div>



    <!--contenedor de publicaciones individuales-->
      {{-- contiene hasta séis publicaciones como máximo --}}
      <div class="home-section-display">

            @foreach($Proyectos as $Proyecto)
            <a href="{{$Proyecto->route}}"> 
              <div class="media home-section-display-item">
                <div class="media-left">
                  <img class="media-object img-rounded" src="{{$Proyecto->url_img}}" alt="..."">
                </div>
                <div class="media-body">
                  <h3 class="media-heading">{{$Proyecto->name}}</h3>
                  <p>{{$Proyecto->description}}</p>
                </div>
              </div> 
            </a>
          <hr class="home-section-display-divider">
            @endforeach

      </div>




      {!! $Proyectos->appends(Request::all())->render() !!}




    </div>  
  </div>
</div>

@stop