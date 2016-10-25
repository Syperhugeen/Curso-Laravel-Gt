<div class="contenedor-de-seccion">
  
<div class="titulo-de-seccion">Metodo De Envio / Retiro</div>
<table>
  


  

 
 
    @if($Orden->Metodo_Envio === 'Envio en Montevideo')

    <tr>
              <td class="td-tipo-emails">
                <span class="titulo-de-td">Metodo De Envio:</span> 
                <strong>{{$Orden->Metodo_Envio}}</strong>
              </td>
     </tr>
    
    <td class="td-tipo-emails">
    <span class="titulo-de-td">Barrio:</span> 
    <strong>{{$Orden->barrio->name}}</strong>
     </td>
     </tr>
     @if($Orden->DireccionUser_id != 0)
                    <tr>
                    <td class="td-tipo-emails">
                    <span class="titulo-de-td">Dirección:</span> 
                    @foreach($Orden->user->direccionuser as $Direccion)
                            <span class="dato-envio-user-span">
                            {{$Direccion->calle}} {{$Direccion->numero}} 
                              @if(!$Direccion->apartamento == 0)
                               Ap {{$Direccion->apartamento}} ,
                              @endif
                              Esquina {{$Direccion->esquina1}}
                            </span>
                    @endforeach
                    </td>
                    </tr>
        @endif


    @elseif($Orden->Metodo_Envio === 'Envio al Interior')
      <tr>
      <td class="td-tipo-emails">
        <span class="titulo-de-td">Departamento:</span> 
        <strong>{{$Orden->Departamento}}</strong>
      </td>
      </tr>

      <tr>
      <td class="td-tipo-emails">
        <span class="titulo-de-td">Ciudad:</span> 
        <strong>{{$Orden->Ciudad}}</strong>
      </td>
      </tr>

        

      <tr>
      <td class="td-tipo-emails">
        <span class="titulo-de-td">Empresa de Transporte:</span> 
        <img style="height: 20px; margin: 0 5px;" src="{{url()}}/imagenes/EmpresaDeTransporte/{{$Orden->empresatransporte->img}}">
      <strong>{{$Orden->empresatransporte->name}}</strong>
      </td>
      </tr>

            @if($Orden->Opcion_Entrega_Interior === 'Retiro En Agencia')
              <tr>
              <td class="td-tipo-emails">
                <span class="titulo-de-td">Retiro En Agencia:</span> 
                <strong>{{$Orden->Opcion_Entrega_Interior}}</strong>
              </td>
              </tr>
              @elseif($Orden->Opcion_Entrega_Interior === 'Envio a Domicilio')
              <tr>
              <td class="td-tipo-emails">
                <span class="titulo-de-td">Tipo de Entrega:</span> 
                <strong>{{$Orden->Opcion_Entrega_Interior}}</strong>
              </td>
              </tr>

                  @if($Orden->DireccionUser_id != 0)
                  <tr>
                  <td class="td-tipo-emails">
                  <span class="titulo-de-td">Dirección:</span> 
                  @foreach($Orden->user->direccionuser as $Direccion)
                          <span class="dato-envio-user-span">
                          {{$Direccion->calle}} {{$Direccion->numero}} 
                            @if(!$Direccion->apartamento == 0)
                             Ap {{$Direccion->apartamento}} ,
                            @endif
                            Esquina {{$Direccion->esquina1}}
                          </span>
                  @endforeach
                  </td>
                  </tr>
                 @endif
            @endif
    @else

    <tr>
      <td class="td-tipo-emails">
        <span class="titulo-de-td">Lugar de Retiro:</span> 
        <strong>{{$Worldmaster->direccion}}</strong>
      </td>
    </tr>
    <tr>
      <td class="td-tipo-emails">
        <span class="titulo-de-td">Horarios:</span> 
        <strong>{{$Worldmaster->horarios_LaV}}</strong>
      </td>
    </tr>

    @endif

 
  

    
 
    
 
</table>
</div>



















  
 
  
 
