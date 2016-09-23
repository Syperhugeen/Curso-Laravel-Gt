@extends('layouts.admin_layout.admin_layout')

@section('content')


<div class="contenedor-admin-entidad">

 {{-- titulo --}}
 <div class="admin-entidad-titulo">Usuarios <a href="{{route('get_admin_users_crear')}}"><span class="admin-user-boton-Crear" 
 >Crear <span class="icon-add_circle_outline"></span> </span></a>
 </div>

 <div>
   @foreach($users as $user)
        @include('admin.users.partes.lista')
   @endforeach
 </div>

 


  
</div>
  
@stop