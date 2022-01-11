<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonaModel;
use App\Models\provinciasModel;

class Persona_Controller extends Controller
{
    protected $persona;
    protected $provincias;

    function __construct(PersonaModel $personaModel, provinciasModel $provinciasModel){
        $this->persona = $personaModel;
        $this->provincias = $provinciasModel;
    }
        //devuelve una vista con la lista de personas
    function index(){
        $lista_personas = $this->persona->lista_personas();
        return view('pages.persona.index',['lista_persona' => $lista_personas]);
    }
        //devuelve la vista para crear
    function crear(){
        $lista_provincias = $this->provincias->lista_provincias();
        //echo '<pre>',var_dump($lista_provincias);
        //die;
        return view('pages.persona.crear', array('lista_provincias' => $lista_provincias));
    }
        //borra la persona
    function borrar($id){
        $result = $this->persona->borrar($id);
        return back();
    }
        //devuelve la vista para editar
    function editar($id){
        $lista_provincias = $this->provincias->lista_provincias();
        $listaPersona = $this->persona->obtenerPersona($id);
        //echo '<pre>', var_dump($listaPersona);
        //die;
        return view('pages.persona.editar', array('lista_provincias' => $lista_provincias, 'listaPersona' => $listaPersona));
    }
        //edita una persona
    function editarPersona(Request $request){
        $persona = array(
            'nombre'=>$request->nombre,
            'apellido'=>$request->apellido,
            'cedula'=>$request->cedula,
            'correo'=>$request->correo,
            'provincia'=>$request->provincia
        );
        $id=$request->id;
        
        $result = $this->persona->actualizar($persona, $id);

        if ($result == true){
            return redirect('index');
        }
        else {
            return back();
        }
        //echo '<pre>', var_dump($request->nombre);die;        
    }
        //crea a la Persona
    function store(Request $request){
       

        $persona = array(
            'nombre'=>$request->nombre,
            'apellido'=>$request->apellido,
            'cedula'=>$request->cedula,
            'correo'=>$request->correo,
            'provincia'=>$request->provincia
        );

        $agregarPersona = $this->persona->agregarPersona($persona);
        if ($agregarPersona == true) {
            return redirect('index');
        }
        else {
            return back();
        }
    }

    function ej(){
        $frutas = array(
            'Uvas',
            'Pera',
            'Pina'
        );

        $persona_array = array(
            'id' => 117330481,
            'nombre' => 'Keng',
            'apellido' => 'Chang'
        );

        $personasArray = array(
            'persona1' => array(
                        'id' => 117330481,
                        'nombre' => 'Keng',
                        'apellido' => 'Chang',
                        'isdeleted' => 0
            ),

            'persona2' => array(
                'id' => 456456456,
                'nombre' => 'Luis',
                'apellido' => 'Miguel',
                'isdeleted' => 0
            ),

            'persona3' => array(
                'id' => 789123456,
                'nombre' => 'Chayanne',
                'apellido' => 'Fernandez',
                'isdeleted' => 1
            ),
        );
        return view('pages.ej', compact('personasArray'));
    }
}
