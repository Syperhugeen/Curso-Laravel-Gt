
@if(Auth::guest())
 {{--  <li id="icono-user-en-navbar" title="icono user"><a href=""><span class="glyphicon glyphicon-user"></span></a></li> --}}
@else
  <li><a  class="icono-user-en-navbar-logeado" ="" href="">{{Auth::user()->first_name}}</a></li>
@endif



