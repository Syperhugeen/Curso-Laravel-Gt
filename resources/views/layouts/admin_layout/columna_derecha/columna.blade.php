<div class="admin-columna-contenedor">
 {{-- imagen logo --}}
 <img class="admin-header-logo" src="{{url()}}/imagenes/{{$Empresa->logo_cuadrado}}">
 <ul>
   @if(Auth::user()->role === 'adminMcos522')
     <li class="admin-columna-li"><a href="{{route('get_admin_users')}}"><span class="icon-group"></span> Usuarios</a></li>
     <li class="admin-columna-li"><a href="{{route('get_admin_marcas')}}"><span class="icon-whatshot"></span> Marcas</a></li>
     <li class="admin-columna-li"><span class="icon-chrome_reader_mode"></span> Eventos</li>
     <li class="admin-columna-li"><span class="icon-insert_emoticon"></span> Modelos</li>
     <li class="admin-columna-li"><a href="{{route('get_datos_home_web')}}"><span class="icon-home"></span> Home Edit</a></li>   
   @endif
     <li class="admin-columna-li"><a href="{{route('get_datos_corporativos')}}"><span class="icon-domain"></span> Empresa</a></li>
     <li class="admin-columna-li"><a href="{{route('get_admin_proyectos')}}"><span class="icon-web"></span> Proyectos</a></li>
     <li class="admin-columna-li"><a href="{{route('get_admin_noticias')}}"><span class="icon-drafts"></span> Noticias</a></li>
 </ul>
</div>