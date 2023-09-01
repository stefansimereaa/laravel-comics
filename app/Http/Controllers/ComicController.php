<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{

    public function index()
    {
        $comics = Comic::all();
        $shop_items = config('shop');
        return view('comics.index', compact('comics', 'shop_items'));
    }


    public function create()
    {
        $comic = new Comic();
        return view('comics.create', compact('comic'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:100',
            'description' => 'required|string',
            'thumb' => 'required|string',
            'price' => 'numeric|nullable|max:99999999',
            'sale_date' => 'date|nullable',
            'type' => 'string|nullable|max:50'
        ]);

        $data = $request->all();

        $new_comic = new Comic($data);
        $new_comic->save();

        return to_route('comics.show', $new_comic);
    }


    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }


    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }


    public function update(Request $request, Comic $comic)
    {
        $request->validate([
            'title' => 'required|string|max:100',
            'description' => 'required|string',
            'thumb' => 'required|string',
            'price' => 'numeric|nullable|max:99999999',
            'sale_date' => 'date|nullable',
            'type' => 'string|nullable|max:50'
        ]);

        $data = $request->all();
        $comic->update($data);

        return to_route('comics.show', $comic);
    }


    public function destroy(Comic $comic)
    {
        $comic->delete();

        $message = $comic->title . " deleted successfully.";

        return to_route('comics.index')->with('message', $message);
    }
}
