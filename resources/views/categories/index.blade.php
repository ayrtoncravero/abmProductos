@extends('layouts.app')

@section('title', 'Categorias')
@section('body')

    <span class="up icon-chevron-up1"></span>

    <div class="container">
        <div class="text-center">
            <h1>Todas las categorias</h1>
        </div>

        <div class="text-center">
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
                            <form action="{{ route('CategoriesController@editView', ['id' => $category->getId()]) }}">
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
        </div>

        <div class="text-center">
            <form action="{{ route('CategoriesController@createView') }}">
                <div class="center">
                    <input type="submit" class="button-primary" value="Crear">
                </div>
            </form>
        </div>

        <form action="{{ route('HomeController@home') }}">
            <input type="submit" value="< Regresar">
        </form>

    </div>
@endsection
