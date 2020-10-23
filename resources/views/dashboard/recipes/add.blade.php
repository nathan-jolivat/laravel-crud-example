@extends('dashboard.base')

@section('page-content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Ajouter une recette</h1>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {!! $message !!}
        </div>
    @endif


    <form action="{{ route('dashboard-recipes-store') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Intitulé de la recette</label>
            <input type="text" class="form-control" required name="name" id="name" autofocus>
            <small id="emailHelp" class="form-text text-muted">Le nom de la recette doit être unique.</small>
            @error('name')
                <span class=" text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description"></textarea>
            @error('description')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Ajouter recette</button>
    </form>
@endsection
