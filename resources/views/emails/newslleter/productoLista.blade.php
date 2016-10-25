<div class="contenedor-producto-lista">
 <a href="{{route('Producto_Show', [$Producto->producto->slug, $Producto->producto->id])}}">
 <img class="producto-img" src="{{url()}}/imagenes/fotos/{{$Producto->producto->img}}"> 
 </a>
 <div class="contiene-name-precios">
   <a class="producto-nombre" href="{{route('Producto_Show', [$Producto->producto->slug, $Producto->producto->id])}}">{{$Producto->producto->name}}</a>
   <div class="contiene-precio">
       <span class="precio-moneda">{{$Producto->producto->moneda}}</span>
       <span class="precio-precio">{{$Producto->producto->precio_newslleter}}</span>
       <span class="precio-moneda">Iva Inc</span>
       @if($Producto->producto->oferta == 'si')               
          <span class="arrow_box">{{$Producto->producto->descuento_oferta}}% OFF</span>    
       @endif
   </div>
 </div>
</div>