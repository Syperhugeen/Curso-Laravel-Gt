<?php

namespace App\Http\Controllers\Admin_Empresa;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositorios\ProyectoRepo;




class Admin_Proyectos_Controllers extends Controller
{

  protected $ProyectoRepo;

  public function __construct(ProyectoRepo $ProyectoRepo)
  {
    $this->ProyectoRepo   =  $ProyectoRepo;
  }

  public function get_admin_proyectos(Request $Request)
  {

    $proyectos = $this->ProyectoRepo->getProyectosAll($Request);

    return view('admin.proyectos.proyectos_home', compact('proyectos'));
  }



  //get Crear 
  public function get_admin_proyectos_crear()
  {  
    return view('admin.proyectos.proyectos_crear');
  }



  //set 
  public function set_admin_proyectos_crear(Request $Request)
  {     
      
     $this->ProyectoRepo->setDatos($Request);

     return redirect()->route('get_admin_proyectos')->with('alert', 'Proyecto Creado Correctamente');
    
  }


  //get edit admin proyecto
  public function get_admin_proyectos_editar($id)
  {
    $proyecto = $this->ProyectoRepo->find($id);

    return view('admin.proyectos.proyectos_editar',compact('proyecto'));
  }

  //set edit admin marca
  public function set_admin_proyectos_editar($id,Request $Request)
  {
    $proyecto = $this->ProyectoRepo->find($id);

    $this->ProyectoRepo->setDatosEdit($proyecto,$Request); 

    return redirect()->route('get_admin_proyectos')->with('alert', 'Proyecto Editado Correctamente');  
  }
}