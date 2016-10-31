@extends('emails.layouts.layout_principal')

@section('asunto_email')
 CONTRASEÑA
@stop

@section('texto_a_user_email')
 Ernesto, restablece tu contraseña
@stop

@section('mensaje_email')
 Parece que has olvidado tu contraseña. Si es correcto, pulsa el siguiente botón o haz click en este link para que te enviemos una nueva:<br><a href="http://todopadentro.com"> http://todopadentro.com</a>
@stop

@section('url_email')
 Restablecer
@stop


@section('boton_texto_email')
 Restablecer
@stop

@section('mensaje_secundario_email')
 Si has recibido este correo por error, no eres la persona a quien nos dirigimos o no has solicitado ayuda concerniente al olvido de tu contraseña; haznos el favor de comunicarte con nosotros.
@stop



