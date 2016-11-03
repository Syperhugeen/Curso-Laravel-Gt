


<div class="estilo-texto-general">
  
  Hola {{ $user->name}} , recupera tu contraseña presionando en el siguiente enlace... 

</div>

 <br>
 <br>
 <a  href="{{ route('password_recet_route_get',$token)  }}"> 
   <div class="botonEmails">Click aqui para resetear tu contraseña </div> 
 </a> 

