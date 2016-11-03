

  {!! Form::open(             ['route' => 'auth_login_post',
                            'method'   => 'post',
                            'files'    => true,
                            'id'       => 'contact-form'
                            ])               !!}

<h3 style="text-align:center;">este no está ni ahí prontno, tengo que analizar qué cosas son relevantes<br>
para enviar y si son de libre expresión o de opciones limitadas</h3>

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
                    <label for="form_subject">Asunto *</label>
                    <input id="form_subject type="text" name="surname" class="form-control" placeholder="Título de la solicitud *" required="required" data-error="Por favor, ingresa un asunto.">
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
                    <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Escribe aquí un teléfono para contactarte">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_message">Descripción del proyecto y comentarios *</label>
                    <textarea id="form_message" name="message" class="form-control" placeholder="Describe el proyecto aquí *" rows="4" required="required" data-error="Por favor, escribe la descripción de la solicitud."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 space-bottom">
                <div class="input-group">
                        <span>
                            <input  type="file" 
                                    style="visibility:hidden; width: 1px;" 
                                    id='${multipartFilePath}' name='${multipartFilePath}'  
                                    onchange="$(this).parent().find('span').html($(this).val().replace('C:\\fakepath\\', ''))"  /> <!-- Chrome security returns 'C:\fakepath\'  -->
                            <input class="btn btn-primary" type="button" value="Upload File.." onclick="$(this).parent().find('input[type=file]').click();"/> <!-- on button click fire the file click event -->
                            &nbsp;
                            <span  class="badge badge-important" ></span>
                        </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <input type="submit" class="btn btn-primary btn-lg btn-send" value="Enviar">
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-12">
                <p class="text-muted small"><strong>*</strong> Estos campos son obligatorios.</p>
            </div>
        </div>
    </div>


<h3 style="text-align:center;">supuestamente para que funcione bien tengo que activar<br>
el script que se llama "mis-botones_para_adjuntar.js"</h3>
{!! Form::close() !!}
