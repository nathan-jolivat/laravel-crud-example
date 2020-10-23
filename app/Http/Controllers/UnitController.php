<?php

namespace App\Http\Controllers;

use App\Recipe;
use App\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index()
    {
        $units = Unit::all();

        return view('dashboard.units.index', compact('units'));
    }

    public function add()
    {
        return view('dashboard.units.add');
    }

    public function store(Request $request)
    {
        $unitToStore = new Unit();

        $unitToStore->name = strtoupper($request->get('name'));
        $unitToStore->abbreviation = $request->get('abbreviation');

        $unitToStore->save();

        return back()->with('success','Unité "<b>' . $unitToStore->name . '</b>" a bien été créée.');
    }
}
