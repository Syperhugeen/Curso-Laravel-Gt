@extends('layouts.user_layout.user_layout')


@section('title')
 Iniciar Sesion 
@stop

@section('MetaContent')
  Entra en.  
@stop

@section('MetaRobot')
 INDEX,FOLLOW
@stop




@section('content')

<div class="Auth-contenedor">
 
{{-- ejemplo para la bavehacion --}}
<div class="admin-contnedor-navegacion-miga">
  {{-- home --}}
  <a href="{{route('home')}}"><span class="icon-home"></span></a>

  {{-- separador --}}
  <span class="spam-separador"><span class="icon-keyboard_arrow_right"></span></span> 
    
  {{-- lugar donde esta --}}
  <span>Iniciar Sesión</span>
</div>


 <h1 class="Auth-titulo">
             <span class="icon-lock_open"></span> 
              Iniciar Sesión
 </h1>

 <div class="contenedor-Auth">
          
          {!! Form::open( ['route' => 'auth_login_post',
                            'method'   => 'Post',
                            'files'    => true,
                            'class'    => 'Auth-form',
                            'id'       => 'Form-LogIn'
                            ])               !!}

           <div class="Auth-form-contiene-label-input">
            {!! Form::label('email', 'Email', array('class' => 'Auth-form-contiene-label')) !!}
            {!! Form::text('email', null ,['class' => 'Auth-form-contiene-input']) !!}
           </div>

           <div class="Auth-form-contiene-label-input">
            {!! Form::label('password', 'Contraseña', array('class' => 'Auth-form-contiene-label')) !!}
            {!! Form::password('password', ['class' => 'Auth-form-contiene-input']) !!}
           </div> 

           <a class="Auth-olvidastes-password" href="{{route('password_recet_get')}}">¿ olvidastes tu contraseña ?
           </a>
           
           <input type="submit" class="Auth-bottom" value="Iniciar Sesión" >

           <div class="Auth-olvidastes-password-contendor">
             <div>¿aun no tienes cuenta?</div>
             <br>
             <a href="{{route('register_get')}}">Crear Cuenta Aquí</a>
           </div>
          {!! Form::close() !!}
  </div>
     
</div>
@stop