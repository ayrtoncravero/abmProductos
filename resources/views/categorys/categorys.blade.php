@extends('layouts.app')

@section('title', 'Categorias')
@section('body')
    <h1>Todas las categorias</h1>

    <table class="egt">
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
        </tr>
        <tr>
            <td>1</td>
            <td>1</td>
            <td><a href="{{ route('CategorysController@categorysEdit') }}">Editar</a></td>
            <td><a href="{{ route('CategorysController@categorysDestroy') }}">Eliminar</a></td>
        </tr>
        <tr>
            <td>4</td>
            <td>1</td>
            <td><a href="{{ route('CategorysController@categorysEdit') }}">Editar</a></td>
            <td><a href="{{ route('CategorysController@categorysDestroy') }}">Eliminar</a></td>
        </tr>
        <tr>
            <td>7</td>
            <td>1</td>
            <td><a href="{{ route('CategorysController@categorysEdit') }}">Editar</a></td>
            <td><a href="{{ route('CategorysController@categorysDestroy') }}">Eliminar</a></td>
        </tr>
    </table>

    <a href="{{ route('CategorysController@categorysNew') }}">Crear categoria</a><br>
@endsection
