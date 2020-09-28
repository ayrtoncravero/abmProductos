@extends('layouts.app')

@section('title', 'Proveedores')
@section('body')
    <div class="container">
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
                        <a href="{{ route('ProvidersController@providersEdit', ['id' => $provider->getId()]) }}">Editar</a>
                    </td>
                    <td>
                        {{--
                        <form action="{{ route('ProvidersController@destroyView', ['id' => $provider->getId()]) }}" method="POST">
                            @csrf
                            <input class="button-primary" type="submit" value="Borrar">
                        </form>
                        --}}
                        <a href="{{ route('ProvidersController@destroyView', ['id' => $provider->getId()]) }}">Borrar</a>
                    </td>
                </tr>
            @endforeach
        </table>

        <a href="{{ route('ProvidersController@providersNew') }}">Crear proveedor</a><br>
    </div>
@endsection
