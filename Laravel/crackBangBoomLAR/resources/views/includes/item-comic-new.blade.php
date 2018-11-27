@include('comics')

@php
foreach ($novedades as $novedad) {
@endphp

<div class="item">

  <a href="show-item.php?seccion=novedades&id=@php echo $novedad['id'];@endphp">
<!-- ***** Portada Comic ***** -->
    <div class="cover">
      <img src="@php echo $novedad['cover']; @endphp" alt="">
      <!-- <img src="" alt="oferta"> -->
    </div>
<!-- ***** Info Comic ***** -->
    <div class="info">
        <div class="title">
          <p>@php echo $novedad['title']; @endphp</p>
        </div>
        <div class="edition">
          <p>@php echo $novedad['edition']; @endphp</p>
        </div>
        <div class="price">
          <p>@php echo $novedad['price']; @endphp</p>
        </div>
    </div>
  </a>
</div>

@php } @endphp
