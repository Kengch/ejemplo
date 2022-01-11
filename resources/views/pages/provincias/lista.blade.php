@extends('layouts.layout')
    @section('content')
    <a href="{{url('crearProv')}}">
        <input type="button" value='Crear' class="btn btn-success mb-2">
    </a>
        <table class='table' id='tablaProvincias'>
            <thead>
                <tr>
                    <th scope='col'>ID</th>
                    <th scope='col'>Provincia</th>
                    <th scope='col'>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($listaProvincias as $provincia)
                    <tr>
                        <td>{{$provincia->id}}</td>
                        <td>{{$provincia->provincia}}</td>
                        <td>
                            <a href="{{url('editarProv', $provincia)}}">
                                <input type="button" class='btn btn-warning' value='Editar'>
                            </a>
                            <a href="{{url('borrarProvincia', $provincia)}}">
                                <input type="button" class='btn btn-danger' value='Borrar'>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <script>
          $(document).ready( function () {
            $('#tablaProvincias').DataTable();
          } );
        </script>
    @stop