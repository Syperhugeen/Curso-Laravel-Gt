<?php 

namespace App\Repositorios;

use App\Entidades\Proyecto;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

/**
* Repositorio de consultas a la base de datos User
*/
class ProyectoRepo extends BaseRepo
{
  
  public function getEntidad()
  {
    return new Proyecto();
  }


 public function getProyectosAll($request)
  {
    return $this->getEntidad()
                ->name($request->get('name'))                
                ->orderBy('id','desc')
                ->paginate(30);
  }
  

  public function setDatos($request)
  {
    $Proyecto    = $this->getEntidad();

    $Proyecto->estado = 'si';

    $Proyecto->save();

    $Propiedades = ['name','description'];
    
    $this->setEntidadDato($Proyecto,$request,$Propiedades); 

    $this->setImagen($Proyecto,$request,'img','ProyectoImagenPrincipal/',$Proyecto->id ,'.png');  

    $Proyecto->save();   
  }


  public function setDatosEdit($Proyecto,$request)
  {    

    $Propiedades = ['name','description','estado'];
    
    $this->setEntidadDato($Proyecto,$request,$Propiedades); 

    $this->setImagen($Proyecto,$request,'img','ProyectoImagenPrincipal/',$Proyecto->id ,'.png');  

    $Proyecto->save();   
  }
}