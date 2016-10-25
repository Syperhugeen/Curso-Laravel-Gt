@extends('layouts.user_layout.user_layout')


@section('title')
 Resetear Contraseña  
@stop

@section('MetaContent')
  Resetear Contraseña .  
@stop

@section('MetaRobot')
 NOINDEX,FOLLOW
@stop




@section('content')

{{-- ejemplo para la bavehacion --}}
<div class="admin-contnedor-navegacion-miga">
  {{-- home --}}
  <a href="{{route('get_home')}}"><span class="icon-home"></span></a>

  {{-- separador --}}
  <span class="spam-separador"><span class="icon-keyboard_arrow_right"></span></span> 
    
  {{-- lugar donde esta --}}
  <span>Resetear Contraseña</span>
</div>

 <div class="contenedor-Auth">

          
          
          {!! Form::open( ['route' => 'password_recet_route_post',
                            'method'   => 'Post',
                            'files'    => true,
                            'class'    => 'Form-Auth',
                            'id'       => 'Form-RecetPassword'
                            ])               !!}

          
            {{-- toquenoculto --}}
            <input type="hidden" name="token" value="{{ $token }}">                
            <h1 class="Titulo-Auth">
             <span class="icon-lock_open"></span> Nueva Contraseña</h1>

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
             <div class="Auth-Field-Contenedor">
              <label class="Auth-Field-Contenedor-Label">Contraseña</label>
              <input class="Auth-Field-Contenedor-Label-Input"  
                          type="password"
                            id="password_recet"
                          name="password"
                      required="required"
            data-empty-message="Ingresa Tu Contraseña."
                   placeholder="Escribe tu Contraseña">
             </div>
             <div class="Auth-Field-Contenedor">
              <label class="Auth-Field-Contenedor-Label">Repetir Contraseña</label>
              <input class="Auth-Field-Contenedor-Label-Input"  
                          type="password"
                          name="password_confirmation"
                      required="required"
                  data-pattern="password_recet" 
              data-match-input="password"
            data-empty-message="Repite Tu Contraseña."
            data-error-message="Las Contraseñas No Coinciden"
                   placeholder="Repite tu Contraseña">
             </div>

             
           
           
             <input type="submit" class="boton-inicio_sesion" value="Resetear Contraseña" >

             
               

                
              

          {!! Form::close() !!}
  </div>
     

@stop