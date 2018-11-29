{{-- @include('comics') --}}

@php
foreach ($histories as $history) {

 @endphp

<div class="item">

  <a>
<!-- ***** Portada Comic ***** -->
    <div class="cover">
      <img src="@php echo $history['cover']; @endphp" alt="">
      <!-- <img src="" alt="oferta"> -->
    </div>
<!-- ***** Info Comic ***** -->
    <div class="info">
        <div class="title">
          <p>@php echo $history['title']; @endphp</p>
        </div>
        <div class="edition">
          <p>@php echo $history['edition']; @endphp</p>
        </div>

    </div>
  </a>
</div>

@php } @endphp
