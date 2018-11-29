{{-- @include('comics') --}}

@php
foreach ($mangas as $manga) {
@endphp

<div class="item">

  <a href="show-item.php?seccion=mangas&id=@php echo $manga['id']; @endphp">
    @php //echo $manga['id']; @endphp
<!-- ***** Portada Comic ***** -->
    <div class="cover">
      <img src="@php echo $manga['cover']; @endphp" alt="">
      <!-- <img src="" alt="oferta"> -->
    </div>
<!-- ***** Info Comic ***** -->
    <div class="info">
        <div class="title">
          <p>@php echo $manga['title']; @endphp</p>
        </div>
        <div class="edition">
          <p>@php echo $manga['edition']; @endphp1</p>
        </div>
        <div class="price">
          <p>@php echo $manga['price']; @endphp</p>
        </div>
    </div>
  </a>
</div>

@php } @endphp
