@extends('layouts.user_layout.user_layout')


@section('title')
 Proyecto Individual
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


        <h1>Pagina Individual del Proyecto:::::: {{$Proyecto->name}}</h1>
         <div style="color:black;">
          <img style="height: 50px;" src="{{$Proyecto->url_img}}">
          <span>{{$Proyecto->name}}</span>
          <span>{{$Proyecto->description}}</span>        
         </div>    
     


 </div>

@stop