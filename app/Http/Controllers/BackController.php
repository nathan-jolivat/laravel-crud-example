<?php

namespace App\Http\Controllers;

use App\Ingredient;
use App\Recipe;
use App\Tag;
use App\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BackController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function search(Request $request)
    {
        $query = $request->get('q');

        $recipes = Recipe::where(function($q, $query) {
            $q->where('name', $query)->orWhere('description', $query);
        })->get();

        $ingredients = Ingredient::where(function($q, $query) {
            $q->where('name', $query)->orWhere('description', $query);
        })->get();

        $units = Unit::where(function($q, $query) {
            $q->where('name', $query)->orWhere('description', $query);
        })->get();

        $tags = Tag::where(function($q, $query) {
            $q->where('name', $query);
        })->get();

        return view('dashboard.search.result',
            [

            ]
        );
    }
}
