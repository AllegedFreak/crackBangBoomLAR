<?php

//var_dump($seccion);

$seccion = $_GET["seccion"];
// var_dump($seccion);

$id = $_GET["id"];
//var_dump($id);

//echo $mangas[$id]['title'];

function section($data) {

  include('layout/comics.php');

  $id = $_GET["id"];
  $seccion = $_GET["seccion"];

  //var_dump($id);

  switch ($seccion) {
    case 'novedades':
      return $novedades[$id][$data];
      break;

    case 'mangas':
      return $mangas[$id][$data];
      break;
  }
}

//var_dump( section('title') );

?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="css/main-style.css">
        <link rel="stylesheet" href="css/show-item.css">
    <title>Crack Bang Boom!</title>
  </head>

  <body>
    <div id="desktop-container">
      <!--HEADER-->
      <?php include('layout/header.php'); ?>
    </div>
  <div id="desktop-container">
    <div class="container-fluid">

<div class="row contenedor-columnas">

  <div class="col-12 col-md-4 columna-a">

    <!--- COLUMNA A -->

    <div class="row main-info">

      <div class="col-12 cover-item">
        <img src="<?php echo section('cover'); ?>" alt="">
      </div>

      <div class="col-12 d-md-none item-title">
        <h1><?php echo section('title'); ?></h1>
      </div>
      <div class="col-12 d-md-none item-subtitle">
        <h2><?php echo section('edition'); ?></h2>
      </div>

      <div class="col-12 item-price">
        <h6><?php echo section('price'); ?></h6>
      </div>

      <div class="col-12 buy-btn">
        <button type="button" name="buy">COMPRAR</button>
      </div>

      <div class="col-12 item-wish ">

          <a href="#">
            <img src="images/icons/wish-list.png" alt="">
          </a>

      </div>
    </div>
  </div>

  <div class="col columna-b">
    <!-- COLUMNA B -->
    <div class="row more-info">

      <div class="row justify-content-center">

        <div class="col-12 d-none d-md-block item-title">
          <h1><?php echo section('title'); ?></h1>
        </div>

        <div class="col-12 d-none d-md-block item-subtitle">
          <h2><?php echo section('edition'); ?></h2>
        </div>

        <div class="col-12 item-description">
          <h6>DESCRIPCIÓN:</h6>
        </div>
        <div class="col-12  item-resumen">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>

      <div class="row justify-content-start">

        <div class="col-xs-12 item-data">
          <ul>
            <li>EDITORIAL: Marvel</li>
            <li>AÑO: 1989</li>
            <li>AUTOR: George Perez</li>
            <li>DIBUJANTE: George Perez</li>
            <li>Genero: Superheroe</li>
          </ul>
        </div>
      </div>

      <?php //var_dump($id); ?>

    </div>
</div>


</div>



      </div>
    </div>

    <div id="desktop-container">
      <!--FOOTER-->
      <div class="container-fluid">
        <?php include('layout/footer.php'); ?>
      </div>
    </div>


    <script src="css/bootstrap/js/jquery-3.3.1.slim.min.js"></script>
    <script src="css/bootstrap/js/popper.min.js"></script>
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
