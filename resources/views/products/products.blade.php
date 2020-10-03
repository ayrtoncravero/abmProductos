@extends('layouts.app')

@section('title', 'Productos')
@section('body')

    <div class="container">
        <h1>Todos los productos</h1>

        <form action="{{ route('ProductsController@search') }}" method="GET">
            <p>Buscador:</p>
            <label>Nombre:</label>
            <input type="text" name="name"><br>
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
                    <td>{{ $product->getCode() }}</td>
                    <td>{{ $product->getName() }}</td>
                    <td>{{ $product->getDescription() }}</td>
                    <td>{{ $product->getPrice() }}</td>
                    <td>{{ $product->getStock() }}</td>
                    <td>{{ $product->getProvider()->getName() }}</td>
                    <td>{{ $product->getCategory()->getName() }}</td>
                    <td>
                        <form action="{{ route('ProductsController@edit', ['id' => $product->getId()]) }}">
                            @csrf
                            <input type="submit" class="button-primary" value="Editar">
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('ProductsController@destroyView', ['id' => $product->getId()]) }}">
                            <input type="submit" class="button-primary" value="Borrar">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

        <form action="{{ route('ProductsController@productsNew') }}">
            <input class="button-primary" type="submit" value="Crear producto">
        </form>
        <a href="{{ route('HomeController@home') }}">Regresar</a>
    </div>
@endsection
