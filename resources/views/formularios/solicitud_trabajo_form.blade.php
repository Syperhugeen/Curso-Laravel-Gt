{!! Form::open(             ['route' => 'auth_login_post',
                            'method'   => 'post',
                            'files'    => true,
                            'id'       => 'solicitud-trabajo-form'
                            ])               !!}

    <h3 style="text-align:center;">este no está ni ahí prontno, tengo que analizar qué cosas son relevantes<br>
    para enviar y si son de libre expresión o de opciones limitadas</h3>

    <div class="messages"></div>

    <div class="controls">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name', null ,['class'       => 'form-control',
                                                  'placeholder' => 'Escribe tu nombre aquí *',
                                                  'required'    => 'required' ,
                                                  'data-error'  => 'Por favor, ingresa tu nombre.' ]) !!}                   
                    
                </div>
                <div class="help-block with-errors"></div>
            </div>            
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::text('email', null ,['class'       => 'form-control',
                                                  'placeholder' => 'Escribe tu dirección de correo aquí *',
                                                  'required'    => 'required' ,
                                                  'data-error'  => 'Por favor, ingresa una dirección de correo válida.' ]) !!}  
                    
                </div>
                <div class="help-block with-errors"></div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('telefono', 'Teléfono') !!}
                    {!! Form::text('telefono', null ,['class'       => 'form-control',
                                                      'placeholder' => 'Escribe aquí un teléfono para contactarte' ]) !!}
                    
                </div>
                <div class="help-block with-errors"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">                   
                    {!! Form::label('mensaje', 'Mensaje *') !!}
                    {!! Form::textarea('mensaje', null ,['class'       => 'form-control',
                                                         'placeholder' => 'Eescribe el mensaje aquí *', 
                                                         'rows'        => '4',
                                                         'required'    => 'required',
                                                         'data-error'  => 'Por favor, escribe el mensaje.' ]) !!}
                    
                </div>
                <div class="help-block with-errors"></div>
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
