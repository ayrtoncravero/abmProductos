@extends('layouts.app')

@section('title', 'Productos con stock bajo')
@section('body')
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
                    <td>{{ $product->getStock() }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
