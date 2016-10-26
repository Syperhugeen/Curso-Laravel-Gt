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

 

 <!--para agregar los márgenes laterales-->


    <h1>formulario de login</h1>
    @include('formularios.auth.login_form')

    <h1>formulario de registro</h1>
    @include('formularios.auth.register_form')
    
    <h1>formulario de contacto</h1>
    @include('formularios.contacto_form')



@stop