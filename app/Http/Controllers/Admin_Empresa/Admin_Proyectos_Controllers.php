<?php

namespace App\Http\Controllers\Admin_Empresa;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositorios\ProyectoRepo;
use App\Repositorios\ImgProyectoRepo;




class Admin_Proyectos_Controllers extends Controller
{

  protected $ProyectoRepo;
  protected $ImgProyectoRepo;

  public function __construct(ProyectoRepo    $ProyectoRepo, 
                              ImgProyectoRepo $ImgProyectoRepo)
  {
    $this->ProyectoRepo    =  $ProyectoRepo;
    $this->ImgProyectoRepo =  $ImgProyectoRepo;
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

  //set edit admin proyecto
  public function set_admin_proyectos_editar($id,Request $Request)
  {
    $proyecto = $this->ProyectoRepo->find($id);

    $this->ProyectoRepo->setDatosEdit($proyecto,$Request); 

    return redirect()->route('get_admin_proyectos')->with('alert', 'Proyecto Editado Correctamente');  
  }

  //subo img adicional
  public function set_admin_proyectos_img($id_proyecto,Request $Request)
  {
      $this->ImgProyectoRepo->setDatos($id_proyecto,$Request);
      return redirect()->back()->with('alert', 'Imagen Subida Correctamente');
  }
}