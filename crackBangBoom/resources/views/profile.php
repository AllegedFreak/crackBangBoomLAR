<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
      <link href="css/bootstrap/css/bootstrap.css" rel="stylesheet">
      <link rel="stylesheet" href="css/main-style.css">
      <link rel="stylesheet" href="css/profile-style.css">
      <link rel="stylesheet" href="items-style-profile.css">
    <title>Mi Perfil!</title>
  </head>
  <body>
      <!--HEADER-->
      <?php include('layout/header.php'); ?>

      <div class="container-fluid">

        <!--Imagen del usuario-->
        <div class="row img-perfil">
          <img src="images/icons/profile-pic.jpg" alt="">
        </div>
        <!--Info Personal del usuario-->
        <div class="row info-personal">
          <div class="col-12 nombre-usuario">
            <h1>Nombre Apellido</h1>
          </div>
          <div class="col-12 edit-info-personal">
            <ul class="col-12">
              <li><a class=""href="#">Editar Info</a></li>
              <li><a class=""href="#">Sing Out</a></li>
            </ul>

          </div>

        </div>
        <!--Info del usuario en la WEB-->
        <div class="row info-web">

          <div class="info-compras">
            <a href="#"> <p>Compras</p> </a>
            <p> Todas tus compras realizadas</p>
          </div>

          <div class="info-list">
            <a href="#"> <p>Wish List</p> </a>
            <p> Favoritos guardados</p>
          </div>

          <div class="info-pago">
              <a href="#"> <p>Método de pago</p> </a>
              <p>Editar o agregar método de pago</p>
          </div>
        </div>

        <!--FOOTER-->
        <div class="container-fluid">
          <?php include('layout/footer.php'); ?>
        </div>

      </div>


  </body>
</html>
