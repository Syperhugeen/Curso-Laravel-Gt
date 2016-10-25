@include('emails.styleGeneralDeEmails')
@include('emails.Reviews.Partes.Style.ReviewStyle')
<div style="padding: 0; max-width: 700px; ">
 
 <table width="100%" style="margin-top: 15px; margin-bottom: 30px;border-bottom: solid 1px #EFEEEE; ">
   <tbody>
   <tr >
     <td style="font-size: 14px; font-family: arial;">
       Hola {{$user->first_name}} como estás ?, 

       <strong>muchas gracias por la compra que haz hecho recientemente</strong> . 
     
        Te invito a que hagas un pequeño comentario sobre los productos que haz comprado y sobre la atención recibida.

        <br>

        <a href="{{$url}}">
          <div class="botonEmails">
             Click aqui para calificar la opearación
          </div>
        </a>
        
     </td>
   </tr>
    <tr>
     <td style="font-size: 14px; font-family: arial; padding-top: 5px; ">
       Con esos comentarios nos va a estar ayudando a crecer un poquito más. Si tienes un minuto para hacerlo te agradeceremos un monton. 
     </td>
   </tr>
   <tr>
     <td style="font-size: 14px; font-family: arial; padding-top: 5px; ">
       Que tengas un excelente día. 
     </td>
   </tr>
   <tr >
     <td style="font-size: 14px; font-family: arial; padding-top: 5px;">
       Saludos ! 
     </td>
   </tr>
   </tbody>
 </table>


 @include('emails.PartesGenerales.FooterEmail')







</div>