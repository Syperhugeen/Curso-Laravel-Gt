<?php 

namespace App\Repositorios;

use App\Entidades\Evento;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Input;
use App\Repositorios\MarcaRepo;
use App\Repositorios\Marca_de_eventoRepo;

/**
* Repositorio de consultas a la base de datos User
*/
class EventoRepo extends BaseRepo
{
  
  public function getEntidad()
  {
    return new Evento();
  }

  public function getMarcaRepo()
  {
    return new MarcaRepo();
  }

  public function getMarca_de_eventoRepo()
  {
    return new Marca_de_eventoRepo();
  }



 
  /**
   *  Devuelve el ultimo evento
   */
  public function getUltimoEvento()
  {
    return $this->getEntidad()->active()->orderBy('fecha', 'desc')->get()->first();
  }

  /**
    *  Devulve el Penultimo evento
    */  
  public function getPenultimoEvento()
  {
      return $this->getEntidad()->active()->orderBy('fecha', 'desc')->take(2)->get()->last();
  }

  public function getEventosArrayDeEventosID($array_eventos_id,$pagination)
  {
    return $this->getEntidad()
                ->whereIn('id', $array_eventos_id)  
                ->active() 
                ->orderBy('fecha', 'desc')
                ->paginate($pagination);
  }

  public function getEventosParaAdminPanel($orden,$paginacion,$request)
  {
        //primero busco los evento por el nombre y traigo la coleccion
        $coleccion = $this->entidad                          
                          ->name($request->get('name'))                                                    
                          ->get();

        $array_de_eventos_id = [];
        
        foreach($coleccion as $coleccion)
        {
          array_push($array_de_eventos_id,$coleccion->id);
        }

        //traigo las marcas que coinciden con la busqued
        $Marcas = $this->getMarcaRepo()->getEntidad()->name($request->get('name'))->get();        
        
        //busco los eventos que contengan esas marcas
        foreach($Marcas as $Marca) 
        {
          $Eventos_de_marca = $this->getMarca_de_eventoRepo()->getEntidad()->where('marca_id',$Marca->id)->get();

          foreach($Eventos_de_marca as $coleccion)
          {
           array_push($array_de_eventos_id,$coleccion->evento_id);
          }
        }    


       //quito los elementos duplicados
       $array_de_eventos_id = array_unique($array_de_eventos_id);

       //hago la consulta segun el array de eventos id
       return $this->getEntidad()
                   ->whereIn('id',$array_de_eventos_id)
                   ->orderBy('fecha',$orden)  
                   ->paginate($paginacion);
        
  }
  
}