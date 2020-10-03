@extends('layouts.app')

@section('title', 'Eliminar proveedor')
@section('body')
    <div class="container">
        <form action="{{ route('ProvidersController@destroy', ['id' => $provider->getId()]) }}" method="POST">
            @method('DELETE')
            @csrf
            <p>¿Esta seguro que desea eliminar el proveedor?</p>
            <input type="submit" class="button-primary" value="Eliminar">
        </form>

        <form action="{{ route('ProvidersController@providers') }}">
            <input type="submit" class="button-primary" value="Cancelar">
        </form>
    </div>
@endsection
