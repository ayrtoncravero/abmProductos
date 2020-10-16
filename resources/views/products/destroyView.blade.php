@extends('layouts.app')

@section('title', 'Eliminar productos')
@section('body')
    <div class="container">

        <div class="center">
            <h1>Eliminar producto</h1>
        </div>

        <div class="center">
            <form action="{{ route('ProductsController@destroy', ['id' => $product->getId()]) }}" method="POST">
                @method('DELETE')
                @csrf
                <p>¿Esta seguro de que desea eliminar el producto?</p>
                <p>Codigo: {{ $product->getCode() }}</p>
                <p>Nombre: {{ $product->getName() }}</p>
                <div class="center">
                    <input type="submit" class="button-primary" value="Borrar"><br>
                </div>
            </form>
        </div>
        <div class="center">
            <form action="{{ route('ProductsController@index') }}">
                <input type="submit" class="button-primary" value="Cancelar">
            </form>
        </div>
    </div>
@endsection
