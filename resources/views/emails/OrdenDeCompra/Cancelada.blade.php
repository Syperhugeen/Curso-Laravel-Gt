<div style="font-family: arial; font-size: 14px; padding: 4px;">
  Hola {{$user->first_name}} tu orden de compra Nº <a href="{{$url}}">{{$orden->id}}</a> se ha <strong> Cancelado Automáticamente</strong> debido a que ha pasado más de 72hs hábiles desde que la hiciste y aun no has concretado.
</div>
<div style="font-family: arial; font-size: 10px; padding: 4px; margin-top: 10px;">
  Si crees que este mensaje se trata de un error, <a href="{{route('Contacto_Show')}}">contacta con nosotros aqui</a>.
</div>


 @include('emails.PartesGenerales.HeaderEmail')
 @include('emails.PartesGenerales.FooterEmail')