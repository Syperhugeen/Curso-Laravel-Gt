@include('emails.styleGeneralDeEmails')
@include('emails.newslleter.Estilos.generales')
@include('emails.newslleter.Estilos.producto')


<div class="contenedor-principal-newslleter">

 @include('emails.newslleter.UserSaludoYTop')
 @include('emails.newslleter.comentario')
 @include('emails.newslleter.productos')
 @include('emails.PartesGenerales.FooterEmail')
 @include('emails.newslleter.CancelarEnvioDeEmails')

  
</div>



