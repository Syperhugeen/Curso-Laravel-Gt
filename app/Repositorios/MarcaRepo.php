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

  /**
   * son las marcas para mostrar en la home
   */
  public function getMarcasHome()
  {
    return $this->getEntidad()
                ->where('rank', 3 )
                ->active()
                ->get()
                ->random(6);
  }


  /**
   * son las marcas para admin
   */
  public function getMarcasParaAdminOrdenadasAlfabeticamente($request,$paginacion)
  {
      return $this->getEntidad()
                  ->name($request->get('name'))                                 
                  ->orderBy('name','asc')
                  ->paginate($paginacion);
  }


  //setters//////////////////////////////////////////////////////////////////////

 

 


  
}
