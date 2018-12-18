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
          'universes'=> 'string',
          'description'=> 'nullable|string',
          'img_cover'=> 'image',
          'pdf' => 'nullable',
          'rating' => 'numeric|min:0|max:10',
          'edition' => 'string',
          'price' => 'numeric|min:0',
          'release_date' => 'string',
        ]);

        if( ($request->file('img_cover')) ){
          $path_cover = $request->file('img_cover')->store('public/comics/covers');
        }

        if( ($request->file('pdf')) ){
          $path_pdf = $request->file('pdf')->store('public/comics/pdfs');
        }

        $path_cover = substr($path_cover, 13);
        $path_pdf = substr($path_pdf, 13);


        $comic = Comic::create([
          'title' => $request->input('title'),
          'illustrator' => $request->input('illustrator'),
          'description'=> $request->input('description'),
          'img_cover'=> $path_cover,
          'pdf' => $path_pdf,
          'rating' => $request->input('rating'),
          'edition' => $request->input('edition'),
          'price' => $request->input('price'),
          'release_date' => $request->input('release_date'),
          //'user_id' => \Auth::user()->id,
        ]);

        //foreach ($request->input('universes') as $universe) {
          $comic->universes()->attach($_POST['universe']);
        //}

        return redirect('/comics');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $comic = \App\Comic::find($id);

          return view('comics.show',
          [
            'comic' => $comic,
          ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = \App\Comic::find($id);
        $universes = \App\Universe::all();

        return view('comics.edit',
        [
          'comic' => $comic,
          'universes' => $universes,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
