@extends('layouts.main')

@section('content')

<div id="desktop-container">
      <div class="container-fluid user-profile">
        <div class="column-I">
          <div class="row info-personal">

            <!--Imagen del user-->
            <div class="img-show-cover">
              <img src="/storage/comics/{{ $comic->img_cover }}" alt="">
            </div>

            <!--Info Personal del user-->
            <div class="col-12 name-user">
              <h1>{{ $comic->title }}</h1>
            </div>
            <div class="col-12 precio">
              ${{ $comic->price }}
            </div>
            <div class="col-12 user-actions">
              @if (Auth::check()) {
                  loggeado!
              @endif

              <a href="#">Editar Info</a>

            </div>

          </div>

        </div>

        <div class="column-II">

          <!--Info del user en la WEB-->
          <div class="row containter info-purchase">

            <div class="info-bought">
              <a href="#">
                <h3>Mis Compras</h3>
              </a>
              <div class="allitems">

              </div>
            </div>

@endsection
