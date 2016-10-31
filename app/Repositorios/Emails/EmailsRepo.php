<?php 

namespace App\Repositorios\Emails;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Repositorios\EmpresaRepo;



/*para que un email se envie el remitente del usuario debe estar en la base de datos de los emails*/

/**
* Repositorio de consultas a la base de datos User
*/
class EmailsRepo 
{



    public function getEmpresa()
    {
      return new EmpresaRepo();
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
                     $m->from($this->getEmpresa()
                                   ->getEmpresaDatos()
                                   ->email_no_reply, 

                                    $this->getEmpresa()
                                         ->getEmpresaDatos()
                                         ->name);
                     $m->to($user->email , $user->name)->subject($user->first_name.' Activa tu cuenta en ' .
                        $this->getEmpresa()
                             ->getEmpresaDatos()
                             ->name );
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

  




  


}