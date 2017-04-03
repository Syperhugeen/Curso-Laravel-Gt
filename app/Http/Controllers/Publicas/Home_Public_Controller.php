<?php

namespace App\Http\Controllers\Publicas;

use App\Http\Controllers\Controller;
use App\Repositorios\ImgHomeRepo;
use App\Repositorios\EmpresaRepo;
use App\Repositorios\ProyectoRepo;
use Illuminate\Http\Request;
use App\Repositorios\NoticiasRepo;
use App\Repositorios\MarcaRepo;
use App\Repositorios\EventoRepo;


class Home_Public_Controller extends Controller
{
    protected $ImgHomeRepo;
    protected $EmpresaRepo;
    protected $EventoRepo;  
    protected $NoticiasRepo;
    protected $MarcaRepo;

    public function __construct(ImgHomeRepo  $ImgHomeRepo,
                                EmpresaRepo  $EmpresaRepo, 
                                EventoRepo   $EventoRepo,   
                                NoticiasRepo $NoticiasRepo, 
                                MarcaRepo    $MarcaRepo)
    {
        $this->ImgHomeRepo  = $ImgHomeRepo;
        $this->EmpresaRepo  = $EmpresaRepo;
        $this->EventoRepo   = $EventoRepo;  
        $this->NoticiasRepo = $NoticiasRepo;
        $this->MarcaRepo    = $MarcaRepo;
    }

    public function get_home(Request $Request)
    {
        
        $Empresa               = $this->EmpresaRepo->getEmpresaDatos();        
        $Marcas                = $this->MarcaRepo->getMarcasHome();
        $UltimoEvento          = $this->EventoRepo->getUltimoEvento();
        $PenultimoEvento       = $this->EventoRepo->getPenultimoEvento();



        return view('paginas.home.home', compact('Empresa','Marcas','UltimoEvento','PenultimoEvento'));
    }


}
