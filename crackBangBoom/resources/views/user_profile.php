<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Crack Bang Boom!</title>
    <link href="css/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
    <link rel="stylesheet" href="css/main-style.css">
    <link rel="stylesheet" href="css/profile-style.css">
      <link rel="stylesheet" href="css/items-style-profile.css">
  </head>

  <body>

    <div id="desktop-container">

      <!--HEADER-->
      <?php include('layout/header.php'); ?>

    </div>

    <div id="desktop-container">

      <div class="container-fluid user-profile">

        <div class="column-A">

          <div class="row info-personal">

            <!--Imagen del user-->
            <div class="col-12 img-profile">
              <img src="images/icons/profile-pic.jpg" alt="">
            </div>

            <!--Info Personal del user-->
            <div class="col-12 name-user">
              <h1>Nombre Apellido</h1>
            </div>
            <div class="col-12 email-user">
              <h2>myuser@email.com</h2>
            </div>
            <div class="col-12 user-actions">
              <a href="#">Editar Info</a>
              <a href="#">Sing Out</a>
            </div>

          </div>

        </div>

        <div class="column-B">

          <!--Info del user en la WEB-->
          <div class="row containter info-purchase">

            <div class="info-bought">
              <a href="#">
                <h3>Mis Compras</h3>
              </a>
              <div class="allitems">
                <?php include ('layout/item-comic-bought.php')?>
              </div>
            </div>

            <div class="info-list">
              <a href="#">
                <h3>Mi Wish List</h3>
              </a>
              <div class="allitems">
                <?php include ('layout/item-comic-wishlist.php')?>
              </div>
            </div>

            <div class="info-history">
              <a href="#">
                <h3>Leídas recientemente</h3>
              </a>
              <div class="allitems readhistory">
                <?php include ('layout/item-comic-history.php')?>
              </div>
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

  </body>


</html>
