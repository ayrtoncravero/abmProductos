@extends('layouts.app')

@section('title', 'Eliminar producto')
@section('body')
    @include('errors')
    <form action="{{ route('ProductsController@destroy', ['id' => $product->getId()]) }}" method="POST">
        @method(DELETE)
        @csrf
        <p>¿Esta seguro de que desea eliminar el producto?</p>
        <input type="submit" value="Eliminar">
        <a href="ProductsController@products">Cancelar</a>
    </form>
@endsection
