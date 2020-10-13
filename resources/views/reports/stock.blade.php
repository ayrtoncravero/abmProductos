@extends('layouts.app')

@section('title', 'Productos con stock bajo')
@section('body')

    <span class="up icon-chevron-up1"></span>

    <div class="container">
        <h1>Productos con stock bajo</h1>

        <table class="egt">
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Proveedor</th>
                <th>Categoria</th>
                <th>cant stock</th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product['code'] }}</td>
                    <td>{{ $product['name'] }}</td>
                    <td>{{ $product['description'] }}</td>
                    <td>{{ $product['price'] }}</td>
                    <td>{{ $product['provider']->getName() }}</td>
                    <td>{{ $product['category']->getName() }}</td>
                    <td>{{ $product['stock'] }}</td>
                </tr>
            @endforeach
        </table>

        <a href="{{ route('HomeController@home') }}">Regresar</a>
    </div>
@endsection
