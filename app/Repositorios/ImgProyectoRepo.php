<?php 

namespace App\Repositorios;

use App\Entidades\ImgProyecto;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

/**
* Repositorio de consultas a la base de datos User
*/
class ImgProyectoRepo extends BaseRepo
{
  
  public function getEntidad()
  {
    return new ImgProyecto();
  }


  

  public function setDatos($proyecto_id,$request)
  {
    $Proyecto_img = $this->getEntidad();    

    $Proyecto_img->proyecto_id = $proyecto_id;
    $Proyecto_img->estado = 'si';

    $Proyecto_img->save();

    $this->setImagen($Proyecto_img,$request,'img','ProyectosImagenesAdicionales/', $Proyecto_img->id,'.png');  

    $Proyecto_img->save();   
  }


   public function setAdminEdit($img,$request)
  {
    
    //propiedades para crear
    $Propiedades =  ['img','name','description','url','estado'];

    $this->setEntidadDato($img,$request,$Propiedades);

    $img->save();

    $this->setImagen($img,$request,'img','HomeImagenes/', $img->name,'.png');  

    $img->save();

  }
}