@if($Orden->estado === 'En Proceso')

<div style="padding:6px; width: 100%; margin:5px 0; border-radius: 4px; background-color:#FFFDE4 ; font-family: arial; font-size: 12px; ">
<div style="font-weight: bold; font-size:1.2em; padding:5px;">Lo que Sigue es..: </div>

@include('carrito.PaginaDeOrdenFinalizada.ParteQueFaltaHacer.QueFaltaHacerPArtial')
</div>
@endif