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
        <label>Codigo:</label><br>
        <input type="text" name="code" value="{{ $product->getCode() }}"><br><br>

        <label>Nombre:</label><br>
        <input type="text" name="name" value="{{ $product->getName() }}"><br><br>

        <label>Descripcion:</label><br>
        <input type="text" name="description" value="{{ $product->getDescription() }}"><br><br>

        <label>Precio:</label><br>
        <input type="number" name="price" value="{{ $product->getPrice() }}"><br><br>

        <label>Proveedores:</label><br>
        <select name="providers">
            @foreach($providers as $provider)
                <option value="{{ $provider->id }}">{{ $provider->getName() }}</option>
            @endforeach
        </select><br>

        <label>Categorias:</label><br>
        <select name="category">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->getName() }}</option>
            @endforeach
        </select><br>

        <input type="submit" value="Editar">
    </form>
@endsection
