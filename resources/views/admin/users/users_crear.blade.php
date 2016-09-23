@extends('layouts.admin_layout.admin_layout')

@section('content')


<div class="contenedor-admin-entidad">

 {{-- titulo --}}
 <div class="admin-entidad-titulo">Crear Usuario 
 </div>

 {{-- formulario --}}
  {!! Form::open(['route' => 'set_datos_corporativos',
                            'method'=> 'PATCH',
                            'files' =>  true,
                            'id'    => 'form-admin-empresa-datos'
                          ])               !!}
   <div class="formulario-contenedor">

      {{-- datos corporativos --}}
      <div class="contenedor-grupo-datos">
        <div class="contenedor-grupo-datos-titulo"><span class="icon-person"></span> Identidad</div>
        <div class="contenedor-formulario-label-fiel">                       
          @include('admin.users.formularios_partes.datos_user')
        </div>
      </div>

      {{-- imagenes corporativos --}}
      <div class="contenedor-grupo-datos">
        <div class="contenedor-grupo-datos-titulo"><span class="icon-person"></span> Imagenes Corporativas</div>
        <div class="contenedor-formulario-label-fiel">                       
          
        </div>
      </div>

      {{-- estado y role --}}
      <div class="contenedor-grupo-datos">
        <div class="contenedor-grupo-datos-titulo"><span class="icon-person"></span> Contactos</div>
        <div class="contenedor-formulario-label-fiel">                       
          
        </div>
      </div>

      
   </div>
   <div class="admin-boton-editar">
     Crear Pagina
   </div> 


  {!! Form::close() !!}


  
</div>
  
@stop