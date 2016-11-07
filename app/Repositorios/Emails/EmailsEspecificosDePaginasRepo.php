<?php 

namespace App\Repositorios\Emails;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Repositorios\EmpresaRepo;



/*para que un email se envie el remitente del usuario debe estar en la base de datos de los emails*/

/**
* Repositorio de consultas a la base de datos User
*/
class EmailsEspecificosDePaginasRepo 
{
    public function getEmpresa()
    {
      $EmpresaDatos =  new EmpresaRepo();
      
      return $EmpresaDatos->getEmpresaDatos();

    }


    /**
     * Email De Contacto De usuario Conectado
     */
    public function EnviarEmailDeSolicitudDeTrabajo($Request)
    {
                $nombre  = $Request->get('name');
                $email   = $Request->get('email');
                $mensaje = $Request->get('mensaje');
                $archivo = $Request->get('file');

         Mail::send('emails.solicitud_cotizacion' ,                    

                   //con esta funcion le envia los datos a la vista.
                   compact('nombre','email','mensaje')       ,
                   function($m) use ($nombre,$email,$archivo) 
                   {

                     $m->from($email, $nombre);

                     $m->attach($archivo);

                     $m->to( $this->getEmpresa()
                                  ->email, 
                             $this->getEmpresa()
                                  ->name)->subject('Solicitud de cotización de '.$nombre );
                   }
        );

    }
}