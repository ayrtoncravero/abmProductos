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
        <form action="{{ route('PurchasesController@purchasesCreate') }}" method="POST">
            @csrf
            <label>Codigo:</label>
            <input type="text" name="code" required><br>

            <label>Cantidad de productos:</label>
            <input type="number" name="quantity" required min="1"><br>

            <input class="button-primary" type="submit" value="Comprar">
        </form>
    </div>
@endsection
