<header class="container-fluid">

<!--NAV PRINCIPAL-->
  <div class="row nav1">
<!-- ***** icono menu ***** -->
    <div id="nav-menu" class="">
      <div class="menu">
        <label for="menu-check" id="menu-toggle">
          <img class="img-menu" src="/images/icons/menu.png" alt="menu">
        </label>
      </div>
    </div>


<!-- ***** logo ***** -->
    <div id="nav-logo" class="">
      <a href="/"><img src="/images/icons/icon-cbb-02.svg" alt="CBB"></a>
    </div>

    <!-- ***** checkbox ***** -->
    <input type="checkbox" id="menu-check">
    <!-- ***** nav ***** -->
    <nav class="navigation">
      <ul class="navigation-ul">
          <li><a href="/sobre-nosotros">Sobre Nosotros</a></li>
          <li><a href="/preguntas-frecuentes">FAQs</a></li>
          <li><a href="/contacto">Contacto</a></li>
          @if (Auth::check())
          <li><a href="/usuario/perfil">Mi Perfil</a></li>
          <li><a href="/usuario/deslogueo">Logout</a></li>
          @else
          <li><a href="/usuario/logueo">Ingresar</a></li>
          <li><a href="/usuario/registro">Registrarme</a></li>@endif


        </ul>
    </nav>

<!-- ***** lupa ***** -->
    <div id="nav-search" class="">
      <a href="#" style="display:none;">
        <img src="/images/icons/search.png" alt="search">
      </a>
    </div>

  </div>

  <!--NAV SECUNDARIO-->
  <nav class="row justify-content-around nav2" style="display:none;">
    <ul class="row btn-nav">
        <li class="col-4"><a href="#">Ranking</a></li>
        <li class="col-4"><a href="#">Populares</a></li>
        <li class="col-4"><a href="#">Oferta</a></li>
    </ul>
  </nav>

</header>

<header class="bg-nav bg-nav-1"></header>

<!-- <header class="bg-nav">
  <div class="bg-nav-1"></div>
</header> -->
