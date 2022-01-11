<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\provinciasModel;

class provinciasController extends Controller
{
    protected $provinciasModel;

    function __construct(provinciasModel $provinciasModel){
        $this->provinciasModel = $provinciasModel;
    }
    //devuelve una vista con la lista de provincias
    function prov(){
        $listaProvincias = $this->provinciasModel->lista_provincias();
        return view ('pages.provincias.lista',['listaProvincias' => $listaProvincias]);
    }
    //devuelve la vista para crear
    function crearProv(){
        return view ('pages.provincias.crearProvincia');
    }
    //recibe la informacion, crear una provincia
    function crearProvincia(Request $request){
        $provincia = array(
            'provincia'=>$request->provincia
        );

        $agregarProvincia = $this->provinciasModel->agregarProvincia($provincia);
        if ($agregarProvincia == true) {
            return redirect('prov');
        }
        else {
            return back();
        }
        //echo var_dump($request);
        //die;
    }

    //devuelve la vista para editar
    function editarProv($id){
        //llamar al metodo 'obtener provincia' del modelo 'provincias model'
        $obtenerProvincia = $this->provinciasModel->obtenerProvincia($id);
        //echo '<pre>', var_dump($obtenerProvincia);
        //die;
        return view('pages.provincias.editarProvincia', array('lista_provincias' => $obtenerProvincia));
    }

    function editarProvincia(Request $request){
          
        $provincia = array(
            'provincia'=>$request->provincia
        );
        $id=$request->id;
        $result = $this->provinciasModel->actualizar($provincia, $id);

        if ($result == true){
            return redirect('index');
        }
        else {
            return back();
        }
        //echo '<pre>', var_dump($request->nombre);die;        
    }

    function borrarProvincia($id){
        $result = $this->provinciasModel->borrarProvincia($id);
        return back();
    }
}
