<?php

namespace App\Http\Controllers\Publicas;

use App\Http\Controllers\Controller;
use App\Repositorios\ImgHomeRepo;
use App\Repositorios\EmpresaRepo;
use App\Repositorios\ProyectoRepo;


class Home_Controller extends Controller
{
    protected $ImgHomeRepo;
    protected $EmpresaRepo;
    protected $ProyectoRepo;

    public function __construct(ImgHomeRepo  $ImgHomeRepo,
                                EmpresaRepo  $EmpresaRepo, 
                                ProyectoRepo $ProyectoRepo)
    {
        $this->ImgHomeRepo  = $ImgHomeRepo;
        $this->EmpresaRepo  = $EmpresaRepo;
        $this->ProyectoRepo = $ProyectoRepo;
    }

    public function get_home()
    {
        $Imagenes     = $this->ImgHomeRepo->getEntidadActivas();
        $Empresa      = $this->EmpresaRepo->getEmpresaDatos();
        $Proyectos    = $this->ProyectoRepo->getProyectosActivos();

        return view('home.home', compact('Imagenes','Empresa','Proyectos'));
    }


}
