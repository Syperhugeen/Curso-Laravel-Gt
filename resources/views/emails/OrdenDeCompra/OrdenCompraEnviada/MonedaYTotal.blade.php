<div class="contenedor-de-seccion">
  
<div class="titulo-de-seccion">Moneda y Total a Pagar</div>
<table>
  <tr>
  <td class="td-tipo-emails"><span class="titulo-de-td">Moneda:</span> 

    @if($Orden->Moneda === '$')
     
     <img style="height: 20px; display: inline-block; margin: 0 3px;" src="{{url()}}/Monedas/Pesos.jpg">
     
     <strong>Pesos</strong>
     

    @elseif($Orden->Moneda === 'u$s')

     <img style="height: 25px; display: inline-block; margin: 0 3px;" src="{{url()}}/Monedas/Dolares.jpg">
    
     <strong>Dolar</strong>
     
     
    @endif
  </td>
  </tr>


  
    @if($Orden->Costo_Envio_Montevideo != null)
    <tr>
    <td class="td-tipo-emails">
      <!-- costo de envio -->
    <span class="titulo-de-td">Costo Envio:</span>  
       
    <strong>$ {{$Orden->Costo_Envio_Montevideo}}</strong>
       
     </td>
     </tr>
    @endif
  


  <tr>
    <td class="td-tipo-emails">
      <!-- total a pagar -->
   <span class="titulo-de-td">Total a Pagar:</span> 
     
       <div style="display:inline-block; font-size: 16px; font-family: arial;">
         <div style="display:inline-block; font-size: 0.7em;">{{$Orden->Moneda}}</div>
         <div style="display:inline-block; font-weight: bold;">{{$Orden->Total}}</div>
         <div style="display:inline-block; font-size: 0.7em">Iva inc</div>
              @if($Orden->Costo_Envio_Montevideo != null)
               @if($Orden->Costo_Envio_Montevideo != 'Tercerizado')
                   <span> (Costo de Envio Ya Incluido)</span>
                @endif    
              @endif 
       </div>
    </td>
  </tr>

    
  <tr>
    <td class="td-tipo-emails">
      <!-- metodo de pago -->
      <span class="titulo-de-td"> Metodo De Pago:</span>
     <img style="height:25px;" src="{{url()}}/imagenes/MetodosDePagos/{{ $Orden->metododepago->img }}">
     <span class="metodoPago_confirmaciom-metodoDePago-name">{{ $Orden->metododepago->name }}</span>
    </td>
  </tr>
    
  <tr>
    <td class="td-tipo-emails">
        <!-- cuotas  -->
      @if($Orden->Cuotas != Null)
      <span class="titulo-de-td"> Cuotas:</span> 
        <span style="font-weight: bold;">{{ $Orden->Cuotas }}</span>
       
      @endif
    </td>
  </tr>
</table>
</div>