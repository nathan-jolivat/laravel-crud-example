<?php

namespace App\Http\Controllers;

use App\Ingredient;
use App\Recipe;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    public function index()
    {
        $ingredients = Ingredient::all();

        return view('dashboard.ingredients.index', compact('ingredients'));
    }

    public function add()
    {
        return view('dashboard.ingredients.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'description' => 'max:100'
        ]);

        $ingredientToStore = new Ingredient();

        $ingredientToStore->name = strtoupper($request->get('name'));
        $ingredientToStore->description = $request->get('description');

        $ingredientToStore->save();

        return back()->with('success','Ingrédient "<b>' . $ingredientToStore->name . '</b>" a bien été créé.');
    }
}
