<?php

namespace App\Http\Controllers;

use App\Ingredient;
use App\Recipe;
use App\Tag;
use App\Unit;
use Illuminate\Http\Request;

class RecipeInstructionController extends Controller
{
    public function index()
    {

    }

    public function add()
    {
        $recipes = Recipe::all();
        $units = Unit::all();
        $ingredients = Ingredient::all();
        $tags = Tag::all();

        return view('dashboard.recipe-instructions.add',
            [
                'recipes' => $recipes,
                'units' => $units,
                'ingredients' => $ingredients,
                'tags' => $tags
            ]
        );
    }
}
