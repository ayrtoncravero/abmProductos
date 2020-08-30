@extends('layouts.app')

@section('title', 'Crear nuevo producto')
@section('body')
    <h1>Crear nuevo producto</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('ProductsController@productsCreate') }}" method="POST">
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
            @foreach($products as $product)
                <option>{{ $product->getProvider }}</option>
            @endforeach
        </select><br>

        <label>Categorias:</label><br>
        <select name="category">
            @foreach($categorys as $category)
                <option>{{ $category->getCategory }}</option>
            @endforeach
        </select><br>

        <input type="submit" value="Crear">
    </form>
@endsection
