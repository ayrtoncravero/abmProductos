@extends('layouts.app')

@section('title', 'Crear nuevo producto')
@section('body')
    @include('layouts/errors')
    <h1>Crear nuevo producto</h1>
    <form action="{{ route('ProductsController@create') }}" method="POST">
        @csrf
        <label>Codigo:</label><br>
        <input type="text" name="code" required min="1" max="6" ><br><br>
        <label>Nombre:</label><br>
        <input type="text" name="name" required min="1"><br><br>
        <label>Descripcion:</label><br>
        <input type="text" name="description" required min="1"><br><br>
        <label>Precio:</label><br>
        <input type="number" name="price" required min="1"><br><br>

        <label>Proveedores:</label><br>
        <select name="provider">
            /*providers = products*/
            @foreach($providers as $provider)
                <option value="{{ $provider->getId() }}">{{ $provider->getName() }}</option>
            @endforeach
        </select><br>

        <label>Categorias:</label><br>
        <select name="category">
            @foreach($categories as $category)
                <option value="{{ $category->getId() }}">{{ $category->getName() }}</option>
            @endforeach
        </select><br>

        <input type="submit" value="Crear">
    </form>
@endsection
