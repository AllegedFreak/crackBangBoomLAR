@include('comics')
@php foreach ($charactersDC as $characterDC) { @endphp

<div class="item">
<!-- ***** Portada Comic ***** -->
    <div class="cover">
      <a>
      <img src="@php echo $characterDC['pic']; @endphp" alt="">
      <!-- <img src="" alt="oferta"> -->
      </a>
    </div>
<!-- ***** Info Comic ***** -->
    <div class="info">
        <div class="price">
          <p>@php echo $characterDC['position']; @endphp</p>
        </div>
        <div class="title">
          <a><p>@php echo $characterDC['character']; @endphp</p></a>
        </div>
        <div class="edition">
          <p><i>@php echo $characterDC['likes'].' likes'; @endphp</i></p>
        </div>
    </div>

</div>

@php } @endphp
