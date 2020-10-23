<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', "");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('dashboard')->group(function() {

    Route::get('/index', 'BackController@index')->name('dashboard-index');

    Route::prefix('recipes-instructions')->group(function() {
        Route::get('/index', 'RecipeInstructionController@index')->name('dashboard-recipes-instructions-index');
        Route::get('/add', 'RecipeInstructionController@add')->name('dashboard-recipes-instructions-add');
        Route::post('/store', 'RecipeInstructionController@store')->name('dashboard-recipes-instructions-store');
        Route::get('/edit/{id}', 'RecipeInstructionController@edit')->name('dashboard-recipes-instructions-edit');
    });

    Route::prefix('recipes')->group(function() {
        Route::get('/index', 'RecipeController@index')->name('dashboard-recipes-index');
        Route::get('/add', 'RecipeController@add')->name('dashboard-recipes-add');
        Route::post('/store', 'RecipeController@store')->name('dashboard-recipes-store');
        Route::get('/edit/{id}', 'RecipeController@edit')->name('dashboard-recipes-edit');
    });

    Route::prefix('ingredients')->group(function() {
        Route::get('/index', 'IngredientController@index')->name('dashboard-ingredients-index');
        Route::get('/add', 'IngredientController@add')->name('dashboard-ingredients-add');
        Route::post('/store', 'IngredientController@store')->name('dashboard-ingredients-store');
        Route::get('/edit/{id}', 'IngredientController@edit')->name('dashboard-ingredients-edit');
    });

    Route::prefix('tags')->group(function() {
        Route::get('/index', 'TagController@index')->name('dashboard-tags-index');
        Route::get('/add', 'TagController@add')->name('dashboard-tags-add');
        Route::post('/store', 'TagController@store')->name('dashboard-tags-store');
        Route::get('/edit/{id}', 'TagController@edit')->name('dashboard-tags-edit');
    });

    Route::prefix('units')->group(function() {
        Route::get('/index', 'UnitController@index')->name('dashboard-units-index');
        Route::get('/add', 'UnitController@add')->name('dashboard-units-add');
        Route::post('/store', 'UnitController@store')->name('dashboard-units-store');
        Route::get('/edit/{id}', 'UnitController@edit')->name('dashboard-units-edit');
    });
});

