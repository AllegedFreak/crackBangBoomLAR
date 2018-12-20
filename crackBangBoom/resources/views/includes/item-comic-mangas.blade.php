{{-- @include('comics') --}}

@foreach ($comics->random(4) as $comic)


<div class="item">

  <a href="/comics/{{ $comic->id }}">


<!-- ***** Portada Comic ***** -->
    <div class="cover">
      <img src="/storage/comics{{ $comic->img_cover }}" alt="">
      <!-- <img src="" alt="oferta"> -->
    </div>
<!-- ***** Info Comic ***** -->
    <div class="info">
        <div class="title">
          <p>{{ $comic->title }}</p>
        </div>
        <div class="edition">
          <p>{{ $comic->edition }}</p>
        </div>
        <div class="price">
          <p>$ {{  $comic->price }}</p>
        </div>
    </div>
  </a>
</div>

@endforeach
