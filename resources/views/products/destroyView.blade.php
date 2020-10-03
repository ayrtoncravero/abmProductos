@extends('layouts.app')

@section('title', 'Eliminar productos')
@section('body')
    <div class="container">
        <form action="{{ route('ProductsController@destroy', ['id' => $product->getId()]) }}" method="POST">
            @method('DELETE')
            @csrf
            <p>¿Esta seguro de que desea eliminar el producto?</p>
            <input type="submit" class="button-primary" value="Eliminar"><br>
        </form>

        <form action="{{ route('ProductsController@products') }}">
            <input type="submit" class="button-primary" value="Cancelar">
        </form>
    </div>
@endsection
