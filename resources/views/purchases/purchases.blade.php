@extends('layouts.app')

@section('title', 'Confirmar compra')
@section('body')
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
        <label>Codigo:</label><br>
        <input type="text" name="code" required><br><br>

        <label>Cantidad de productos:</label><br>
        <input type="number" name="quantity" required min="1"><br><br>

        <input type="submit" value="Comprar">
    </form>
@endsection
