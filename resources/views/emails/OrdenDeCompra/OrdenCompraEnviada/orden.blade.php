
 
 @include('emails.styleGeneralDeEmails')
 @include('emails.Estilos.OrdenDeCompraEstilos')


 
 <br>

 <div class="gran-contenedor-ordeCompra">
      
     @include('emails.OrdenDeCompra.OrdenCompraEnviada.Fecilitacion')
     @include('emails.OrdenDeCompra.OrdenCompraEnviada.QueFaltaHacer')
    

    <div class="contenedor-ordenCompraEmail">
      <div style="margin: 4px auto;  padding: 8px; font-size: 14px; font-family: arial; text-align: center; color: #999999; background-color:#EFEEEE; border-radius: 4px; " >Resumen de la Orden
      </div>
      @include('emails.OrdenDeCompra.OrdenCompraEnviada.Cabecera')
      @include('emails.OrdenDeCompra.OrdenCompraEnviada.Productos')
      @include('emails.OrdenDeCompra.OrdenCompraEnviada.MonedaYTotal')
      @include('emails.OrdenDeCompra.OrdenCompraEnviada.MetodoDeEnvio')
      @include('emails.OrdenDeCompra.OrdenCompraEnviada.Comentario')
    </div>

      
  <br>

  <div style="display: table; margin:0 auto;">
   @include('carrito.PaginaDeOrdenFinalizada.Partes.AvisoDeTiempoParaConcretar') 
  </div>

  <br>
  <br>

  <div style="display: table; margin:0 auto;">
   @include('emails.OrdenDeCompra.OrdenCompraEnviada.BotonIrAOrden')
  </div>

  @include('emails.PartesGenerales.FooterEmail')
</div>
 
 