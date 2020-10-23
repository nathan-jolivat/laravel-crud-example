<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    public function cocktailsIngredientsUnit()
    {
        return $this->belongsToMany(CocktailIngredientUnit::class);
    }
}
