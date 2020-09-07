@extends('layouts.app')

@section('title', 'Categorias')
@section('body')
    <h1>Todas las categorias</h1>

    <table class="egt">
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        <tr>
            @foreach($categorys as $category)
                <tr>
                    <td>{{ $category->getName() }}</td>
                    <td>{{ $category->getDescription() }}</td>
                    <td>
                        <a href="{{ route('CategorysController@categorysEdit', ['id' => $category->getId()]) }}">Editar</a>
                    </td>
                    <td>
                        <form action="{{ route('CategorysController@categorysDestroy', ['id' => $category->getId()]) }}" method="POST">
                            @csrf
                            <input type="submit" value="Borrar">
                        </form>
                    </td>
                </tr>
            @endforeach
    </table>

    <a href="{{ route('CategorysController@categorysNew') }}">Crear categoria</a><br>
@endsection
