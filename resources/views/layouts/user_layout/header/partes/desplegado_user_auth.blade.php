 @if(!Auth::guest())
 <div class="contenido-auth-deplegado-navbar">              
   <ul>

      @if(Auth::user()->role != 'user')
      <li><a href="{{route('get_datos_home_web')}}">Admin</a></li>
      @endif
      <li><a href="{{route('logout')}}">Salir</a></li>
   </ul>
</div> 
@endif