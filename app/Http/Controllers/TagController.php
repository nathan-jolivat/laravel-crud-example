<?php

namespace App\Http\Controllers;

use App\Recipe;
use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();

        return view('dashboard.tags.index', compact('tags'));
    }

    public function add()
    {
        return view('dashboard.tags.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:20'
        ]);

        $tagToStore = new Tag();

        $tagToStore->name = strtoupper($request->get('name'));

        $tagToStore->save();

        return back()->with('success','Tag "<b>' . $tagToStore->name . '</b>" a bien été créé.');
    }
}
