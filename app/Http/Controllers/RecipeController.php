<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::all();

        return view('dashboard.recipes.index', compact('recipes'));
    }

    public function add()
    {
        return view('dashboard.recipes.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'description' => 'max:100'
        ]);

        $recipeToStore = new Recipe();

        $recipeToStore->name = strtoupper($request->get('name'));
        $recipeToStore->description = $request->get('description');

        $recipeToStore->save();

        return back()->with('success','Recette "<b>' . $recipeToStore->name . '</b>" a bien été créée.');
    }
}
