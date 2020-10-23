@extends('layouts.app')

@section('title', 'Crear proveedor')
@section('body')

    <div class="container down-div">
        <div class="text-center">
            <h1>Crear nuevo proveedor</h1>
        </div>

        <div class="text-center">
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

        <div class="text-center">
            <form action="{{ route('ProvidersController@create') }}" method="POST" onsubmit="validation()">
                @csrf
                <label>Codigo:</label>
                <input type="text" name="code" id="code" value="{{ old('code') }}">

                <label>Nombre:</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}">

                <label>Descripcion:</label>
                <input type="text" name="description" value="{{ old('description') }}"><br>

                <input class="button-primary" type="submit" value="Crear">
            </form>
        </div>

        <div class="text-center">
            <form action="{{ route('ProvidersController@index') }}">
                <input class="button-primary" type="submit" value="Cancelar">
            </form>
        </div>

        <script src="/Validations/Provider/provider.js"></script>
    </div>
@endsection
