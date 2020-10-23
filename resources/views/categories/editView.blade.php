@extends('layouts.app')

@section('title', 'Editar categoria')
@section('body')

    <div class="container padre">

        <div class="text-center">
            <h1>Editar categoria</h1>
        </div>

        <div class="text-center">
            @if ($errors->any())
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <div class="text-center">
            <form action="{{ route('CategoriesController@update', ['id' => $categories->getId()]) }}" method="POST" onsubmit="validation()">
                @csrf
                <label>Nombre</label>
                <input type="text" name="name" id="name" value="{{ $categories->getName() }}">

                <label>Descripcion</label>
                <input type="text" name="description" id="description" value="{{ $categories->getDescription() }}"><br>

                <div class="text-center">
                    <input class="button-primary" type="submit" value="Editar">
                </div>

            </form>
        </div>

        <form action="{{ route('CategoriesController@index') }}">
            <input type="submit" value="< Regresar">
        </form>

    </div>

    <script src="/Validations/Category/category.js"></script>
@endsection
