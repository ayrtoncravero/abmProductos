@extends('layouts.app')

@section('title', 'Crear nueva categoria')
@section('body')
    <h1>Crear nueva categoria</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('CategorysController@categorysCreate') }}" method="POST">
        @csrf
        <label>Nombre:</label><br>
        <input type="text" name="name" required min="1"><br><br>

        <label>Descripcion:</label><br>
        <input type="text" name="description"><br><br>

        <input type="submit" value="Crear">
    </form>
@endsection
