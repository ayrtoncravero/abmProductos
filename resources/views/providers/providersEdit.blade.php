@extends('layouts.app')

@section('title', 'Editar proveedor')
@section('body')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('ProductsController@providersEdit', ['id' => $providers->getId()]) }}" method="POST">
        @csrf
        <label>Codigo:</label><br>
        <input type="text" name="code" value="{{ $providers->getCode() }}"><br><br>

        <label>Nombre:</label><br>
        <input type="text" name="name" value="{{ $providers->getName() }}"><br><br>

        <label>Descripcion:</label><br>
        <input type="text" name="description" value="{{ $providers->getDescription() }}"><br><br>

        <label>Precio:</label><br>
        <input type="number" name="price" value="{{ $providers->getPrice() }}"><br><br>

        <input type="submit" value="Editar">
    </form>
@endsection
