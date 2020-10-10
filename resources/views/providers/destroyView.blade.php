@extends('layouts.app')

@section('title', 'Eliminar proveedor')
@section('body')

    <div class="container">
        <h1>Eliminar proveedor</h1>
        <form action="{{ route('ProvidersController@destroy', ['id' => $provider->getId()]) }}" method="POST">
            @method('DELETE')
            @csrf
            <p>¿Esta seguro que desea eliminar el proveedor?</p>
            <p>Codigo: {{ $provider->getCode() }}</p>
            <p>Nombre: {{ $provider->getName() }}</p>
            <input type="submit" class="button-primary" value="Eliminar">
        </form>

        <form action="{{ route('ProvidersController@index') }}">
            <input type="submit" class="button-primary" value="Cancelar">
        </form>
    </div>
@endsection
