<?php 

namespace App\Repositorios;

use App\Entidades\Marca_de_evento;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Input;

/**
* Repositorio de consultas a la base de datos User
*/
class Marca_de_eventoRepo extends BaseRepo
{
  
  public function getEntidad()
  {
    return new Marca_de_evento();
  }

  //guetters/////////////////////////////////////////////////////////////////////

  public function crearNuevaMarcaDeEvento($id_evento,$id_marca)
  {
    $Marca_Evento = $this->getEntidad();
    $Marca_Evento->marca_id  = $id_marca;
    $Marca_Evento->evento_id = $id_evento;
    $Marca_Evento->save();
  }

  public function getMarca_de_eventoDeEstaMarca($id_marca)
  {
    return $this->getEntidad()->where('marca_id',$id_marca)->get();
  }

   public function getEventosDeEstaMarcaActivosYPaginados($atributo,$valor_atributo,$orden,$paginacion,$request)
    {
        $coleccion = $this->entidad
                          ->where($atributo,$valor_atributo)  
                          ->orderBy('id',$orden)                           
                          ->get();

        //filtro las que no estan activas                      
        foreach($coleccion as $item)  
        {
          if($item->evento->estado != 'si')
          {
            $coleccion->forget($item->id);
          }
        } 

        $page    = Input::get('page', 1); // Get the ?page=1 from the url
        $perPage = $paginacion; // Number of items per page
        $offset  = ($page * $perPage) - $perPage;

        return new LengthAwarePaginator(
                                        array_slice($coleccion->toArray(), $offset, $perPage, true), // Only grab the items we need
                                        count($coleccion), // Total items
                                        $perPage, // Items per page
                                        $page, // Current page
                                        ['path' => $request->url(), 'query' => $request->query()]); // We need this so we can keep all old query parameters from the url  ) 

        
    }


  //setters//////////////////////////////////////////////////////////////////////

 
  
 


  
}