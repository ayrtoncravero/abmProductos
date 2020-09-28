@extends('layouts.app')

@section('title', 'Editar proveedor')
@section('body')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('ProvidersController@update', ['id' => $provider->getId()]) }}" method="POST">
        @csrf
        <label>Codigo:</label>
        <input type="text" name="code" value="{{ $provider->getCode() }}">

        <label>Nombre:</label>
        <input type="text" name="name" value="{{ $provider->getName() }}">

        <label>Descripcion:</label>
        <input type="text" name="description" value="{{ $provider->getDescription() }}"><br>

        <input class="button-primary" type="submit" value="Editar">
    </form>
    <a href="{{ route('ProvidersController@providers') }}">Regresar</a>
@endsection
