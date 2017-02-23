<?php

namespace App\Http\Controllers\Publicas;

use App\Http\Controllers\Controller;
use App\Repositorios\ImgHomeRepo;
use App\Repositorios\EmpresaRepo;
use App\Repositorios\ProyectoRepo;
use Illuminate\Http\Request;
use App\Repositorios\NoticiasRepo;
use App\Repositorios\MarcaRepo;


class Home_Public_Controller extends Controller
{
    protected $ImgHomeRepo;
    protected $EmpresaRepo;
    protected $ProyectoRepo;
    protected $NoticiasRepo;
    protected $MarcaRepo;

    public function __construct(ImgHomeRepo  $ImgHomeRepo,
                                EmpresaRepo  $EmpresaRepo, 
                                ProyectoRepo $ProyectoRepo, 
                                NoticiasRepo $NoticiasRepo, 
                                MarcaRepo    $MarcaRepo)
    {
        $this->ImgHomeRepo  = $ImgHomeRepo;
        $this->EmpresaRepo  = $EmpresaRepo;
        $this->ProyectoRepo = $ProyectoRepo;
        $this->NoticiasRepo = $NoticiasRepo;
        $this->MarcaRepo    = $MarcaRepo;
    }

    public function get_home(Request $Request)
    {
        
        $Empresa      = $this->EmpresaRepo->getEmpresaDatos();
        $Proyectos    = $this->ProyectoRepo->getUltimasEntidadesRegistradasRandomActive($Request, 2);
        $Noticias     = $this->NoticiasRepo->getUltimasEntidadesRegistradasRandomActive($Request,2);
        $Marcas       = $this->MarcaRepo->getUltimasEntidadesRegistradasRandomActive($Request,2);

        return view('paginas.home.home', compact('Empresa','Proyectos','Noticias','Marcas'));
    }


}
