@extends('dashboard.base')

@section('page-content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Ingrédients</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ route('dashboard-ingredients-add') }}" class="btn btn-sm btn-outline-secondary">
                <span data-feather="plus"></span>
                Nouvel ingrédient
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
            @foreach($ingredients as $ingredient)
                <tr>
                    <th scope="row">{{ $ingredient->id }}</th>
                    <td>{{ $ingredient->name }}</td>
                    <td>
                        @if($ingredient->description)
                            {{ $ingredient->description }}
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
