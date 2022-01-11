@extends('layouts.layout')
    @section('content')
        <h1>Editar provincia</h1>

        <div>
        <form action="{{route('editarProv.editarProvincia')}}" method="POST">
            {{ csrf_field() }}
                <div class="form-group">
                    <label for="InputProvincia">Edite la provincia</label>
                    <input value='{{$lista_provincias[0]->provincia}}' type="text" name="provincia" class="form-control" id="InputProvincia" placeholder="Ej: San Jose">
                </div>
                <input type="text" name='id' value='{{$lista_provincias[0]->id}}' hidden>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    @stop