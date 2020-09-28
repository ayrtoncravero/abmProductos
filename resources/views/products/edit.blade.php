@extends('layouts.app')

@section('title', 'Editar producto')
@section('body')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('ProductsController@update', ['id' => $product->getId()]) }}" method="POST">
        @csrf
        <label>Codigo:</label>
        <input type="text" name="code" value="{{ $product->getCode() }}">

        <label>Nombre:</label>
        <input type="text" name="name" value="{{ $product->getName() }}">

        <label>Descripcion:</label>
        <input type="text" name="description" value="{{ $product->getDescription() }}">

        <label>Precio:</label>
        <input type="number" name="price" value="{{ $product->getPrice() }}">

        <label>Proveedores:</label>
        <select name="provider">
            @foreach($providers as $provider)
                <option value="{{ $provider->id }}">{{ $provider->getName() }}</option>
            @endforeach
        </select><br>

        <label>Categorias:</label>
        <select name="category">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->getName() }}</option>
            @endforeach
        </select><br>

        <input type="submit" value="Editar" class="button-primary">
    </form>
@endsection
