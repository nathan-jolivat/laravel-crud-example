@extends('dashboard.base')

@section('page-content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Recettes</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ route('dashboard-recipes-add') }}" class="btn btn-sm btn-outline-secondary">
                <span data-feather="plus"></span>
                Nouvelle recette
            </a>
        </div>
    </div>

    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Intitulé</th>
            <th scope="col">Description</th>
        </tr>
        </thead>
        <tbody>
            @foreach($recipes as $recipe)
                <tr>
                    <th scope="row">{{ $recipe->id }}</th>
                    <td>{{ $recipe->name }}</td>
                    <td>
                        @if($recipe->description)
                            {{ $recipe->description }}
                        @else
                            <span class="badge badge-light">
                                <span data-feather="x"></span> Aucune description fournie
                            </span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
