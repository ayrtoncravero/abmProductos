@extends('layouts.app')

@section('title', 'Confirmar compra')
@section('body')
    <h1>Confirmar compra</h1>
    <form action="PurchaseController@purchaseCreate" method="POST">
        @csrf
        <label for="codePurchaseProduct">Codigo:</label><br>
        <input type="text" id="codePurchaseProduct" name="codePurchaseProduct"><br><br>

        <label for="quantityProduct">Cantidad:</label><br>
        <input type="number" id="quantityProduct" name="quantityProduct"><br><br>

        <input type="submit" value="Confirmar">
    </form>
@endsection
