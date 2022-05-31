@extends('layouts.plantilla')

@section('titulo');

@section('contenido')

    <a class="btn btn-danger d-flex justify-content-center">PDF</a>
    &nbsp;

    <a href="{{route('marcas.create')}}" classs="btn btn-primary">AGREGAR MARCA</a>



    <table class="table table-dark table-striped mt-4">
        <thead>

            <tr>
                <th scope="col">ID</th>
                <th scope="col">MARCA</th>
                <th scope="col">DESCRIPCIÓN</th>
                <th scope="col">PRECIO</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($marcas as $marca)
                <tr>
                    <td>{{$marca->id}}</td>
                    <td>{{$marca->marca}}</td>
                    <td>{{$marca->descripcion}}</td>
                    <td>{{$marca->precio}}</td>
                    <td>
                        <a href="{{route('marcas.edit', $marca)}}">EDITAR</a>

                        <form action="{{route('marcas.destroy', $marca)}}" method="post">
                        @csrf
                        @method('delete')

                        <button>ELIMINAR</button>
                        </form>
                    </td>
                   
                </tr>
            @endforeach
        </tbody>

    </table>
@endsection
