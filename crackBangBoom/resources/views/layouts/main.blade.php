<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Crack Bang Boom!</title>
    <link href="/css/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- link iconos -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/css/main-style.css">
    <link rel="stylesheet" href="/css/theme-light.css" class="themes">

    <link rel="stylesheet" href="/css/banner-style.css">
    <link rel="stylesheet" href="/css/profile-style.css">

    <link rel="stylesheet" href="/css/items-style-profile.css" class="just-for-profile">

    <link rel="stylesheet" href="/css/contact-style.css">
    <link rel="stylesheet" href="/css/faq-style.css">
    <!-- <link rel="stylesheet" href="/css/item-style-profile.css"> -->
    <link rel="stylesheet" href="/css/perfil.css">
    <link rel="stylesheet" href="/css/show-item.css">
    <link rel="stylesheet" href="/css/styleforms.css">
    <link rel="stylesheet" href="/css/cart.css">
  </head>

  <body>

    <div id="desktop-container">

      <!--HEADER-->
      @include('includes.header')

      <!--CONTENIDO PRINCIPAL-->
      @yield('content')

      <!--FOOTER-->
      <div class="container-fluid">
        @include('includes.footer')
      </div>

      @include('includes.changetheme')

      <script>

        //deshabilita items-style-profile.css
        var checkProfileCSS = document.querySelector('.just-for-profile');
        //console.log(checkProfileCSS);
        checkProfileCSS.disabled = true;

      </script>


<!-- js de bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>


</html>
