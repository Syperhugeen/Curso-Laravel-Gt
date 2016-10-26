

  {!! Form::open(             ['route' => 'auth_login_post',
                            'method'   => 'post',
                            'files'    => true
                            ])               !!}



            

            <div class="form-group">
              <label for="username" class="cols-sm-2 control-label">Usuario</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
                  
                  {!! Form::text('email', null ,['class'       => 'form-control',
                                                 'id'          => 'username',
                                                 'placeholder' => 'Escribe tu email']) !!}
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="password" class="cols-sm-2 control-label">Contraseña</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i></span>                
                  {!! Form::password('password', [ 'class'       => 'form-control',
                                                   'id'          => 'password',
                                                   'placeholder' => 'Escribe tu contraseña']) !!}
                </div>
              </div>
            </div>

            <div class="form-group ">
              <button type="submit" class="btn btn-primary btn-lg btn-block">Ingresar</button>
            </div>
            <hr>
<div class="checkbox">
  <label>
    <input type="checkbox" value="">
    Recordar mi usuario
  </label>
</div>

   <div class="login-register">
                    <a href="{{route('password_recet_get')}}">¿ olvidastes tu contraseña ? .. click aquí</a>
   </div>

   <div class="login-register">
                    <a href="{{route('register_get')}}">¿ aun no tienes cuenta ? .. Registrate aquí</a>
   </div>




{!! Form::close() !!}


