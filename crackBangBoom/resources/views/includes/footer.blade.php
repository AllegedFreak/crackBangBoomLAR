<footer class="row">

  <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">

  <div class="socialmedia col-12">
    <ul>
      <li><a href="#"><span class="ion-social-facebook"></span></a></li>
      <li><a href="#"><span class="ion-social-twitter"></span></a></li>
      <li><a href="#"><span class="ion-social-instagram"></span></a></li>
      <li><a href="#"><span class="ion-social-pinterest"></span></a></li>
    </ul>
  </div>

  <div class="bottom-menu col-12">
    <a href="/sobre-nosotros">Sobre nosotros</a> | <a href="/preguntas-frecuentes">FAQs</a> | <a href="/contacto">Contacto</a> | @if (Auth::check()) <a href="/usuario/deslogueo">Logout</a> |@endif <a href="/usuario/logueo">Ingresar</a>
  </div>

  <div class="signature col-12">
    © Grupo N°4
  </div>

</footer>
