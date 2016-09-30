<?php 

namespace App\Repositorios\Emails;

use Styde\Entidades\OrdenDeCompra;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Styde\Repositorios\UserRepo;
use Styde\Repositorios\ProductoRepo;
use Styde\Repositorios\ProductosDeOrdenRepo;
use Styde\Repositorios\WorldmasterDatosRepo;
use Styde\Repositorios\ReviewProductoRepo;
use Styde\Repositorios\ReviewWorldmasterRepo;

/*para que un email se envie el remitente del usuario debe estar en la base de datos de los emails*/

/**
* Repositorio de consultas a la base de datos User
*/
class EmailsRepo 
{
  protected $UserRepo;

 


/**
 * Lo Envio cuando Finalizo una Orden
 */
public function EmailNotificacionDeReviews($user)
{

        //nuemor aleatorio para variar texto en vista
        $numeroRandom = mt_rand(0, 2);

        //la url de la pagina del usuario de las notificaciones
        $url=route('calificar_index',$user->id );

        Mail::send('emails.Reviews.EmailReview' ,
               //con esta funcion le envia los datos a la vista.
               compact('user','numeroRandom','url' )   ,
               function($m) use ($user) 
               {
                 $m->to($user->email , $user->name)->subject('¿ cómo te fue con la compra en Worldmaster ?');
               }
        );

}

/**
 * Lo Envio de Recordatoria con Cron de los Reviews de Productos Pendientes
 */
public function EmailRecordatorioDeReviews($user,$producto)
{

        //nuemor aleatorio para variar texto en vista
        $numeroRandom = mt_rand(0, 2);

        //la url de la pagina del usuario de las notificaciones
        $url=route('calificar_index',$user->id );

        Mail::send('emails.Reviews.EmailReview' ,
               //con esta funcion le envia los datos a la vista.
               compact('user','numeroRandom','url' )   ,
               function($m) use ($user,$producto) 
               {
                 $m->to($user->email , $user->name)
                   ->subject('¿ cómo te fue con la compra de '.$producto->name.' ?');
               }
        );

}

/**
 * Lo Envio cuando Cancelo la Orden
 */
public function EmailCuandoCanceloOrden($orden)
{

        //nuemor aleatorio para variar texto en vista
        $numeroRandom = mt_rand(0, 2);

        $user = $orden->user;
        //la url de la pagina del usuario de las notificaciones
        $url  = route( 'ProcesoCompra_PaginaDeOrdenDeCompraAlTerminar',$orden->id);

        Mail::send('emails.OrdenDeCompra.Cancelada' ,
               //con esta funcion le envia los datos a la vista.
               compact('user','numeroRandom','url','orden' )   ,
               function($m) use ($user) 
               {
                 $m->from('ventas@worldmaster.com.uy', 'Worldmaster');
                 $m->to($user->email , $user->name)->subject('Tu orden de compra se ha cancelado');
               }
        );

}


    /**
     * Funcion De Envio de Email cuando se registra o para Reenviar
     */
    public function EnviarEmailDeConfirmacion($user)
    {
        $url = route('confirmation' , [ 'token' => $user->registration_token ]);
        
        /**
         * Le envio el email con el token para que se valide el registro.
         */
         Mail::send('emails.registration' ,

                   //con esta funcion le envia los datos a la vista.
                   compact('user' , 'url')       ,
                   function($m) use ($user) 
                   {
                     $m->from('ventas@worldmaster.com.uy', 'Worldmaster');
                     $m->to($user->email , $user->name)->subject($user->first_name.' Activa tu cuenta en Worldmaster ');
                   }
        );

    }

    


    /**
     * Email De Contacto
     */
    public function EnvioEmailDeContacto($nombre,$direccionEmail,$consulta)
    {
         Mail::send('emails.Contacto.contacto' ,

                   //con esta funcion le envia los datos a la vista.
                   compact('nombre' , 'direccionEmail','consulta')       ,
                   function($m) use ($nombre,$direccionEmail,$consulta) 
                   {

                     $m->from($direccionEmail, $nombre);

                     $m->to( 'ventas@worldmaster.com.uy', 'Worldmaster Ventas')->subject('Consulta de '.$nombre );
                   }
        );

    }

    /**
     * Email De Contacto De usuario Conectado
     */
    public function EnvioEmailDeContactoUsuarioAuth($user,$consulta)
    {
         Mail::send('emails.Contacto.contenidoPUserAuth' ,

                   //con esta funcion le envia los datos a la vista.
                   compact('user','consulta')       ,
                   function($m) use ($user,$consulta) 
                   {

                     $m->from($user->email, $user->name);

                     $m->to( 'ventas@worldmaster.com.uy', 'Worldmaster Ventas')->subject('Consulta de '.$user->name );
                   }
        );

    }

      /**
       * Este Email lo envio cuando se agota un producto
       */
      public function EmailAvisarQueArticuloCeroStock($producto)
      {
        Mail::send('emails.AvisosWorldmaster.SeAgotoProducto' ,

                   //con esta funcion le envia los datos a la vista.
                   compact('producto')       ,
                   function($m) use ($producto) 
                   {
                     $m->from('ventas@worldmaster.com.uy', 'Worldmaster');
                     $m->to( 'ventas@worldmaster.com.uy', 'Worldmaster Ventas')->subject('Se Agoto '. $producto->name .' ' .$producto->id);
                   }
        );  
      }



      /**
       * Este Email lo envio cuando hace una compra
       */
      public function EmailEnviarAlClienteOrdenDeCompra($Orden,$Worldmaster)
      {
        Mail::send('emails.OrdenDeCompra.OrdenCompraEnviada.orden' ,

                   //con esta funcion le envia los datos a la vista.
                   compact('Orden','Worldmaster')       ,
                   function($m) use ($Orden) 
                   {
                     $m->from('ventas@worldmaster.com.uy', 'Worldmaster');
                     $m->to( $Orden->user->email,$Orden->user->name)->subject(
                       'Tu Compra en Worldmaster Nº '.
                      $Orden->id);
                   }
        );  
      }


      /**
       * Este Email lo envio a vendedores de Worldmaster
       */
      public function EmailEnviarAdminOrdenDeCompra($Orden,$Worldmaster)
      {
        Mail::send('emails.OrdenDeCompra.OrdenCompraEnviada.orden' ,

                   //con esta funcion le envia los datos a la vista.
                   compact('Orden','Worldmaster')       ,
                   function($m) use ($Orden) 
                   {
                     $m->from($Orden->user->email, $Orden->user->name);
                     $m->to( 'ventas@worldmaster.com.uy','Worldmaster Ventas')->subject(
                       
                      ' Orden de Compra Nº '.
                      $Orden->id . 
                      ' de '  .$Orden->user->name);
                   }
        );  
      }

      

      /**
       * Cuando respondemos la pregunta
       */
      public function EnviarEmailUserConRespuestaASuPregunta($respuesta, $user)
      {
        Mail::send('emails.RespuesAPregunta.respuesta' ,

                   //con esta funcion le envia los datos a la vista.
                   compact('respuesta','user')       ,
                   function($m) use ($user) 
                   {
                     
                     $m->to( $user->email,$user->name)->subject('Respuesta a tu pregunta en Worldmaster.com.uy');
                   }
        ); 
      }


      /**
       * Envio De Novedades, tanto User Como Newslleter Users
       */
      public function EnvioDeNovedadesPublicitarias($user,$ProductosNewsleter,$Subject,$Texto1,$Texto2)

      {
          $ProductosNewsleter =serialize($ProductosNewsleter);
               
          Mail::send('emails.newslleter.envioDeProductos', 
          compact('user','ProductosNewsleter','Texto1','Texto2'), 
          function ($message) use ($user,$Subject )
          {
            
            $message->from('noresponder@worldmaster.com.uy', 'Worldmaster - Newslleter');
            $message->to($user->email, $user->name)->subject($Subject);

          }
          );


      }

















  


}