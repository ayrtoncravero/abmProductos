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
        @foreach($providers as $provider)
            <tr>
                <td>{{  $provider->getCode() }}</td>
                <td>{{  $provider->getName() }}</td>
                <td>{{  $provider->getDescription() }}</td>
                <td>
                    <a href="{{ route('ProductsController@providersEdit', ['id' => $provider->getId()]) }}">Editar</a>
                </td>
                <td>
                    <form action="{{ route('ProvidersController@providersDestroy', ['id' => $provider->getId()]) }}" method="POST">
                        @csrf
                        <input type="submit" value="Borrar">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    <a href="{{ route('ProvidersController@providersNew') }}">Crear proveedor</a><br>
@endsection
