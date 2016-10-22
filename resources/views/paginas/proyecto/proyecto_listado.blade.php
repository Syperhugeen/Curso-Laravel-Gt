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
 <div class="content-wrapper">

     aqui va la descripcion de proyectos listado

       {{-- contenedor de la parte completa de proyectos en la home --}}
    <div style="color:black;">
      {{-- titulo de seccion --}}
     <div>Proyectos Destacados o Ultimos</div>
     {{-- contiene por ejemplo varios proyectos --}}
     <div>    
        @foreach($Proyectos as $Proyecto)
          {{-- contiene proyecto indivual --}}
          <a href="{{$Proyecto->route}}">
           <div style="color:black;">
            <img style="height: 50px;" src="{{$Proyecto->url_img}}">
            <span>{{$Proyecto->name}}</span>
            <span>{{$Proyecto->description}}</span>        
           </div>
          </a>
        @endforeach
     </div>  
  </div>

 </div>

@stop