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
    <form action="{{ route('ProvidersController@providersCreate') }}" method="POST">
        @csrf
        <label>Codigo:</label><br>
        <input type="text" required min="1" max="6" name="code"><br><br>

        <label>Nombre:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Descripcion:</label><br>
        <input type="text" name="description"><br><br>

        <input type="submit" value="Crear">
    </form>
@endsection
