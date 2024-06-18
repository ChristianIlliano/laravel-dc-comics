<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listaComics = Comic::all();
        return view("comics.index", compact("listaComics"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComicRequest $request)
    {
        $data = $request->all();
        // $comic = new Comic();
        // $comic->fill($data);
        // $comic->save();
        $comic = Comic::create($data);


        return redirect()->route("comic.show",["comic"=> $comic->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {

        return view("comics.show", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view("comics.edit", compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     */
                            // depends injection
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        $data = $request -> all();
        $comic->update($data);
        return redirect()->route('comics.show', ['comic' => $comic->id]);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route("comics.index");
    }
}
