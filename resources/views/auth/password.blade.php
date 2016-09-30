@extends('layouts.user_layout.user_layout')


@section('title')
 Resetear Contraseña  
@stop

@section('MetaContent')
  Resetear Contraseña   
@stop

@section('MetaRobot')
 NOINDEX,FOLLOW
@stop




@section('content')

{{-- ejemplo para la bavehacion --}}
<div class="admin-contnedor-navegacion-miga">
  {{-- home --}}
  <a href="{{route('home')}}"><span class="icon-home"></span></a>

  {{-- separador --}}
  <span class="spam-separador"><span class="icon-keyboard_arrow_right"></span></span> 
    
  {{-- lugar donde esta --}}
  <span>Resetear Contraseña</span>
</div>



 <div class="contenedor-Auth">

          

          {!! Form::open( ['route' => 'password_recet_post',
                            'method'   => 'Post',
                            'files'    => true,
                            'class'    => 'Form-Auth',
                            'id'       => 'Form-RecetPasswordEmail'
                            ])               !!}

          

            <h1 class="Titulo-Auth">
             <span class="icon-lock_open"></span> Recuperar Contraseña</h1>

             <div class="Auth-Field-Contenedor">
              <label class="Auth-Field-Contenedor-Label">Email</label>
              <input class="Auth-Field-Contenedor-Label-Input"  
                          type="email"
                          name="email" 
                         value="{{ Input::old('email') }}"
                      required="required"
                  data-pattern="email"
            data-empty-message="Ingresa Tu Email."
            data-error-message="Ingresa un Email Valido."
                   placeholder="Email con el cual te registrastes">
             </div>
    

             
           
           
             <input type="submit" class="boton-inicio_sesion" value="Enviar Contraseña Reset Link" >

             
               

                
              

          {!! Form::close() !!}
  </div>
     

@stop