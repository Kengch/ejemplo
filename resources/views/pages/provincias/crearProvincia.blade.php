@extends('layouts.layout')
    @section('content')
        <h1>Crear provincia</h1>

        <div>
        <form action="{{route('crearProv.crearProvincia')}}" method="POST">
            {{ csrf_field() }}
                <div class="form-group">
                    <label for="InputNombre">Digite la provincia</label>
                    <input type="text" name="provincia" class="form-control" id="InputProvincia" placeholder="Ej: San Jose">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    @stop