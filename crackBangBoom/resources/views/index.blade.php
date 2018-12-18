@extends('layouts.main')

@section('content')

<div id="desktop-container">

  <!--BANNER-->
  <div class="container-fluid ">
    <div class="row banner">
      <div class="col-12 no-padding">
        @include('includes.banner')
      </div>
    </div>
  </div>

  <!--CONTENIDO-->
  <div class="container-fluid">

    <!--Sección de Novedades-->
    <div class="row red section">
      <div class="name-section col-12">
        <h1>Novedades</h1>
      </div>
      <div class="col-12 comic-section">
        <div class="allitems">

          <!--LISTADO DE COMICS-->
          @include('includes.item-comic-new')

        </div>
      </div>
    </div>

    <!--Sección de Géneros-->
    <div class="row blue section">
      <div class="name-section col-12">
        <h1>Manga</h1>
      </div>
      <div class="comic-section col-12">
        <div class="allitems">

          <!--LISTADO DE COMICS-->
        @include('includes.item-comic-mangas')

        </div>
      </div>
    </div>

    <!--Sección de Doble-->
    <div class="row section no-gap">

      <!--Lo más popular de Marvel-->
      <div class="col-12 col-md-6 yellow subsection ">
        <div class="group-a row">
          <div class="name-section col-12">
            <h1>Lo más popular de Marvel</h1>
          </div>
          <div class="comic-section col-12">
            <div class="allitems">

              <!--LISTADO DE COMICS-->
              @include('includes.item-comic-marvel')


            </div>
          </div>
        </div>
      </div>

      <!--Lo más popular de DC-->
      <div class="col-12 col-md-6 yellow subsection">
        <div class="group-b row">
          <div class="name-section col-12">
            <h1>Lo más popular de DC</h1>
          </div>
          <div class="comic-section col-12">
            <div class="allitems">

              <!--LISTADO DE COMICS-->
              @include('includes.item-comic-dc')

            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>

@endsection
