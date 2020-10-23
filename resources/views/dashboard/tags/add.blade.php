@extends('dashboard.base')

@section('page-content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Ajouter un Tag</h1>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {!! $message !!}
        </div>
    @endif


    <form action="{{ route('dashboard-tags-store') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Intitulé du tag</label>
            <input type="text" class="form-control" required name="name" id="name" autofocus>
            <small id="emailHelp" class="form-text text-muted">Le nom du Tag doit être unique.</small>
            @error('name')
                <span class=" text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Ajouter Tag</button>
    </form>
@endsection
