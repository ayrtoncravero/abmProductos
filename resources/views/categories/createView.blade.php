@extends('layouts.app')

@section('title', 'Crear nueva categoria')
@section('body')

    <h1>Crear nueva categoria</h1>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('CategoriesController@create') }}" method="POST" onsubmit="validation()">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}">

        <label>Descripcion:</label>
        <input type="text" name="description" value="{{ old('description') }}"><br>

        <input class="button-primary" type="submit" value="Crear">
    </form>

    <a href="{{ route('CategoriesController@categories') }}">Regresar</a>

    <script src="/Validations/Category/category.js"></script>
@endsection
