@extends('layouts.app')

@section('title', 'Proveedores')
@section('body')

    <span class="up icon-chevron-up1"></span>

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
                        <form action="{{ route('ProvidersController@edit', ['id' => $provider->getId()]) }}">
                            <input type="submit" class="button-primary" value="Editar">
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('ProvidersController@destroyView', ['id' => $provider->getId()]) }}">
                            <input type="submit" class="button-primary" value="Borrar">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

        <form action="{{ route('ProvidersController@createView') }}">
            <input class="button-primary" type="submit" value="Crear">
        </form>
        <a href="{{ route('HomeController@home') }}">Regresar</a>
    </div>
@endsection
