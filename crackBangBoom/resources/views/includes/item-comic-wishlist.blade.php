{{-- @include('comics') --}}

@php
foreach ($wishes as $wishlist) {

 @endphp

<div class="item">

  <a>
<!-- ***** Portada Comic ***** -->
    <div class="cover">
      <img src="@php echo $wishlist['cover']; @endphp" alt="">
      <!-- <img src="" alt="oferta"> -->
    </div>
<!-- ***** Info Comic ***** -->
    <div class="info">
        <div class="title">
          <p>@php echo $wishlist['title']; @endphp</p>
        </div>
        <div class="edition">
          <p>@php echo $wishlist['edition']; @endphp</p>
        </div>

    </div>
  </a>
</div>

@php } @endphp
