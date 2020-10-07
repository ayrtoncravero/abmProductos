@extends('layouts.app')

@section('title', 'Crear nuevo proveedor')
@section('body')
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
        <input type="text" required min="1" max="6" name="code" id="code">

        <label>Nombre:</label>
        <input type="text" name="name" required id="name">

        <label>Descripcion:</label>
        <input type="text" name="description"><br>

        <input class="button-primary" type="submit" value="Crear">
    </form>

    <form action="{{ route('ProvidersController@providers') }}">
        <input class="button-primary" type="submit" value="Cancelar">
    </form>

    <script src="/Validations/provider.js"></script>
@endsection
