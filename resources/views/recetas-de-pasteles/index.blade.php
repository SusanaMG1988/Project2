
@extends('layout')

@section('content')

    <style>
        body{
            padding: 5%;
        }
        table{
            display:flex;
            flex-basis: auto;
        }
        table tr td{
            border:1px solid;
            max-width:300px ;
            font-size: 1em;
        }
        .titles-table{
            font-size: 1.5em;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: bold;
        }
    </style>

    <h1>Vista de recetas</h1>
<table>
    <tr class="titles-table">
        <td>Título</td>
        <td>Ingredientes</td>
        <td>Preparación</td>
    </tr>
    @foreach ($pasteles as $pastel)


        <tr>
        <td>{{$pastel->titulo}}</td>
        <td>{{$pastel->ingredientes}}</td>
        <td>{{$pastel->preparacion}}</td>
        </tr>



    @endforeach
 </table>

@endsection

@section('sidebar')

    @parent
        {{-- Te redirecciona a un formulario para crear una nueva receta --}}
        <a href="/recetas-de-pasteles/crear">Crear nueva receta</a>

@endsection

