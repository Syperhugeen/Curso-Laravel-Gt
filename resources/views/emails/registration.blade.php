@include('emails.styleGeneralDeEmails')

<div class="estilo-texto-general">
  
  Hola {{ $user->name}} , <strong>muchas gracias</strong> por tomar la iniciativa y registrarte. Ahora  <strong>solo te queda confirmar tu email</strong> .  

</div>

<!-- saltos de linea -->
<br>
<br>

<a href="{{ $url }}">
  <div class="botonEmails">
     Click Aqui Para Confirmar Email
  </div>
</a>

@include('emails.PartesGenerales.FooterEmail')