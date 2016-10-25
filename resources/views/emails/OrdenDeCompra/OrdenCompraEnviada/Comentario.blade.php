@if($Orden->comentario_user != null)
<div class="contenedor-de-seccion">
  
<div class="titulo-de-seccion">Comentario</div>
<table>
  
    
  <tr>
    <td class="td-tipo-emails">
     
      <span class="titulo-de-td"> Comentario:</span> 
        "<strong>{{$Orden->comentario_user}}</strong>"
       
     
    </td>
  </tr>
</table>
</div>
@endif