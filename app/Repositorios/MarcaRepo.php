<?php 

namespace App\Repositorios;

use App\Entidades\Marca;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

/**
* Repositorio de consultas a la base de datos User
*/
class MarcaRepo extends BaseRepo
{
  
  public function getEntidad()
  {
    return new Marca();
  }

  //guetters/////////////////////////////////////////////////////////////////////

  public function getMarcasAll($request)
  {
    return $this->getEntidad()
                ->name($request->get('name'))                
                ->orderBy('id','desc')
                ->paginate(30);
  }


  //setters//////////////////////////////////////////////////////////////////////

  public function setMarcaAdmin($request)
  {
    $marca           = $this->getEntidad();   

    //propiedades para crear
    $Propiedades = ['name','description','estado'];

    $this->setEntidadDato($marca,$request,$Propiedades);

    $marca->save(); 

    $this->setImagen($marca,$request,'img','Marcas/', $marca->name,'.png');

    $marca->save(); 

  }

  public function setMarcaAdminEdit($marca,$request)
  {
    
    //propiedades para crear
    $Propiedades = ['name','description','estado'];

    //
    $this->setEntidadDato($marca,$request,$Propiedades);

    $this->setImagen($marca,$request,'img','Marcas/', $marca->name,'.png');

    $marca->save(); 

  }


  
}
