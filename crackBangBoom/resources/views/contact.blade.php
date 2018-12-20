@php

  // var_dump($_POST);

  //variables Errores
  $errorName      = "";
  $errorEmail     = "";
  $errorAsunto    = "";
  $errorComments  = "";

  //valores Temporales
  $tempName     = '';
  $tempEmail    = '';
  $tempAsunto   = '';
  $tempComments = '';


  if ($_POST) {
    //sanitizar la variable
      $tempName     = trim ($_POST['name']);
      $tempEmail    = trim ($_POST['email']);
      $tempAsunto   = trim ($_POST['asunto']);
      $tempComments = trim ($_POST['comments']);

    //valido los datos
      if (empty($_POST['name'])) {
        $errorName = 'Podes decirnos tu identidad secreta...';
      } else if ( strlen($_POST['name'])<2 ) {
        $errorName = 'Tu nombre debe tener al menos dos letras';
      }

      if (is_numeric($_POST['name']===true)) {
        $errorName = 'No sos un Robot...tu Nombre no tiene números';
      }

      if (empty($_POST['email'])) {
        $errorEmail = 'Dejanos tu email para una respuesta';
      } else if (filter_var( $_POST['email'] , FILTER_VALIDATE_EMAIL )===false) {
        $errorEmail = 'El Correo es inválido!';}

        if (empty($_POST['asunto'])) {
          $errorAsunto = 'Ingresá un Asunto para tu mensaje';
        }

        if (empty($_POST['comments'])) {
          $errorComments = 'Ingresá tu Mensaje';
        }
    }

@endphp

@extends('layouts.main')

@section('content')

<div class="container-fluid contact-principal">
<!--Formulario -->
  <form class="contact-form" action="contact.php" method="POST">

    <!--Titulo -->
    <div class="row-justify-content-center titulo-contact">
      <h1 clas="col-12">CONTACTO</h1>
      <p>Dejanos tu mensaje, duda o consulta despues de la señal... PIIIIP!</p>
    </div>

    <!--Datos del Formulario -->
    <label for=""> Nombre:</label>
    <br>
        <input type="text" name="name" value="@php echo $tempName;@endphp">
        <span class="contact-error"> @php echo $errorName; @endphp </span>
      <br><br>
    <label>E-Mail:</label>
      <br>
        <input type="email" name="email" value="@php echo $tempEmail;@endphp">
        <span class="contact-error"> @php echo $errorEmail; @endphp </span>
      <br><br>
    <label for=""> Asunto:</label>
        <br>
        <input type="text" name="asunto" value="@php echo $tempAsunto;@endphp">
        <span class="contact-error"> @php echo $errorAsunto; @endphp </span>
      <br><br>
    <label for=""> Mensaje: </label>
        <br>
        <span class="contact-error"> @php echo $errorComments; @endphp </span>
        <textarea name="comments" value="@php echo $tempComments;@endphp" placeholder="Dejanos tu comentario aquí" ></textarea>

      <br><br>
    <div class="row justify-content-center">
        <button class="col-4" type="submit" class="button">  Enviar! </button>
    </div>

  </form>

</div>

@endsection
