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
{{-- ejemplo para la bavehacion --}}
<div class="admin-contnedor-navegacion-miga">
  {{-- home --}}
  <a href="{{route('home')}}"><span class="icon-home"></span></a>

  {{-- separador --}}
  <span class="spam-separador"><span class="icon-keyboard_arrow_right"></span></span> 
    
  {{-- lugar donde esta --}}
  <span>Registro</span>
</div>

 <div class="contenedor-Auth">

     



          
          {!! Form::open( ['route' => 'register_post',
                            'method'   => 'Post',
                            'files'    => true,
                            'class'    => 'Form-Auth',
                            'id'       => 'Form-Registro'
                            ])               !!}

          

            <h1 class="Titulo-Auth">
             <span class="icon-account_box"></span>Crear Cuenta</h1>

             <div class="Auth-Field-Contenedor">
              <label class="Auth-Field-Contenedor-Label">Nombre y Apellido</label>
              <input class="Auth-Field-Contenedor-Label-Input"  
                          type="text"
                          name="name" 
                         value="{{ Input::old('name') }}"
                      required="required"
                  data-pattern="name_register"
            data-empty-message="Ingresa Tu Nombre y Apellido"
            data-error-message="Ingresa Tu Nombre y Apellido Validos."
                   placeholder="Ej: Pedro Martinez">
             </div>
             <div class="Auth-Field-Contenedor">
              <label class="Auth-Field-Contenedor-Label">Email</label>
              <input class="Auth-Field-Contenedor-Label-Input"  
                          type="email"
                          name="email"
                            id="register-email" 
                         value="{{ Input::old('email') }}"
                      required="required"
                  data-pattern="email"
            data-empty-message="Ingresa Tu Email."
            data-error-message="Ingresa un Email Valido."
                   placeholder="Escribe Tu Email">
             </div>
             
             <div class="Auth-Field-Contenedor">
              <label class="Auth-Field-Contenedor-Label">Celular</label>
              <input class="Auth-Field-Contenedor-Label-Input"  
                          type="text"
                          name="celular" 
                         value="{{ Input::old('celular') }}"
                      required="required"
                     maxlength="9"
                  data-pattern="cel"
            data-empty-message="Dinos Cual es Tu Celular"
            data-error-message="Ingresa un numero valido"
                   placeholder="Escribe Tu Celular">
             </div>

             <div class="Auth-Field-Contenedor">
              <label class="Auth-Field-Contenedor-Label">Contraseña</label>
              <input class="Auth-Field-Contenedor-Label-Input"  
                          type="password"
                          name="password"
                            id="register-password" 
                         value="{{ Input::old('password') }}"
                      required="required"
                  data-pattern="calle"
            data-empty-message="Debes Escribe una Contraseña"
            data-error-message="Escribe una Contraseña valida"
                   placeholder="Escribe una Contraseña">
             </div>

             
             <div class="Auth-Field-Contenedor">
              
              <label class="Auth-Field-Contenedor-Label">Razon Social
              <span class="Auth-Field-Contenedor-Label-Span" >(Si no eres empresa Salteate esto)</span>
              </label>
              
             
              <input class="Auth-Field-Contenedor-Label-Input"  
                          type="text"
                          name="Razon_Social" 
                         value="{{ Input::old('Razon_Social') }}"
                  data-pattern="calle"
            
            data-error-message="Escribe una Contraseña valida"
                   placeholder="Escribe la razon social de tu empresa">
             </div>
             <div class="Auth-Field-Contenedor">
             <label class="Auth-Field-Contenedor-Label">Rut
              <span class="Auth-Field-Contenedor-Label-Span" >(Si no eres empresa Salteate esto)</span>
              </label>
              
              <input class="Auth-Field-Contenedor-Label-Input"  
                          type="text"
                          name="Rut" 
                         value="{{ Input::old('Rut') }}"
              
            
            data-error-message="Escribe el Rut sin espacio, puntos. Solo Numeros."
                   placeholder="Escribe tu Rut">
             </div>
           
           
                <input type="submit" class="boton-inicio_sesion" value="Crear Cuenta" style="margin-right: 15px;">
               

                
              

          {!! Form::close() !!}
  </div>
     

@stop