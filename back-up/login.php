<?php

require("autoload.php");

//si estoy logueado me redirige al Index.php
if ($auth->estoyLogueado()) {
  header('Location:index.php');
  exit;
}

if($_POST){
  $errores = $validator->validarLogin($_POST, $base);
  var_dump($errores);

  if (!$errores) {
   $auth->loguear($_POST['Email']);
   header('Location:user_profile.php');
  }
}


var_dump($_SESSION);


?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Crack Bang Boom! - Login</title>
    <link href="css/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
    <link rel="stylesheet" href="css/main-style.css">
    <link rel="stylesheet" href="css/contact-style.css">
    <link rel="stylesheet" type="text/css" href="css/faq-style.css">
  </head>
  <body>

    <div id="desktop-container">

      <!--HEADER-->
      <?php include('layout/header.php'); ?>

    </div>

    <div class="container-fluid contact-principal">

			<form class="contact-form" action="" method="post" id="login">

					<!--Titulo -->
	        <div class="row titulo-contact">
	          <h1 class="col-12">¡Loggeate!</h1>
						<p class="col-12">¿Aún no tenes cuenta? <a href="register.php">REGISTRATE!</a></p>
	        </div>
					<br>

					<!--Datos del Formulario -->
					<label>Email:</label>
						<br>
							<input type="text" name="Email" value="<?php echo '' ?>">
						<br>
					<label class="error"><?php echo $errores['email']??""; ?></label>
					<br>


					<label>Constraseña:</label>
						<br>
					    <input type="password" name="Password" >
						<br>
					<label class="error"><?php echo $errores['pass']??""; ?></label>
					<br>

					<button type="submit" class:"btn-first">
						Ingresar
					</button>

					<button type="reset" class:"btn-last">
						Olvide Mi Constraseña
					</button>


			</form>

    </div>


    <div id="desktop-container">

      <!--FOOTER-->
      <div class="container-fluid">
        <?php include('layout/footer.php'); ?>
      </div>

    </div>

  </body>
</html>
