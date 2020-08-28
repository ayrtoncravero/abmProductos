@extends('layouts.app')

@section('title', 'Proveedores')
@section('body')
    <h1>Proveedores</h1>

    <table class="egt">
        <tr>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td><a href="{{ URL::route('ProvidersController@providersEdit') }}">Editar</a></td>
            <td><a href="{{ URL::route('ProvidersController@providersDestroy') }}">Eliminar</a></td>
        </tr>
        <tr>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td><a href="{{ URL::route('ProvidersController@providersEdit') }}">Editar</a></td>
            <td><a href="{{ URL::route('ProvidersController@providersDestroy') }}">Eliminar</a></td>
        </tr>
        <tr>
            <td>7</td>
            <td>8</td>
            <td>9</td>
            <td><a href="{{ URL::route('ProvidersController@providersEdit') }}">Editar</a></td>
            <td><a href="{{ URL::route('ProvidersController@providersDestroy') }}">Eliminar</a></td>
        </tr>
    </table>

    <a href="{{ URL::route('ProvidersController@providersNew') }}">Crear proveedores</a><br>

@endsection
