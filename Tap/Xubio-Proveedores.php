<!DOCTYPE html>
<html>
<body>

<?php

//API XUBIO - BUSCAMOS ACCEDER A LA INFO DE NUESTRO SISTEMA CONTABLE VIA WEB SERVICES
//Documentacion en https://xubio.com/API/documentation/index.html

//BUSCAMOS EL ACCESS TOKEN
  // Hardcodeamos User y Pass de Xubio temporalmente
  $username= '607656336890009807401818354340136410749700664977405702784183800128124627446063368607653663735039';
  $password= 'o9kFh78w1=A0kyqbEyjpGVkM5dGysLuNhKjN6p0I3HB_Aoh08=WzOyd7*v/96M*afTpP=AUDz*vgNAKw+oZN4*CUBxLFTS*kI-fUxto9kFh78w1=A0kyqbEyjpGVkM5dG';

  // Iniciamos Curl para obtener el Access Token por REST
  $ch = curl_init();

  // Si hay error lo capturamos y lo mostramos
  if (FALSE === $ch)
      throw new Exception('failed to initialize');

  // definimos los parametros de la consulta curl
      curl_setopt($ch, CURLOPT_URL,"https://xubio.com/API/1.1/TokenEndpoint"); //URL del Token
      curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded')); //Definimos Content-Type
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //Pedimos que la respuesta sea completa y no solo un Boolean True False
      curl_setopt($ch, CURLOPT_HEADER, 0); //Pedimos que sea sin Header
      curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password); //Enviamos Usuario y Pass
      curl_setopt($ch, CURLOPT_PROXY, ''); //Definimos que es sin Proxy
      curl_setopt($ch, CURLOPT_POST, 1); //Definimos que es via POST
      curl_setopt($ch, CURLOPT_FRESH_CONNECT, TRUE); //Ni idea
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); //No es SSL
      curl_setopt($ch, CURLOPT_POSTFIELDS,'grant_type=client_credentials'); //Enviamos este texto que pide Xubio

  //ejecutamos el Curl y guardamos su rta en $response
  $response= curl_exec($ch);
  //cerramos el Curl
  curl_close($ch);
  //la rta del curl es un JSON, lo transformamos en un array legible por PHP
  $jsontk= json_decode($response, true);
  //capturamos el Access Token
  $token= $jsontk['access_token'];
  //Vardumpeamos el Access Token para verificar
  //var_dump($token);

//FIN ACCESS TOKEN - TENEMOS EL ACCESS TOKEN AHORA PODEMOS UTILIZAR LOS RECURSOS DE LA API
?>

<?php
//ABRIMOS CONEXION A NUESTRA BD

  $dsn = 'mysql:host=localhost;dbname=CG';
  $user = 'root';
  $pass = 'root';
  $opt= [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];

  try{
      //me conecto a la BD
      $conex = new PDO($dsn, $user, $pass, $opt);

    }catch( PDOException $ex ){

        echo 'El error es:'. $ex->getMessage();
    }
//FIN CONEXION => CONEXION ABIERTA
 ?>

<?php
//USAMOS RECURSOS API
//INICIO CONSULTA FACTURAS COMPRAS: Documentacion->  https://xubio.com/API/documentation/index.html#!/ComprobanteDeCompra/getFacturaCompraBeans

  //Iniciamos CURL
  $ch = curl_init();
  //Si hay error lo capturamos y lo mostramos
  if (FALSE === $ch)
      throw new Exception('failed to initialize Recurso API - Token OK');

  //definimos los parametros de la consulta curl
      curl_setopt($ch, CURLOPT_URL,"https://xubio.com:443/API/1.1/ProveedorBean"); //Url del recurso
      curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Authorization: Bearer '.$token)); //Eviamos el Token de Acceso
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //Pedimos que la respuesta sea completa y no solo un Boolean True False
      curl_setopt($ch, CURLOPT_HEADER, 0); //Pedimos que sea sin Header
      curl_setopt($ch, CURLOPT_PROXY, ''); //Sin Proxy
      curl_setopt($ch, CURLOPT_POST, 0); //Es por GET asi que POST = Falso
      curl_setopt($ch, CURLOPT_FRESH_CONNECT, TRUE); //Ni idea
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); //No es SSL

  //ejecutamos el Curl y guardamos su rta en $response
  $response= curl_exec($ch);
  //cerramos el Curl
  curl_close($ch);
  //la rta del curl es un JSON, lo transformamos en un array legible por PHP
  $jsoncc= json_decode($response, true);
  //Varduampeamos resultado de la consulta a XUBIO para verificar
  var_dump($jsoncc[0]);

  //FIN CONSULTA COMPROBANTE DE COMPRA - TENEMOS LOS COMPROBANTES AHORA PODEMOS UTILIZAR INSERTARLOS A LA BASE DE DATOS

  //INSERTAMOS CONSULTA COMPROBANTE DE COMPRA EN LA BASE DE DATOS

  //si existen datos de la API borramos la tabla vieja primero porque hay info que pudo haber cambiado del pasado o se pudo haber borrado algo.
  // if($jsoncc){
  //   $sqldelete = 'DELETE FROM factucompra';
  //   $del = $conex->prepare($sqldelete);
  //   $del->execute();
  // //después de borrar insertamos toda la información a la tabla vacía
  // foreach ($jsoncc as $comprobante) {
  //       $sqlinsert = 'INSERT INTO factucompra (type, IDcircuitoContable, descripcion, fecha, importeGravado, importeImpuestos, importetotal, NOMBREmoneda, numeroDocumento, cotizacion, transaccionid, fechaComprobante, IDproveedor, NOMBREproveedor, importeMonPrincipal, tipo) VALUES (:type, :IDcircuitoContable, :descripcion, :fecha, :importeGravado, :importeImpuestos, :importetotal, :NOMBREmoneda, :numeroDocumento, :cotizacion, :transaccionid, :fechaComprobante, :IDproveedor, :NOMBREproveedor, :importeMonPrincipal, :tipo)';
  //       $ins = $conex->prepare($sqlinsert);
  //       $ins->bindValue(':type', $comprobante['type']);
  //       $ins->bindValue(':IDcircuitoContable', $comprobante['circuitoContable']['ID']);
  //       $ins->bindValue(':descripcion', $comprobante['descripcion']);
  //       $ins->bindValue(':fecha', $comprobante['fecha']);
  //       $ins->bindValue(':importeGravado', $comprobante['importeGravado']);
  //       $ins->bindValue(':importeImpuestos', $comprobante['importeImpuestos']);
  //       $ins->bindValue(':importetotal', $comprobante['importetotal']);
  //       $ins->bindValue(':NOMBREmoneda', $comprobante['moneda']['nombre']);
  //       $ins->bindValue(':numeroDocumento', $comprobante['numeroDocumento']);
  //       $ins->bindValue(':cotizacion', $comprobante['cotizacion']);
  //       $ins->bindValue(':transaccionid', $comprobante['transaccionid']);
  //       $ins->bindValue(':fechaComprobante', $comprobante['fechaComprobante']);
  //       $ins->bindValue(':IDproveedor', $comprobante['proveedor']['ID']);
  //       $ins->bindValue(':NOMBREproveedor', $comprobante['proveedor']['nombre']);
  //       $ins->bindValue(':importeMonPrincipal', $comprobante['importeMonPrincipal']);
  //       $ins->bindValue(':tipo', $comprobante['tipo']);
  //       $ins->execute();
  //   }
  // }
  //FIN DE INSERCION CONSULTA COMPROBANTE DE COMPRAA LA BASE DE DATOS
?>
</body>
</html>
