@extends('layouts.app')

@section('title', 'Crear nuevo proveedor')
@section('body')
    <div class="container">
        <h1>Crear nuevo proveedor</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
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

        <form action="{{ route('ProvidersController@providers') }}">
            <input class="button-primary" type="submit" value="Cancelar">
        </form>

        <script src="/Validations/Provider/provider.js"></script>
    </div>
@endsection
