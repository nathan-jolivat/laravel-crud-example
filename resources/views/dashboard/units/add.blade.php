@extends('dashboard.base')

@section('page-content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Ajouter une unité</h1>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {!! $message !!}
        </div>
    @endif


    <form action="{{ route('dashboard-units-store') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Intitulé de l'unité</label>
            <input type="text" class="form-control" required name="name" id="name" autofocus>
            <small id="emailHelp" class="form-text text-muted">Le nom de l'unité doit être unique.</small>
            @error('name')
                <span class=" text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Abbréviation</label>
            <textarea class="form-control" name="abbreviation" id="description"></textarea>
            @error('abbreviation')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Ajouter unité</button>
    </form>
@endsection
