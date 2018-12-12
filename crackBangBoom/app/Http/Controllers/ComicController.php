<?php

namespace App\Http\Controllers;

use App\Comic;
use App\Universe;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        $universes = Universe::all();

        return view('comics.index', compact( ['comics', 'universes'] ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $universes = Universe::all();
        return view('comics.create')->with('universes', $universes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate( $request, [
          'title' => 'required|string',
          'illustrator' => 'nullable|string',
          'universes'=> 'required',
          'description'=> 'nullable|string',
          'img_cover'=> 'nullable|image',
          'pdf' => 'nullable',
          'rating' => 'nullable|numeric',
          'edition' => 'nullable|string',
          'price' => 'nullable|numeric',
          'release_date' => 'nullable',
        ]);

        if( ($request->file('image')) ){
          $path = $request->file('image')->store('comics');
        }

        $comic = Comic::create([
          'title' => $request->input('title'),
          'illustrator' => $request->input('illustrator'),
          'universes'=> $request->input('universes'),
          'description'=> $request->input('description'),
          'img_cover'=> $path??null,
          'pdf' => $path??null,
          'rating' => $request->input('rating'),
          'edition' => $request->input('edition'),
          'price' => $request->input('price')??0,
          'release_date' => $request->input('release_date'),
          'user_id' => \Auth::user()->id,
        ]);

        foreach ($request->input('universes') as $universe) {
          $comic->universes()->attach($universe);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
