<?php 
namespace App\Repositorios;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Repositorios\Emails\EmailsRepo;

/**
* Contiene metodos comunes para todo los repositorios
*/
abstract class BaseRepo 
{
    /**
     * entidad que ingresamos por parametro
     */
    protected $entidad;
    

    public function __construct()
    {
      
      $this->entidad      = $this->getEntidad();
    }

   public function getEmailsRepo()
   {
    return new EmailsRepo();
   }

    public function find($id)
    {
      return $this->entidad->find($id);
    }

     public function destroy_entidad($id)
    {
      $entidad_a_borrar = $this->find($id);
      $entidad_a_borrar->delete();
    }

    /**
     * Entidades Activas Paginadas
     */
    public function getEntidadActivasPaginadas($request,$paginacion)
    {
      return $this->entidad
                  ->name($request->get('name')) 
                  ->active()               
                  ->orderBy('id','desc')
                  ->paginate($paginacion);
    }

    /**
     * Entidades All ya paginadas Paginadas
     */
    public function getEntidadesAllPaginadas($request,$paginacion)
    {

    return $this->entidad
                ->name($request->get('name'))                
                ->orderBy('id','desc')
                ->paginate($paginacion);
  
    }


    /**
     * Ultimas Entidades Activas
     */
    public function getUltimasEntidadesRegistradasRandomActive($request,$cantidad)
    {

      $cantidad_de_entidades =  $this->entidad->active()->get()->count();

      if($cantidad_de_entidades >= $cantidad)
      {
        $entidades = $this->entidad
                          ->name($request->get('name'))                
                          ->active()
                          ->orderBy('id','DESC')
                          ->take($cantidad)
                          ->get();
      }
      else
      {
        $entidades = $this->entidad
                          ->name($request->get('name'))                
                          ->active()
                          ->orderBy('id','DESC')
                          ->get();
      }  

    return $entidades;
  
    }

     

    /**
     * funcion que va a hacer creada el los repo que extiendan.
     */
    abstract public function getEntidad();



    //setters

    public function setEntidadDato($Entidad,$request,$Propiedades)
    {
        foreach ($Propiedades as $Propiedad) 
        {
          if($request->input($Propiedad) != '')
          {            
           $Entidad->$Propiedad = $request->input($Propiedad);
          }
          else
          {
           $Entidad->$Propiedad = null;
          }
        } 

        $Entidad->save();
     
    }


    public function setImagen($Entidad,$request,$nombreDelCampoForm,$carpetaDelArchivo,$nombreDelArchivo,$ExtensionDelArchivo)
    {
      if($request->hasFile($nombreDelCampoForm))
       {
         //obtenemos el campo file definido en el formulario
         $file = $request->file($nombreDelCampoForm);
         
         //nombre del Archico / Carpeta Incluido
         $nombre = $carpetaDelArchivo.$nombreDelArchivo.$ExtensionDelArchivo;
         $Entidad->$nombreDelCampoForm= $nombre;
         $Entidad->save();
         
         
         //indicamos que queremos guardar un nuevo archivo en el disco local
         Storage::disk('local')->put($nombre,  File::get($file));
       }
    }
    

}   
