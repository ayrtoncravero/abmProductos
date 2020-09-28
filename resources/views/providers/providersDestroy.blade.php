@extends('layouts.app')

@section('title', 'Eliminar proveedor')
@section('body')
    <form action="{{ route('ProvidersController@destroy', ['id' => $provider->getId()]) }}" method="POST">
        @method('DELETE')
        @csrf
        <p>¿Esta seguro que desea eliminar el proveedor?</p>
        <input class="button-primary" type="submit" value="Eliminar">
    </form>
    <a href="{{ route('ProvidersController@providers') }}">Cancelar</a>
@endsection
