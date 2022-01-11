<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class provinciasModel extends Model
{
    use HasFactory;

    protected $table = 'provincias';
    function __construct(){
        
    }

    //devuelve la lista de provincias
    function lista_provincias(){
        $provincias = provinciasModel::all();
        //echo '<pre>',var_dump($personas);
        //die;
        return $provincias;
    }
    //agrega la provincia
    function agregarProvincia($provincia){
        $provinciaResult = provinciasModel::insert($provincia);
        if ($provinciaResult == true) {
            return true;
        }
        else {
            return false;
        }
    }

    //obtiene solo 1 provincia
    function obtenerProvincia($id){
        $result = provinciasModel::where('id', $id)->get();
        return $result;
    }

    function borrarProvincia($id){
        $result = provinciasModel::where('id', $id)->delete();
        if ($result == true) {
            return true;
        }
        else {
            return false;
        }
    }

    //actualizar la provincia
    function actualizar($provincia, $id){
        $provinciaResult = provinciasModel::where('id', $id)->update($provincia);
        if ($provinciaResult == true) {
            return true;
        }
        else {
            return false;
        }
    }
}
