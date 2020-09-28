@extends('layouts.app')

@section('title', 'Categorias')
@section('body')
    <div class="container">
        <h1>Todas las categorias</h1>

        <table class="egt">
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            <tr>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->getName() }}</td>
                    <td>{{ $category->getDescription() }}</td>
                    <td>
                        <a href="{{ route('CategoriesController@edit', ['id' => $category->getId()]) }}">Editar</a>
                    </td>
                    <td>
                        <a href="{{ route('CategoriesController@destroyView', ['id' => $category->getId()]) }}">Borrar</a>
                    </td>
                </tr>
            @endforeach
        </table>

        <a href="{{ route('CategoriesController@categorysNew') }}">Crear categoria</a><br>
    </div>
@endsection
