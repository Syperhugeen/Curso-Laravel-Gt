

<!-- nos jode todos los breakpoints el coso ahi, no puede estar junto con los links de navegacion -->

<!--
@if(Auth::guest())
	<li id="icono-user-en-navbar" title="icono user"><a href=""><span class="glyphicon glyphicon-user"></span></a></li>
@else
 	<li class="icono-user-en-navbar-logeado" ><a  href="">{{Auth::user()->first_name}}</a></li>
@endif-->


<!-- nueva ubicacion del user-menu -->
@if(Auth::guest())
{{--   <li id="icono-user-en-navbar" title="icono user"><a href=""><span class="glyphicon glyphicon-user"></span></a></li> --}}
@else
  <div class="user-menu hidden-xs"><h4 class="no-padding no-margin"><a  href="http://localhost/Curso-Laravel-Gt/public/get_datos_home_web"></span>{{Auth::user()->first_name}} <span class="glyphicon glyphicon-user"></a></h4>
  <h6><a href="http://localhost/Curso-Laravel-Gt/public/get_datos_home_web">Admin Panel</a> <strong>|</strong> <a href="http://localhost/Curso-Laravel-Gt/public/salir">Log-out</a></h6>
  </div>
@endif