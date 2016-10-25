  {!! Form::open(             ['route' => 'auth_login_post',
                            'method'   => 'post',
                            'files'    => true
                            ])               !!}

  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Email</b></label>
    <input type="text" placeholder="Enter Username" name="email" required>

    <label><b>Contraseña</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit">Login</button>
    <input type="checkbox" checked="checked"> Recordar mi usuario
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Iniciar Sesión</button>
    <span class="psw">¿Olvidaste la <a href="{{route('password_recet_get')}}">contraseña?</a></span>
  </div>

{!! Form::close() !!}




       





