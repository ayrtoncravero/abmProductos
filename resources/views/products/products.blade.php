@extends('layouts.app')

@section('title', 'Home')
@section('body')
    <h1>Todos los productos</h1>

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
        <tr>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td><a href="{{ URL::route('ProductsController@editProducts') }}">Editar</a></td>
            <td><a href="{{ URL::route('ProductsController@deleteProducts') }}">Eliminar</a></td>
        </tr>
        <tr>
            <td>4</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td><a href="{{ URL::route('ProductsController@editProducts') }}">Editar</a></td>
            <td><a href="{{ URL::route('ProductsController@deleteProducts') }}">Eliminar</a></td>
        </tr>
        <tr>
            <td>7</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td><a href="{{ URL::route('ProductsController@editProducts') }}">Editar</a></td>
            <td><a href="{{ URL::route('ProductsController@deleteProducts') }}">Eliminar</a></td>
        </tr>
    </table>

    <a href="{{ URL::route('ProductsController@createProductsView') }}">Crear producto</a><br>
@endsection
