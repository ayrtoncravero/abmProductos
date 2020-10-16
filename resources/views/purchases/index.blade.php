@extends('layouts.app')

@section('title', 'Agregar stock')

@section('body')

    <div class="container">

        <div class="center">
            <h1>Agregar stock</h1>
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
            <form action="{{ route('PurchasesController@stock') }}" method="POST" onsubmit="validation()">
                @csrf
                <label>Codigo:</label>
                <input type="number" name="code" id="code" value="{{ old('code') }}"><br>

                <label>Cantidad de productos:</label>
                <input type="number" name="quantity" id="quantity" value="{{ old('quantity') }}"><br>

                <div class="center">
                    <input class="button-primary" type="submit" value="Agregar">
                </div>
            </form>
        </div>

        <form action="{{ route('HomeController@home') }}">
            <input type="submit" value="< Regresar">
        </form>

    </div>

    <script src="/Validations/Stock/stock.js"></script>
@endsection
