<?php

namespace App\Http\Controllers\Admin_Empresa;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;
use App\Repositorios\ModeloRepo;
use Illuminate\Http\Request;



class Admin_Modelos_Controllers extends Controller
{

  protected $ModeloRepo;

  public function __construct(ModeloRepo $ModeloRepo)
  {
    $this->ModeloRepo = $ModeloRepo;
  }

  //home admin User
  public function get_admin_modelos(Request $Request)
  { 
    $modelos = $this->ModeloRepo->getEntidadesAllPaginadas($Request,3);

    return view('admin.marcas.marcas_home', compact('modelos'));
  }

  //get Crear admin User
  public function get_admin_modelos_crear()
  {  
    return view('admin.marcas.marcas_crear');
  }

  //set Crear admin User
  public function set_admin_modelos_crear(Request $Request)
  {
      //propiedades para crear
      $Propiedades = ['name','description','estado'];

      //traigo la entidad
      $modelo = $this->ModeloRepo->getEntidad();

      //grabo todo las propiedades
      $this->ModeloRepo->setEntidadDato($modelo,$Request,$Propiedades);
    
      //para la imagen
      $this->ModeloRepo->setImagen($modelo,$Request,'img','Modelos/', $modelo->name,'.png'); 

      return redirect()->route('get_admin_modelos')->with('alert', 'Modelo Creado Correctamente');    
  }

  //get edit admin marca
  public function get_admin_modelos_editar($id)
  {
    $modelo = $this->ModeloRepo->find($id);

    return view('admin.marcas.marcas_editar',compact('modelo'));
  }

  //set edit admin marca
  public function set_admin_modelos_editar($id,Request $Request)
  {
    $modelo = $this->ModeloRepo->find($id);    

    //propiedades para crear
    $Propiedades = ['name','description','estado'];    

    //grabo todo las propiedades
    $this->ModeloRepo->setEntidadDato($modelo,$Request,$Propiedades);

    $this->ModeloRepo->setImagen($modelo,$Request,'img','Modelos/', $modelo->name,'.png');

    return redirect()->route('get_admin_modelos')->with('alert', 'Modelo Editado Correctamente');  
  }

  
}