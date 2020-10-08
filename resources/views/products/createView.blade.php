@extends('layouts.app')

@section('title', 'Crear nuevo producto')
@section('body')
    @include('layouts/errors')
    <div class="container">
        <h1>Crear nuevo producto</h1>
        <form action="{{ route('ProductsController@create') }}" method="POST" onsubmit="validation()">
            @csrf
            <label>Codigo:</label>
            <input type="text" name="code" id="code" value="{{ old('code') }}">

            <label>Nombre:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}">

            <label>Descripcion:</label>
            <input type="text" name="description" id="description" value="{{ old('description') }}">

            <label>Precio:</label>
            <input type="number" name="price" id="price" value="{{ old('price') }}">

            <label>Proveedores:</label>
            <select name="provider" id="provider" value="{{ old('provider') }}">
                @foreach($providers as $provider)
                    <option value="{{ $provider->getId() }}">{{ $provider->getName() }}</option>
                @endforeach
            </select>

            <label>Categorias:</label>
            <select name="category" id="category" value="{{ old('category') }}">
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

    <script src="/Validations/Product/product.js"></script>
@endsection
