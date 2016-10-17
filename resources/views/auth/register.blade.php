@extends('layouts.user_layout.user_layout')


@section('title')
 Registro de Usuario en Worldmaster Uruguay 
@stop

@section('MetaContent')
  Crea tu Cuenta en Worldmaster y accede al sitio #1 en atención de Uruguay.  
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
  <span>Registro</span>
</div>

 <h1 class="Auth-titulo">
             <span class="icon-account_box"></span> 
              Crear Cuenta
 </h1>

 <div class="contenedor-Auth">
          
          {!! Form::open( ['route' => 'register_post',
                            'method'   => 'Post',
                            'files'    => true,
                            'class'    => 'Auth-form',
                            'id'       => 'Form-Registro'
                            ])               !!}

          
           <div class="Auth-form-contiene-label-input">
            {!! Form::label('name', 'Nombre y apellido', array('class' => 'Auth-form-contiene-label')) !!}
            {!! Form::text('name', null ,['class' => 'Auth-form-contiene-input']) !!}
           </div>

           <div class="Auth-form-contiene-label-input">
            {!! Form::label('email', 'Email', array('class' => 'Auth-form-contiene-label')) !!}
            {!! Form::text('email', null ,['class' => 'Auth-form-contiene-input']) !!}
           </div>

           <div class="Auth-form-contiene-label-input">
            {!! Form::label('telefono', 'Celular/Telefono', array('class' => 'Auth-form-contiene-label')) !!}
            {!! Form::text('telefono', null ,['class' => 'Auth-form-contiene-input']) !!}
           </div>

           <div class="Auth-form-contiene-label-input">
            {!! Form::label('password', 'Contraseña', array('class' => 'Auth-form-contiene-label')) !!}
            {!! Form::password('password', ['class' => 'Auth-form-contiene-input']) !!}
           </div>
           
            <input type="submit" class="Auth-bottom" value="Crear Cuenta" >

          {!! Form::close() !!}
  </div>
</div>     

@stop