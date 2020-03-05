@extends('layout')

@section('content')

{{-- Estilos --}}
<style>
    body{
        padding:5%;
    }
    input{
        border-radius: 5px;
        margin:5px;
    }
    .col-4{
        /* sidebar*/
        visibility: hidden;
    }

</style>

{{-- Formulario para crear nuevas recetas  --}}

<form method="POST" action={{url('recetas-de-pasteles/store')}}>
    {{csrf_field()}}


    <input class="form-control" id="titulo" type="text" name="titulo" placeholder="Título" value={{old('titulo')}}>

    {{-- control de errores nombre --}}
    @if($errors->has('titulo'))
    <div class="alert alert-danger">{{ $errors->first('titulo') }}</div>
    @endif

    <textarea name="ingredientes" id="ingredientes" cols="30" rows="10" placeholder="ingredientes" value={{old('ingredientes')}}></textarea>

    {{-- control de errores cuerpo --}}
    @if($errors->has('ingredientes'))
    <div class="alert alert-danger">{{ $errors->first('ingredientes') }}</div>
    @endif

    <textarea name="preparacion" id="preparacion" cols="30" rows="10" placeholder="preparacion" value={{old('preparacion')}}></textarea>

    {{-- control de errores cuerpo --}}
    @if($errors->has('preparacion'))
    <div class="alert alert-danger">{{ $errors->first('preparacion') }}</div>
    @endif

    <button type="submit">Enviar</button>

</form>

@endsection


