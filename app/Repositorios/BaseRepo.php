<?php 
namespace App\Repositorios;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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
      $this->entidad = $this->getEntidad();
    }


    public function find($id)
    {
      return $this->entidad->find($id);
    }

    public function getEntidadActivas()
    {
      return $this->entidad->Active()->get();
    }


     

    /**
     * funcion que va a hacer creada el los repo que extiendan.
     */
    abstract public function getEntidad();



    //setters

    public function setEntidadDato($Entidad,$request,$nombreDelFiel)
    {
      $Entidad->$nombreDelFiel = $request->input($nombreDelFiel);
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
