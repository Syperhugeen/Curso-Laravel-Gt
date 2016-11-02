<?php

namespace App\Http\Controllers\Publicas;

use App\Http\Controllers\Controller;
use App\Repositorios\ImgHomeRepo;
use App\Repositorios\EmpresaRepo;
use App\Repositorios\ProyectoRepo;
use Illuminate\Http\Request;
use App\Repositorios\NoticiasRepo;


class Home_Controller extends Controller
{
    protected $ImgHomeRepo;
    protected $EmpresaRepo;
    protected $ProyectoRepo;
    protected $NoticiasRepo;

    public function __construct(ImgHomeRepo  $ImgHomeRepo,
                                EmpresaRepo  $EmpresaRepo, 
                                ProyectoRepo $ProyectoRepo, 
                                NoticiasRepo $NoticiasRepo)
    {
        $this->ImgHomeRepo  = $ImgHomeRepo;
        $this->EmpresaRepo  = $EmpresaRepo;
        $this->ProyectoRepo = $ProyectoRepo;
        $this->NoticiasRepo = $NoticiasRepo;
    }

    public function get_home(Request $Request)
    {
        
        $Empresa      = $this->EmpresaRepo->getEmpresaDatos();
        $Proyectos    = $this->ProyectoRepo->getUltimasEntidadesRegistradasRandomActive($Request, 3);
        $Noticias     = $this->NoticiasRepo->getUltimasEntidadesRegistradasRandomActive($Request,3);

        return view('home.home', compact('Empresa','Proyectos','Noticias'));
    }


}
