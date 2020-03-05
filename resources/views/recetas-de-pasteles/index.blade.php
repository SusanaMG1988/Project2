
@extends('layout')

@section('content')

    <style>
        body{
            padding: 5%;
        }
    </style>

    <h1>Vista de recetas</h1>
    <ul>
    @foreach ($pasteles as $pastel)
       {{-- <li style = "list-style:none;"> {{$pastel->titulo}}
            <a href={{route('detalles_pastel',['id'=>$pastel->id])}}>Receta</a>
       </li> --}}

    @endforeach
    </ul>

@endsection

@section('sidebar')

    @parent
        {{-- Te redirecciona a un formulario para crear una nueva receta --}}
        <a href="/recetas-de-pasteles/crear">Crear nueva receta</a>

@endsection

