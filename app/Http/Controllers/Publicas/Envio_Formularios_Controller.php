<?php

namespace App\Http\Controllers\Publicas;

use App\Http\Controllers\Controller;
use App\Repositorios\EmpresaRepo;
use Illuminate\Http\Request;
use App\Repositorios\Emails\EmailsRepo;



class Envio_Formularios_Controller extends Controller
{
  
    protected $EmpresaRepo;
    protected $EmailsRepo;
   

    public function __construct(EmpresaRepo  $EmpresaRepo,
                                EmailsRepo   $EmailsRepo)
    {
        
        $this->EmpresaRepo  = $EmpresaRepo;
        $this->EmailsRepo   = $EmailsRepo;
    }

    public function post_contacto_form(Request $Request)
    {
        
        
        return view('home.home', compact('Empresa','Proyectos','Noticias'));
    }


}
