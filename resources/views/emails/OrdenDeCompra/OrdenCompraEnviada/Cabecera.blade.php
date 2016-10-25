

<table>
<tr style="border: solid 2px blue; padding:5px; ">
   
    @if($Orden->user->Razon_Social != null)

      <td class="datos-user-grupos-datos">
        <!-- datos de facturacion -->
            <div class="">
               {{$Orden->user->Razon_Social}}
            </div>
            <div class="">
             Rut: <strong>{{$Orden->user->Rut}}</strong>
            </div>

      </td>
    @endif
   
  
  <td class="datos-user-grupos-datos">
    <!-- datos basicos use -->
  
    <div class="">
       {{$Orden->user->name}}
    </div>
    <div class="">
       {{$Orden->user->email}}
    </div>
    <div class="">
        {{$Orden->user->celular}}
    </div>
  </td>
  
  <td class="datos-user-grupos-datos">
    <div class="datos-formato-de-dato">
      {{$Orden->user->interior_capital}}
    </div>

    <!-- si es del interior -->
    @if($Orden->user->interior_capital != 'Montevideo')
      <div class="datos-formato-de-dato">
      {{$Orden->user->Departamento}}
      </div>
      <div class="datos-formato-de-dato">
      {{$Orden->user->Ciudad}}
      </div>
    @else
    <div class="datos-formato-de-dato">
      {{$Orden->user->Departamento}}
    </div>
        @if($Orden->user->BarriosMontevideo_id != Null)
          <div class="datos-formato-de-dato">
             <div class="Helper-Fuente-Clara Helper-Fuente-Reduce">{{$Orden->user->barrio->name}}
             </div>
          </div>
        @endif 
    
    @endif
  </td>

  <td class="datos-user-grupos-datos">
    <div style="font-size: 18px; font-weight: bold;">Nº {{$Orden->id}}</div>  
    <div >{{$Orden->created_at->format('d-m-Y')}}</div>
  </td>
  
 </tr>
</table>


  

  