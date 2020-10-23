<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    public function cocktailsIngredientsUnit()
    {
        return $this->belongsToMany(CocktailIngredientUnit::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
