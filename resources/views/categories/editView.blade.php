@extends('layouts.app')

@section('title', 'Editar categoria')
@section('body')

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <h1>Editar categoria</h1>
        <form action="{{ route('CategoriesController@update', ['id' => $categories->getId()]) }}" method="POST" onsubmit="validation()">
            @csrf
            <label>Nombre</label>
            <input type="text" name="name" id="name" value="{{ $categories->getName() }}">

            <label>Descripcion</label>
            <input type="text" name="description" id="description" value="{{ $categories->getDescription() }}"><br>

            <input class="button-primary" type="submit" value="Editar">
        </form>

        <a href="{{ route('CategoriesController@index') }}">Regresar</a>
    </div>

    <script src="/Validations/Category/category.js"></script>
@endsection
