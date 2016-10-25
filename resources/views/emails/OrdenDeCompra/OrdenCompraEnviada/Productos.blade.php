<div class="contenedor-de-seccion">
  
  <div class="titulo-de-seccion">Productos</div>
  <table>
    
     @foreach($Orden->productosdeordenes as $producto)
     <tr>
      <td class="contenedor-producto-orden-email">
        
           <img  src="{{url()}}/imagenes/fotos/{{$producto->producto->img}}"  style="width: 40px; height= 40px; margin-right: 5px;">
                 <div style="display: inline-block;">
                   <a href="{{ route('Producto_Show', [$producto->producto->slug , $producto->producto->id]) }}" >
                     <div style="font-size: 12px;">{{$producto->producto->name}}</div>
                   </a>
                   <div class="li-carrito-agrupa_precio_moneda_cantidad">
                        <div >
                          <div style="display:inline-block; font-size: 0.7em;">{{$producto->moneda}}</div>
                          <div style="display:inline-block; font-weight: bold;">{{$producto->precio}}</div>
                          <div style="display:inline-block; font-size: 0.7em">Iva inc</div>
                        </div> 
                       <div style="display:inline-block; font-size: 10px;">
                        Ctd: {{$producto->cantidad}}
                       </div>
                   </div>
                 </div>
         
      </td>
       </tr>
      @endforeach
   
  </table>
</div>