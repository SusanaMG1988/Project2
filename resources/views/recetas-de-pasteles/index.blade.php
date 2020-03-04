
@extends('layout')

@section('content')
    <h2>Lista de pasteles</h2>
    <ul>
    @foreach ($pasteles as $pastel)
       <li> {{$pastel}}</li>

    @endforeach
    </ul>
    <a href="/recetas-de-pasteles/crear">Crear nueva receta</a>
@endsection





