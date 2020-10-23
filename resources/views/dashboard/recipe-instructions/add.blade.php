@extends('dashboard.base')

@section('page-content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Ajouter une instruction</h1>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {!! $message !!}
        </div>
    @endif


    <form action="{{ route('dashboard-recipes-store') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="recipe">Recette concernée</label>
            <select class="form-control" name="recipe_id" id="recipe">
                @foreach($recipes as $recipe)
                    <option value="{{ $recipe->id }}">{{ $recipe->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="recipe">Ingrédient</label>
            <select class="form-control" name="recipe_id" id="recipe">
                @foreach($ingredients as $ingredient)
                    <option value="{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="recipe">Unité</label>
            <select class="form-control" name="recipe_id" id="recipe">
                @foreach($units as $unit)
                    <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="recipe">Tag</label>
            <select class="form-control" name="recipe_id" id="recipe">
                @foreach($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter instruction</button>
    </form>
@endsection
