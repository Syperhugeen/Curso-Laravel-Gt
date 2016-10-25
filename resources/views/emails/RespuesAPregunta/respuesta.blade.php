@include('emails.styleGeneralDeEmails')
@include('emails.Estilos.RespuestaEstilos')

<div class="estilo-texto-general">
  {{$user->first_name}} te hemos respondido a tu pregunta sobre el articulo..
</div>
<div class="contenedor-img-producto">
  <img class="img-producto-de-respuesta" src="{{url()}}/imagenes/fotos/{{$respuesta->pregunta->producto->img}}">
  <div class="Nombre-del-producto">
    <a href="{{route('Producto_Show', [$respuesta->pregunta->producto->slug, $respuesta->pregunta->producto->id])}}">
        {{$respuesta->pregunta->producto->name}}
    </a>
  </div>
</div>

<br>


<div class="tu-pregunta-contenedor">
  <div>Tu Pregunta</div>
  <div>{{$respuesta->pregunta->pregunta}}</div>
</div>
 

 <br>
 <div class="respuesta-contenedor">
   <div>Respuesta::</div>
   <div>{{$respuesta->respuesta}}</div>
 </div>
 

 <br>
 <br>

<a href="{{route('Producto_Show', [$respuesta->pregunta->producto->slug, $respuesta->pregunta->producto->id])}}">
  <div class="botonEmails">
    Hacer otra Pregunta
  </div>
</a>







@include('emails.PartesGenerales.FooterEmail')