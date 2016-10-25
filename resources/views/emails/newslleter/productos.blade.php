<?php $ProductosNewsleter = unserialize($ProductosNewsleter); ?>

<div class="contenedor-productos">

   @foreach($ProductosNewsleter as $Producto)

    @include('emails.newslleter.productoLista')


   @endforeach  
</div>