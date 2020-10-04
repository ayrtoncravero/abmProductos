@extends('layouts.app')

@section('title', 'Crear nuevo producto')
@section('body')
    @include('layouts/errors')
    <div class="container">
        <h1>Crear nuevo producto</h1>
        <form action="{{ route('ProductsController@create') }}" method="POST">
            @csrf
            <label>Codigo:</label>
            <input type="text" name="code" required min="1" max="6" >
            <label>Nombre:</label>
            <input type="text" name="name" required min="1">
            <label>Descripcion:</label>
            <input type="text" name="description" required min="1">
            <label>Precio:</label>
            <input type="number" name="price" required min="1">

            <label>Proveedores:</label>
            <select name="provider">
                /*providers = products*/
                @foreach($providers as $provider)
                    <option value="{{ $provider->getId() }}">{{ $provider->getName() }}</option>
                @endforeach
            </select>

            <label>Categorias:</label>
            <select name="category">
                @foreach($categories as $category)
                    <option value="{{ $category->getId() }}">{{ $category->getName() }}</option>
                @endforeach
            </select><br>

            <input class="button-primary" type="submit" value="Crear">
        </form>

        <form action="{{ route('ProductsController@products') }}">
            <input class="button-primary" type="submit" value="Cancelar">
        </form>
    </div>
@endsection
