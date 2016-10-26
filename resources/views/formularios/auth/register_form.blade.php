

 {!! Form::open(             ['route' => 'auth_login_post',
                            'method'   => 'post',
                            'files'    => true
                            ])               !!}


  
            
            <div class="form-group">
              <label for="username" class="cols-sm-2 control-label">Nombre de usuario</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="username" id="username"  placeholder="Ingresa un nombre de usuario"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="email" class="cols-sm-2 control-label">Dirección de correo</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i></span>
                  <input type="email" class="form-control" name="email" id="email"  placeholder="Ingresa tu dirección de correo"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="password" class="cols-sm-2 control-label">Contraseña</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i></span>
                  <input type="password" class="form-control" name="password" id="password"  placeholder="Ingresa una contraseña"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="confirm" class="cols-sm-2 control-label">Confirmar contraseña</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-ok" aria-hidden="true"></i></span>
                  <input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Ingresa nuevamente la contraseña"/>
                </div>
              </div>
            </div>

            <div class="form-group ">
              <button type="submit" class="btn btn-primary btn-lg login-button">Registrarse</button>
            </div>
  <hr>
            <div class="login-register">
                    <a href="{{route('auth_login_get')}}">Ya estoy registrado</a>
              </div>
 




{!! Form::close() !!}
