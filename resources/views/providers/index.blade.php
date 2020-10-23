@extends('layouts.app')

@section('title', 'Proveedores')
@section('body')

    <span class="up icon-chevron-up1"></span>

    <div class="container down-div">

        <div class="text-center">
            <h1>Todos los proveedores</h1>
        </div>

        <div class="text-center">
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
        </div>

        <div class="text-center">
            <form action="{{ route('ProvidersController@createView') }}">
                <input class="button-primary" type="submit" value="Crear">
            </form>
        </div>

        <form action="{{ route('HomeController@home') }}">
            <input type="submit" value="< Regresar">
        </form>
    </div>
@endsection
