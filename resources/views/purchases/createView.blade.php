@extends('layouts.app')

@section('title', 'Confirmar compra')
@section('body')
    <div class="container">
        <h1>Confirmar compra</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('PurchasesController@create') }}" method="POST" onsubmit="validation()">
            @csrf
            <label>Codigo:</label>
            <input type="text" name="code" id="code" value="{{ old('name') }}"><br>

            <label>Producto:</label>
            <select name="product" id="product" value="{{ old('product') }}">
                @foreach($products as $product)
                    <option value="{{ $product->getId() }}">{{ $product->getName() }}</option>
                @endforeach
            </select>

            <label>Cantidad de productos:</label>
            <input type="number" name="quantity" id="quantity" value="{{ old('quantity') }}"><br>

            <input class="button-primary" type="submit" value="Comprar">
        </form>

        <a href="{{route('HomeController@home')}}">Regresar</a>
    </div>

    <script src="/Validations/Purchase/purchase.js"></script>
@endsection
