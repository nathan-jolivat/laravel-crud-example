@extends('dashboard.base')

@section('page-content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tags</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ route('dashboard-tags-add') }}" class="btn btn-sm btn-outline-secondary">
                <span data-feather="plus"></span>
                Nouveau Tag
            </a>
        </div>
    </div>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Intitulé</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tags as $tag)
                <tr>
                    <th scope="row">{{ $tag->id }}</th>
                    <td>{{ $tag->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
