@extends('layouts.app')

@section('title', 'Agregar stock')

@section('body')

    <div class="container">
        <h1>Agregar stock</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('PurchasesController@stock') }}" method="POST" onsubmit="validation()">
            @csrf
            <label>Codigo:</label>
            <input type="number" name="code" id="code" value="{{ old('code') }}"><br>

            <label>Cantidad de productos:</label>
            <input type="number" name="quantity" id="quantity" value="{{ old('quantity') }}"><br>

            <input class="button-primary" type="submit" value="Agregar">
        </form>

        <a href="{{route('HomeController@home')}}">Regresar</a>
    </div>

    <script src="/Validations/Stock/stock.js"></script>
@endsection
