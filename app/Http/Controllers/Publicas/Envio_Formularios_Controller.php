<?php

namespace App\Http\Controllers\Publicas;

use App\Http\Controllers\Controller;
use App\Repositorios\EmpresaRepo;
use Illuminate\Http\Request;
use App\Repositorios\Emails\EmailsRepo;
use App\Repositorios\Emails\EmailsEspecificosDePaginasRepo;;
use App\Managers\envio_solicitud_trabajo_manager;



class Envio_Formularios_Controller extends Controller
{
  
    protected $EmpresaRepo;
    protected $EmailsRepo;
    protected $EmailsEspecificosDePaginasRepo;
   

    public function __construct(EmpresaRepo                    $EmpresaRepo,
                                EmailsRepo                     $EmailsRepo,
                                EmailsEspecificosDePaginasRepo $EmailsEspecificosDePaginasRepo)
    {
        
        $this->EmpresaRepo                    = $EmpresaRepo;
        $this->EmailsRepo                     = $EmailsRepo;
        $this->EmailsEspecificosDePaginasRepo = $EmailsEspecificosDePaginasRepo;
    }

    public function post_contacto_form(Request $Request)
    {
        
        
        return view('home.home', compact('Empresa','Proyectos','Noticias'));
    }

    public function post_envio_solicitud_trabajo_form(Request $Request)
    {
        
        $entidad = '';
        $manager = new envio_solicitud_trabajo_manager($entidad,$Request->all());


        if ($manager->isValid())
        {
         
         //envio el email de la solciitud de trabajo
         $this->EmailsEspecificosDePaginasRepo->EnviarEmailDeSolicitudDeTrabajo($Request);

         return redirect()->route('get_home')
                          ->with('alert' , 'Solicitud de presupuesto enviada correctamente. En breve nos contactaremos con usted. ');      
        }  
        
        return view('home.home', compact('Empresa','Proyectos','Noticias'));
    }


}
