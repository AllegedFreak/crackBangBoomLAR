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

      // if(isset($path_cover)) {
      //   $path_cover = substr($path_cover, 13);
      // } else {
      //   //$comic = Comic::find($id);
      //   $path_cover = null;
      // }
      //
      // if(isset($path_pdf)) {
      //   $path_pdf = substr($path_pdf, 13);
      // } else {
      //   //$comic = Comic::find($id);
      //   $path_pdf = null;
      // }

      $comic = Comic::create([
          'title' => $request->get('title'),
          'illustrator' => $request->get('illustrator'),
          'description' => $request->get('description'),
          'img_cover'=> $path_cover,
          'pdf' => $path_pdf,
          'rating' => $request->get('rating'),
          'edition' => $request->get('edition'),
          'price' => $request->get('price'),
          //'release_date' => $request->get('release_date')
      ]);

      // $comic = Comic::create([
      //   'title' => $request->input('title'),
      //   'illustrator' => $request->input('illustrator'),
      //   'description'=> $request->input('description'),
      //   'img_cover'=> $path_cover,
      //   'pdf' => $path_pdf,
      //   'rating' => $request->input('rating'),
      //   'edition' => $request->input('edition'),
      //   'price' => $request->input('price'),
      //   'release_date' => $request->input('release_date'),
      //   //'user_id' => \Auth::user()->id,
      // ]);

      //universes
      $comic->universes()->attach($_POST['universe']);

      //save
      $comic->save();

      return redirect('/comics');

        // $this->validate( $request, [
        //   'title' => 'required|string',
        //   'illustrator' => 'nullable|string',
        //   'universes'=> 'string',
        //   'description'=> 'nullable|string',
        //   'img_cover'=> 'image',
        //   'pdf' => 'nullable',
        //   'rating' => 'numeric|min:0|max:10',
        //   'edition' => 'string',
        //   'price' => 'numeric|min:0',
        //   'release_date' => 'string',
        // ]);
        //
        // if( ($request->file('img_cover')) ){
        //   $path_cover = $request->file('img_cover')->store('public/comics/covers');
        // }
        //
        // if( ($request->file('pdf')) ){
        //   $path_pdf = $request->file('pdf')->store('public/comics/pdfs');
        // }
        //
        // $path_cover = substr($path_cover, 13);
        // $path_pdf = substr($path_pdf, 13);
        //
        //
        // $comic = Comic::create([
        //   'title' => $request->input('title'),
        //   'illustrator' => $request->input('illustrator'),
        //   'description'=> $request->input('description'),
        //   'img_cover'=> $path_cover,
        //   'pdf' => $path_pdf,
        //   'rating' => $request->input('rating'),
        //   'edition' => $request->input('edition'),
        //   'price' => $request->input('price'),
        //   'release_date' => $request->input('release_date'),
        //   //'user_id' => \Auth::user()->id,
        // ]);
        //
        // //foreach ($request->input('universes') as $universe) {
        //   $comic->universes()->attach($_POST['universe']);
        // //}
        //
        // return redirect('/comics');

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

        //return view( 'comics.edit', compact('comic', '$universes') );

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, $id)
    {
        // validate
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

        if(isset($path_cover)) {
          $path_cover = substr($path_cover, 13);
        } else {
          $comic = Comic::find($id);
          $path_cover = $comic["img_cover"];
        }

        if(isset($path_pdf)) {
          $path_pdf = substr($path_pdf, 13);
        } else {
          $comic = Comic::find($id);
          $path_pdf = $comic["pdf"];
        }

        $comic = Comic::find($id);
        $comic->title = $request->get('title');
        $comic->illustrator = $request->get('illustrator');
        $comic->description = $request->get('description');
        $comic->img_cover = $path_cover;
        $comic->pdf = $path_pdf;
        $comic->rating = $request->get('rating');
        $comic->edition = $request->get('edition');
        $comic->price = $request->get('price');
        $comic->release_date = $request->get('release_date');

        //universes
        //$comic->universes()->attach( $request->get('universe') );
        $comic->universes()->attach($_POST['universe']);

        //save
        $comic->save();

        // redirect
        return redirect('comics/'.$comic->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $comic = \App\Comic::find($id);
      $universes = \App\Universe::all();

      $comic -> delete();

      return redirect('/comics');
    }

}
