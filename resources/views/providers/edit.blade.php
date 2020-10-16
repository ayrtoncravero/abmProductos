@extends('layouts.app')

@section('title', 'Editar proveedor')
@section('body')

    <div class="container">

        <div class="center">
            <h1>Editar proveedor</h1>
        </div>

        <div class="center">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>


        <div class="center">
            <form action="{{ route('ProvidersController@update', ['id' => $provider->getId()]) }}" method="POST" onsubmit="validation()">
                @csrf
                <label>Codigo:</label>
                <input type="text" name="code" id="code" value="{{ $provider->getCode() }}">

                <label>Nombre:</label>
                <input type="text" name="name" id="name" value="{{ $provider->getName() }}">

                <label>Descripcion:</label>
                <input type="text" name="description" id="description" value="{{ $provider->getDescription() }}"><br>

                <div class="center">
                    <input class="button-primary" type="submit" value="Editar">
                </div>
            </form>
        </div>

        <form action="{{ route('ProvidersController@index') }}">
            <input type="submit" value="< Regresar">
        </form>

    </div>

    <script src="/Validations/Provider/provider.js"></script>
@endsection
