@extends('layouts.app')

@section('title', 'Eliminar proveedor')
@section('body')

    <div class="container">

        <div class="center">
            <h1>Eliminar proveedor</h1>
        </div>

        <div class="center">
            <form action="{{ route('ProvidersController@destroy', ['id' => $provider->getId()]) }}" method="POST">
                @method('DELETE')
                @csrf
                <p>¿Esta seguro que desea eliminar el proveedor?</p>
                <p>Codigo: {{ $provider->getCode() }}</p>
                <p>Nombre: {{ $provider->getName() }}</p>

                <div class="center">
                    <input type="submit" class="button-primary" value="Eliminar">
                </div>
            </form>
        </div>

        <div class="center">
            <form action="{{ route('ProvidersController@index') }}">
                <div class="center">
                    <input type="submit" class="button-primary" value="Cancelar">
                </div>
            </form>
        </div>
    </div>
@endsection
