<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CocktailIngredientUnit extends Model
{
    public function ingredient()
    {
        return $this->hasOne(Ingredient::class);
    }

    public function recipe()
    {
        return $this->hasOne(Recipe::class);
    }

    public function unit()
    {
        return $this->hasOne(Unit::class);
    }
}
