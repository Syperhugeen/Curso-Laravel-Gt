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


  public function get_imagen_principal_de_proyecto_especifico($proyecto_id)
  {
    return $this->getEntidad()
                ->where('proyecto_id',$proyecto_id)
                ->where('foto_principal','si')
                ->get();
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


  public function cambio_a_imagen_principal($id_img)
  {
    $imagen = $this->find($id_img);

    $imagen_pricipal = $this->get_imagen_principal_de_proyecto_especifico($imagen->proyecto_id);

    //cuento si es que hay
    if($imagen_pricipal->count() > 0)
    {
      //agarro la imagen
      $imagen_principal_efectiva = $imagen_pricipal->first();
      $imagen_principal_efectiva->foto_principal = null;
      $imagen_principal_efectiva->save();


      //le indico que es la imagen pricnipal 
      $imagen->foto_principal = 'si';
      $imagen->save();
    }
  }
}