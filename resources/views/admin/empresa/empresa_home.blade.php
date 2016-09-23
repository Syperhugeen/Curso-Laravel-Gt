@extends('layouts.admin_layout.admin_layout')

@section('content')


<div class="contenedor-admin-entidad">

 {{-- titulo --}}
 <div class="admin-entidad-titulo">Mi Empresa</div>

  {{-- formulario --}}
  {!! Form::model($Empresa,['route' => 'set_datos_corporativos',
                            'method'=> 'PATCH',
                            'files' =>  true,
                            'id'    => 'form-admin-empresa-datos'
                          ])               !!}
   <div class="formulario-contenedor">

      {{-- datos corporativos --}}
      <div class="contenedor-grupo-datos">
        <div class="contenedor-grupo-datos-titulo"><span class="icon-person"></span> Identidad</div>
        <div class="contenedor-formulario-label-fiel">                       
          @include('admin.empresa.formularios_partes.datos_basicos')
        </div>
      </div>

      {{-- imagenes corporativos --}}
      <div class="contenedor-grupo-datos">
        <div class="contenedor-grupo-datos-titulo"><span class="icon-person"></span> Imagenes Corporativas</div>
        <div class="contenedor-formulario-label-fiel">                       
          @include('admin.empresa.formularios_partes.datos_imagenes')
        </div>
      </div>

      {{-- datos de contacto --}}
      <div class="contenedor-grupo-datos">
        <div class="contenedor-grupo-datos-titulo"><span class="icon-person"></span> Contactos</div>
        <div class="contenedor-formulario-label-fiel">                       
          @include('admin.empresa.formularios_partes.datos_contactos')
        </div>
      </div>

      
   </div>
   <div class="admin-boton-editar">
     Editar
   </div>


  {!! Form::close() !!}


  
</div>
  
@stop