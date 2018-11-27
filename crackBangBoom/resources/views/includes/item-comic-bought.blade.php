@include('comics')

@php
foreach ($boughts as $bought) {

 @endphp

<div class="item">

  <a>
<!-- ***** Portada Comic ***** -->
    <div class="cover">
      <img src="@php echo $bought['cover']; @endphp" alt="">
      <!-- <img src="" alt="oferta"> -->
    </div>
<!-- ***** Info Comic ***** -->
    <div class="info">
        <div class="title">
          <p>@php echo $bought['title']; @endphp</p>
        </div>
        <div class="edition">
          <p>@php echo $bought['edition']; @endphp</p>
        </div>

    </div>
  </a>
</div>

@php } @endphp
