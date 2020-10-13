@extends('layouts.app')

@section('title', 'Productos')
@section('body')
    @include('layouts/errors')

    <span class="up icon-chevron-up1"></span>

    <div class="container">
        <h1>Todos los productos</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('ProductsController@search') }}" method="GET" onsubmit="validation()">
            <label>Buscador</label>
            <label>Nombre o descripcion:</label>
            <input type="text" name="search" id="search"><br>
            <input class="button-primary" type="submit" value="Buscar">
        </form><br>

        <table class="egt">
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Proveedor</th>
                <th>Categoria</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product['code'] }}</td>
                    <td>{{ $product['name'] }}</td>
                    <td>{{ $product['description'] }}</td>
                    <td>{{ $product['price'] }}</td>
                    <td>{{ $product['stock'] }}</td>
                    <td>{{ $product['provider']->getName() }}</td>
                    <td>{{ $product['category']->getName() }}</td>
                    <td>
                        <form action="{{ route('ProductsController@edit', ['id' => $product['id'] ]) }}">
                            @csrf
                            <input type="submit" class="button-primary" value="Editar">
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('ProductsController@destroyView', ['id' => $product['id'] ]) }}">
                            <input type="submit" class="button-primary" value="Borrar">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

        <form action="{{ route('ProductsController@createView') }}">
            <input class="button-primary" type="submit" value="Crear">
        </form>
        <a href="{{ route('HomeController@home') }}">Regresar</a>
    </div>

    <script src="/Validations/Product/search.js"></script>
@endsection
