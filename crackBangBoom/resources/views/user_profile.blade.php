@extends('layouts.main')

@section('content')
<div id="desktop-container">

  <div class="container-fluid user-profile">

    <div class="column-A">

      <div class="row info-personal">

        <!--Imagen del user-->
        <div class="col-12 img-profile">
          <img src="/images/icons/profile-pic.jpg" alt="">
        </div>

        <!--Info Personal del user-->
        <div class="col-12 name-user">
          <h1> {{ Auth::user()->name }} </h1>
        </div>
        <div class="col-12 email-user">
          <h2> {{ Auth::user()->email }} </h2>
        </div>
        <div class="col-12 user-actions">
          <a href="#" style="display: none;" >Editar Info</a>
          <a href="/usuario/deslogueo" >Sign Out</a>
        </div>

      </div>

    </div>

    <div class="column-B">

      <!--Info del user en la WEB-->
      <div class="row containter info-purchase">

        <div class="info-bought" style="background-color: #E52328;">
          <a href="#">
            <h3>Mis Compras</h3>
          </a>
          <div class="allitems">

            @include('includes.item-comic-profile')

          </div>
        </div>

        <div class="info-history">
          <a href="#">
            <h3>Leídas recientemente</h3>
          </a>
          <div class="allitems readhistory">

            @include('includes.item-comic-profile')

          </div>
        </div>

        <div class="info-bought" style="display: none;">
          <a href="#">
            <h3>Mis Compras</h3>
          </a>
          <div class="allitems">
            <!-- (arroba)include('includes.item-comic-bought') -->
          </div>
        </div>

        <div class="info-list" style="display: none;">
          <a href="#">
            <h3>Mi Wish List</h3>
          </a>
          <div class="allitems">
            <!-- (arroba)include('includes.item-comic-wishlist') -->
          </div>
        </div>

      </div>

    </div>

  </div>

</div>

<script>

  //habilita items-style-profile.css
  var checkProfileCSS = document.querySelector('.just-for-profile');
  //console.log(checkProfileCSS);
  checkProfileCSS.disabled = false;

</script>

@endsection
