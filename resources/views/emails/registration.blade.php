@extends('emails.layouts.layout_principal')

@section('asunto_email')
 CONTRASEÑA
@stop

@section('texto_a_user_email')
 Hola {{ $user->first_name}} , <strong>muchas gracias</strong> por tomar la iniciativa y registrarte. 
@stop

@section('mensaje_email')
 Ahora <strong> solo te queda confirmar tu email</strong> . <a href="{{$url}}"> clic aquí para confirmar tu cuenta. </a>
@stop

@section('url_email')
 {{$url}}
@stop


@section('boton_texto_email')
 Confirmar cuenta
@stop

@section('mensaje_secundario_email')
 Si has recibido este correo por error, no eres la persona a quien nos dirigimos o no has solicitado ayuda concerniente al olvido de tu contraseña; haznos el favor de comunicarte con nosotros.
@stop