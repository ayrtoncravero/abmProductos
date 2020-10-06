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

        <form action="{{ route('PurchasesController@stock') }}" method="POST">
            @csrf
            <label>Codigo:</label>
            <input type="number" name="code" required min="1"><br>

            <label>Cantidad de productos:</label>
            <input type="number" name="quantity" required min="1"><br>

            <input class="button-primary" type="submit" value="Agregar stock">
        </form>

        <a href="{{route('HomeController@home')}}">Regresar</a>
    </div>
@endsection
