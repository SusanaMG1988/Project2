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
    @if($errors->has('cuerpo'))
    <div class="alert alert-danger">{{ $errors->first('cuerpo') }}</div>
    @endif

    <button type="submit">Enviar</button>

</form>
