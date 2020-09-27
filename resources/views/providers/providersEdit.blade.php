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
    <form action="{{ route('ProvidersController@update', ['id' => $provider->getId()]) }}" method="POST">
        @csrf
        <label>Codigo:</label><br>
        <input type="text" name="code" value="{{ $provider->getCode() }}"><br><br>

        <label>Nombre:</label><br>
        <input type="text" name="name" value="{{ $provider->getName() }}"><br><br>

        <label>Descripcion:</label><br>
        <input type="text" name="description" value="{{ $provider->getDescription() }}"><br><br>

        <input type="submit" value="Editar">
    </form>
@endsection
