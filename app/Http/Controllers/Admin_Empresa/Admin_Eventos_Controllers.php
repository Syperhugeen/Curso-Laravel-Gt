<?php

namespace App\Http\Controllers\Admin_Empresa;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositorios\EventoRepo;
use App\Repositorios\ImgProyectoRepo;




class Admin_Eventos_Controllers extends Controller
{

  protected $EventoRepo;
  protected $ImgProyectoRepo;

  public function __construct(EventoRepo    $EventoRepo, 
                              ImgProyectoRepo $ImgProyectoRepo)
  {
    $this->EventoRepo    =  $EventoRepo;
    $this->ImgProyectoRepo =  $ImgProyectoRepo;
  }

  public function get_admin_eventos(Request $Request)
  {

    $Eventos = $this->EventoRepo->getEntidadesAllPaginadas($Request,20);

    return view('admin.eventos.eventos_home', compact('Eventos'));
  }



  //get Crear 
  public function get_admin_eventos_crear()
  {  
    return view('admin.eventos.eventos_crear');
  }



  //set 
  public function set_admin_eventos_crear(Request $Request)
  {     
      
      $Evento    = $this->EventoRepo->getEntidad();

      $Evento->estado = 'si';      

      $Propiedades = ['name','description','fecha','ubicacion'];
      
      $this->EventoRepo->setEntidadDato($Evento,$Request,$Propiedades);

      return redirect()->route('get_admin_eventos')->with('alert', 'Evento creado correctamente');
    
  }


  //get edit admin 
  public function get_admin_eventos_editar($id)
  {
    $Evento = $this->EventoRepo->find($id);

    return view('admin.eventos.eventos_editar',compact('Evento'));
  }

  //set edit admin 
  public function set_admin_eventos_editar($id,Request $Request)
  {
    $Evento = $this->EventoRepo->find($id);

    $Propiedades = ['name','description','estado','fecha','ubicacion'];
      
    $this->EventoRepo->setEntidadDato($Evento,$Request,$Propiedades);

    return redirect()->route('get_admin_eventos')->with('alert', 'Evento editado correctamente');  
  }

  //subo img adicional
  public function set_admin_eventos_img($id_proyecto,Request $Request)
  {
      $this->ImgProyectoRepo->setDatos($id_proyecto,$Request);
      return redirect()->back()->with('alert', 'Imagen Subida Correctamente');
  }


  //elimino img adicional
  public function delete_admin_eventos_img($id_img)
  {
      $this->ImgProyectoRepo->destroy_entidad($id_img);

      return redirect()->back()->with('alert-rojo', 'Imagen Eliminada');
  }

  //fijo como imagen principal 
  public function establecer_como_imagen_principal($id_img)
  {
      $this->ImgProyectoRepo->cambio_a_imagen_principal($id_img);

      return redirect()->back()->with('alert', 'Imagen principal cambiada');
  }

  
}