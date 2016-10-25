 <form action="action_page.php">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Usuario</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b>Contraseña</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    <input type="checkbox" checked="checked"> Recordar mi usuario
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancelar</button>
    <span class="psw">¿Olvidaste la <a href="#">contraseña?</a></span>
  </div>
</form>




        <!-- comienza el form -->

                    <h4 class="wow fadeInUp delay1"><span class="glyphicon glyphicon-chevron-right color-contacto" style="font-size:70%"></span> Envíame un mensaje</h4>

                    <p class="lead wow fadeInUp delay1b">Si deseas comunicarte conmigo, puedes hacerlo vía telefónica, por correo o aquí mismo:</p>





                    <form class="wow fadeInUp delay2" id="contact-form" method="post" action="contact.php" role="form">

    <div class="messages"></div>

    <div class="controls">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">Nombre *</label>
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Escribe tu nombre aquí *" required="required" data-error="Por favor, ingresa tu nombre.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_lastname">Apellido *</label>
                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Escribe tu apellido aquí *" required="required" data-error="Por favor, ingresa tu apellido.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_email">Email *</label>
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Escribe tu dirección de correo aquí *" required="required" data-error="Por favor, ingresa una dirección de correo válida.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_phone">Teléfono</label>
                    <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Escribe aquí tu número de línea o celular">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_message">Mensaje *</label>
                    <textarea id="form_message" name="message" class="form-control" placeholder="Escribe tu consulta aquí *" rows="4" required="required" data-error="Por favor, escribe un mensaje."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" class="btn btn-success btn-send" value="Enviar">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-muted small"><strong>*</strong> Estos campos son obligatorios.</p>
            </div>
        </div>
    </div>

</form>

<div class="checkbox">
  <label>
    <input type="checkbox" value="">
    Option one is this and that&mdash;be sure to include why it's great
  </label>
</div>