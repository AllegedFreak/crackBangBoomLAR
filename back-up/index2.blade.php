<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Crack Bang Boom!</title>
    <link href="/css/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
    <link rel="stylesheet" href="/css/main-style.css">
    <link rel="stylesheet" href="/css/banner-style.css">
  </head>

  <body>

    <div id="desktop-container">

      <!--HEADER-->
      @include('includes.header')

      <!--BANNER-->
      <div class="container-fluid ">
        <div class="row banner">
          <div class="col-12 no-padding">
            @yield('script-banner')
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

    <!--FOOTER-->
    <div class="container-fluid">
      @include('includes.footer')
    </div>

  </body>


</html>
