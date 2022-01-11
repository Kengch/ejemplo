@extends('layouts.layout')
    @section('content')
    @foreach($personasArray as $key => $value)
        @foreach($value as $k => $v)

            @if($v == 0)
                <h1>{{$v}}</h1><hr>
        

            @endif
        @endforeach
        
    @endforeach

    <?php foreach($personasArray as $key => $value):?>
        <h1><?php  $value ?>
        </h1>
    <?php endforeach?>
    @stop