@extends('layouts.app')

@section('title', 'Editar proveedor')
@section('body')

    <div class="container">
        <h1>Editar proveedor</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('ProvidersController@update', ['id' => $provider->getId()]) }}" method="POST" onsubmit="validation()">
            @csrf
            <label>Codigo:</label>
            <input type="text" name="code" id="code" value="{{ $provider->getCode() }}">

            <label>Nombre:</label>
            <input type="text" name="name" id="name" value="{{ $provider->getName() }}">

            <label>Descripcion:</label>
            <input type="text" name="description" id="description" value="{{ $provider->getDescription() }}"><br>

            <input class="button-primary" type="submit" value="Editar">
        </form>
        <a href="{{ route('ProvidersController@providers') }}">Regresar</a>
    </div>

    <script src="/Validations/Provider/provider.js"></script>
@endsection
