<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

  </head>
  <body>
    <div id="desktop-container">
      @include('includes.header')
    </div>

    <br>

    <div>
      @yield('content')
    </div>

    <br>

    <div class="container-fluid">
      @include('includes.footer')
    </div>

  </body>

</html>
