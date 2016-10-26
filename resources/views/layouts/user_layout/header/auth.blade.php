
@if(Auth::guest())
  <li id="icono-user-en-navbar" title="icono user"><a href=""><span class="glyphicon glyphicon-user"></span></a></li>
@else
  <li id="icono-user-en-navbar-logeado"><a href="">{{Auth::user()->name}}</a></li>
@endif



