@extends('layouts.app')

@section('title', 'Proveedores')
@section('body')
    <h1>Todos los proveedores</h1>

    <table class="egt">
        <tr>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Descripcion</th>
        </tr>
        <tr>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td><a href="{{ route('ProvidersController@providersEdit') }}">Editar</a></td>
            <td><a href="{{ route('ProvidersController@providersDestroy') }}">Eliminar</a></td>
        </tr>
        <tr>
            <td>4</td>
            <td>1</td>
            <td>1</td>
            <td><a href="{{ route('ProvidersController@providersEdit') }}">Editar</a></td>
            <td><a href="{{ route('ProvidersController@providersDestroy') }}">Eliminar</a></td>
        </tr>
        <tr>
            <td>7</td>
            <td>1</td>
            <td>1</td>
            <td><a href="{{ route('ProvidersController@providersEdit') }}">Editar</a></td>
            <td><a href="{{ route('ProvidersController@providersDestroy') }}">Eliminar</a></td>
        </tr>
    </table>

    <a href="{{ route('ProvidersController@providersNew') }}">Crear proveedor</a><br>
@endsection
