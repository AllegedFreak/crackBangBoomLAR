@extends('layouts.main')

@section('content')

<div id="desktop-container">
      <div class="container-fluid user-profile">
        <div class="column-I">
          <div class="row info-personal">

            <!--Imagen del user-->

            <div class="img-show-cover">
              <img src="/storage/comics{{ $comic->img_cover }}" alt="">
            </div>


            <!--Info Personal del user-->
            <div class="col-12 name-comic">
              <h1>{{ $comic->title }}</h1>
            </div>
            <div class="col-12 illustrator">
              por {{ $comic->illustrator }}
            </div>

            <div class="col-11 release_date">
              {{ $comic->release_date }}
            </div>

            <div class="col-11 precio">
              ${{ $comic->price }}
            </div>

            <div class="col-12 comic-actions">
              @if (Auth::check()) @if (Auth::user()->admin == TRUE)
               <a href="/comics/{{$comic->id}}/editar">Editar</a>
               <a href="/comics/{{$comic->id}}/borrar">Borrar</a>
              @endif
              @endif
            </div>

          </div>

        </div>

        <div class="column-II">
          @if (Auth::check()) @if (Auth::user()->admin == TRUE)
          <embed src="/storage/comics{{ $comic->pdf }}" type="application/pdf" width="100%" height="700px" />
            @endif
            @endif
          <!--Info del user en la WEB-->

          <div class="form-group row mb-7">
              <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                      Comprar
                  </button>
              </div>
          </div>




@endsection
