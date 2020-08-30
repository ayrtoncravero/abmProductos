@extends('layouts.app')

@section('title', 'Productos')
@section('body')
    <h1>Todos los productos</h1>

    <p>Buscador</p>
    <form action="ProductsController@search" method="GET">
        <label>Nombre:</label>
        <input type="text" name="name"><br>

        <label>Descripcion:</label>
        <input type="text" name="description"><br>

        <input type="submin" value="Buscar">
    </form>
    <table class="egt">
        <tr>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Proveedor</th>
            <th>Categoria</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{  $product->getCode() }}</td>
                    <td>{{  $product->getName() }}</td>
                    <td>{{  $product->getPrice() }}</td>
                    <td>{{  $product->getProvider() }}</td>
                    <td>{{  $product->getCategory() }}</td>
                    <td>
                        <a href="{{ route('ProductsController@productsEdit', ['id' => $product->getId()]) }}">Editar</a>
                    </td>
                    <td>
                        <form action="{{ route('ProductsController@productsDestroy', ['id' => $product->getId()]) }} method="POST">
                        @csrf
                        <input type="submit" value="Borrar">
                        </form>
                    </td>
                </tr>
            @endforeach
    </table>

    <a href="{{ route('ProductsController@productsNew') }}">Crear producto</a><br>
@endsection
