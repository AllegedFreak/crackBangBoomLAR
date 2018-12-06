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
    <link rel="stylesheet" href="/css/profile-style.css">
    <link rel="stylesheet" href="/css/items-style-profile.css">
    <link rel="stylesheet" href="/css/contact-style.css">
    <link rel="stylesheet" href="/css/faq-style.css">
    <link rel="stylesheet" href="/css/item-style-1.css">
    <link rel="stylesheet" href="/css/item-style-2.css">
    <link rel="stylesheet" href="/css/item-style-profile.css">
    <link rel="stylesheet" href="/perfil.css">
    <link rel="stylesheet" href="/show-item.css">
    <link rel="stylesheet" href="/styleforms.css">
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

  </body>


</html>
