<div class="fullbanner">

  <!-- IMAGES -->

  <div class="image">
    <img src="/images/banner2/1.jpg" alt="">
    <div class="text">IronMan</div>
  </div>

  <div class="image">
    <img src="/images/banner2/2.jpg" alt="">
    <div class="text">Spiderman</div>
  </div>

  <div class="image">
    <img src="/images/banner2/3.jpg" alt="">
    <div class="text">Superman</div>
  </div>

  <div class="image">
    <img src="images/banner2/4.jpg" alt="">
    <div class="text">Deadpool</div>
  </div>

  <div class="image">
    <img src="/images/banner2/5.jpg" alt="">
    <div class="text">Flash</div>
  </div>

  <!-- BOTONES -->

  <a href="#" class="back" onclick="goBack()"><img src="/images/icons/arrow.svg" alt="atrás"></a>
  <a href="#" class="forth" onclick="goForth()"><img src="/images/icons/arrow.svg" style="transform: scaleX(-1);" alt="adelante"></a>

  <!-- PUNTOS -->

  <div class="dots">
    <span class="dot" onclick="showImg(0)"><img src="/images/icons/dot.svg" alt=""></span>
    <span class="dot" onclick="showImg(1)"><img src="/images/icons/dot.svg" alt=""></span>
    <span class="dot" onclick="showImg(2)"><img src="/images/icons/dot.svg" alt=""></span>
    <span class="dot" onclick="showImg(3)"><img src="/images/icons/dot.svg" alt=""></span>
    <span class="dot" onclick="showImg(4)"><img src="/images/icons/dot.svg" alt=""></span>
  </div>

  <!-- PLAY/PAUSA -->

  <div class="button">
    <a href="#" onclick="playpause()">
      PAUSE
    </a>
  </div>

</div>

<script>

  window.onload = function () {
    var firstSelection = document.querySelector(".image");
    firstSelection.className += " selected";

    var firstActive = document.querySelector(".dot");
    firstActive.className += " active";
  }

  var selected = 0;
  var active = 0;

  function showImg(n) {
    var img = document.getElementsByClassName("image");
    for (var i = 0; i < img.length; i++) {
      if ( img[i].className.includes("selected") ) {
        img[i].className = img[i].className.replace("selected","") ;
        break;
      }
    }
    selected = n;
    img[n].className += " selected";

    var dot = document.getElementsByClassName("dot");
    for (var i = 0; i < dot.length; i++) {
      if ( dot[i].className.includes("active") ) {
        dot[i].className = dot[i].className.replace("active","") ;
        break;
      }
    }
    active = n;
    dot[n].className += " active";
  }

  function goForth() {
    selected++;
    if (selected > 4) {
      selected = 0;
    }
    showImg(selected);
  }

  function goBack() {
    selected--;
    if (selected < 0) {
      selected = 4;
    }
    showImg(selected);
  }

  var speed = 10000;
  var play = setInterval("goForth()", speed);

  function playpause() {
    var btn = document.querySelector(".button");
    console.log(btn);
    if (play == null) {
      btn.innerHTML = '<a href="#" onclick="playpause()">PAUSE</a>';
      play = setInterval("goForth()", speed);
    } else {
      clearInterval(play);
      play = null;
      btn.innerHTML = '<a href="#" onclick="playpause()">PLAY</a>';
    }
  }

</script>



<!-- <div class="row content">

  <div class="col-12 slide">
    <a href="#" style="display:none;"><img src="images/icons/arrow.svg" class="arrow-right" alt=""></a>
    <img src="images/icons/icon-cbb.svg" alt="">
    <a href="#" style="display:none;"><img src="images/icons/arrow.svg" class="arrow-left" alt=""></a>
  </div>

  <div class="col-12 go-bottom">
    <div class="dots">
      <a href="#"><img src="images/icons/dot.svg" alt=""></a>
      <a href="#"><img src="images/icons/dot.svg" alt=""></a>
      <a href="#"><img src="images/icons/dot.svg" alt=""></a>
      <a href="#"><img src="images/icons/dot.svg" alt=""></a>
      <a href="#"><img src="images/icons/dot.svg" alt=""></a>
    </div>
  </div>

</div> -->
