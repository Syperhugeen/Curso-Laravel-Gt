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


        //array_de_eventos 
        $array_de_eventos_id = [];

        foreach($coleccion as $Evento_de_marca)
        {
          if($Evento_de_marca->evento->estado == 'si')
          {
             array_push($array_de_eventos_id,$Evento_de_marca->evento_id);
          }
        }
                        
      
        //quito los elementos duplicados
       return array_unique($array_de_eventos_id);



      /* //hago la consulta segun el array de eventos id
       return $this->getEntidad()
                   ->whereIn('id',$array_de_eventos_id)
                   ->orderBy('created_at',$orden)  
                   ->paginate($paginacion);*/
       

       

        
    }


  //setters//////////////////////////////////////////////////////////////////////

 
  
 


  
}