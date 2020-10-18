@extends('layouts.app')

@section('title', 'Editar producto')
@section('body')

    <div class="container">

        <div class="text-center">
            <h1>Editar producto</h1>
        </div>

        <div class="text-center">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <div class="text-center">
            <form action="{{ route('ProductsController@update', ['id' => $product['id'] ]) }}" method="POST" onsubmit="validation()">
                @csrf
                <label>Codigo:</label>
                <input type="text" name="code" id="code" value="{{ $product['code'] }}">

                <label>Nombre:</label>
                <input type="text" name="name" id="name" value="{{ $product['name'] }}">

                <label>Descripcion:</label>
                <input type="text" name="description" id="description" value="{{ $product['description'] }}">

                <label>Precio:</label>
                <input type="number" name="price" id="price" value="{{ $product['price'] }}">

                <label>Proveedores:</label>
                <select name="provider" id="provider">
                    @foreach($providers as $provider)
                        @if($provider->id === $product['provider']->id)
                            <option selected value="{{ $provider->id }}">{{ $provider->getName() }}</option>
                        @else
                            <option value="{{ $provider->id }}">{{ $provider->getName() }}</option>
                        @endif
                    @endforeach
                </select><br>

                <label>Categorias:</label>
                <select name="category" id="category">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->getName() }}</option>
                    @endforeach
                </select><br>

                <input type="submit" value="Editar" class="button-primary">
            </form>
        </div>

        <form action="{{ route('ProductsController@index') }}">
            <input type="submit" value="< Regresar">
        </form>

    </div>

    <script src="/Validations/Product/product.js"></script>
@endsection
