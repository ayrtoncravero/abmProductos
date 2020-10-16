@extends('layouts.app')

@section('title', 'Confirmar compra')
@section('body')

    <div class="container">

        <div class="center">
            <h1>Confirmar compra</h1>
        </div>

        <div class="center">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <div class="center">
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

                <div class="center">
                    <input class="button-primary" type="submit" value="Comprar">
                </div>
            </form>
        </div>

        <form action="{{ route('HomeController@home') }}">
            <input type="submit" value="< Regresar">
        </form>

    </div>

    <script src="/Validations/Purchase/purchase.js"></script>
@endsection
