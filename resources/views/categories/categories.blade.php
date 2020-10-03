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
                        <form action="{{ route('CategoriesController@edit', ['id' => $category->getId()]) }}">
                            <input type="submit" class="button-primary" value="Editar">
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('CategoriesController@destroyView', ['id' => $category->getId()]) }}">
                            <input type="submit" class="button-primary" value="Borrar">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

        <form action="{{ route('CategoriesController@categoriesNew') }}">
            <input type="submit" class="button-primary" value="Crear categoria">
        </form>

        <a href="{{ route('HomeController@home') }}">Regresar</a>
    </div>
@endsection
