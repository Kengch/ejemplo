<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonaModel extends Model
{
    use HasFactory;

    protected $table = 'persona';
    function __construct(){
        
    }

    function lista_personas(){
        $personas = PersonaModel::all();
        //echo '<pre>',var_dump($personas);
        //die;
        return $personas;
    }

    
    function agregarPersona($persona){
        $personaResult = PersonaModel::insert($persona);
        if ($personaResult == true) {
            return true;
        }
        else {
            return false;
        }
    }

    function borrar($id){
        $result = PersonaModel::where('id', $id)->delete();
        if ($result == true) {
            return true;
        }
        else {
            return false;
        }
    }

    function obtenerPersona($id){
        $result = PersonaModel::where('id', $id)->get();
        return $result;
    }

    //actualizar la provincia
    function actualizar($persona, $id){
        $personaResult = PersonaModel::where('id', $id)->update($persona);
        if ($personaResult == true) {
            return true;
        }
        else {
            return false;
        }
    }
}
