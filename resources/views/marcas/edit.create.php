@extends('layouts.plantilla')

@section('titulo')

@section('contenido')

    <form action="{{route('marcas.update', $marca)}}" method="post">
        @csrf
        
        @method('put')

        <div class="mb-3">
            <label for="marca" class="form-label">NOMBRE DE LA MARCA</label>
            <input id="marca" name="marca" type="text" class="form-control" tabindex="2" value="{{old('marca', $marca->marca)}}"> 
        </div>
      
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea id="descripcion" name="descripcion" type="text" class="form-control" tabindex="1"> 
                {{old('descripcion', $marca->marca)}}
            </textarea>        
        </div>
       
        
        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input id="precio" name="precio" type="number" step="any" class="form-control" value="{{old('precio', $marca->precio)}}"> 
        </div>

        <a href="{{route('marcas.index')}}" class="btn btn-danger">Cancelar</a>
        <button type="submit" class="btn btn-dark">Actualizar</button>
    </form>

@endsection
