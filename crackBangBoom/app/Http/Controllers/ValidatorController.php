<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class validator extends Controller
{
    private $Countries = ["Argentina", "Bolivia", "Chile", "Colombia", "Costa Rica", "Cuba", "Ecuador", "El Salvador", "España", "Estados Unidos", "Guatemala", "Guinea Ecuatorial", "Honduras", "México", "Nicaragua", "Panamá", "Paraguay", "Perú", "RepúblicaDominicana", "Uruguay", "Venezuela", "Otros Países", "Afganistán", "Albania", "Alemania", "Andorra", "Angola", "Anguilla", "Antártida", "Antigua y Barbuda", "Antillas Holandesas", "Arabia Saudí", "Argelia", "Armenia", "Aruba", "Australia", "Austria", "Azerbaiyán", "Bahamas", "Bahrein", "Bangladesh", "Barbados", "Bélgica", "Belice", "Benin", "Bermudas", "Bielorrusia", "Birmania", "Bosnia y Herzegovina", "Botswana", "Brasil", "Brunei", "Bulgaria", "Burkina Faso", "Burundi", "Bután", "Cabo Verde", "Camboya", "Camerún", "Canadá", "Chad", "China", "Chipre", "Ciudad del Vaticano", "Comores", "Congo", "Congo, República Democrática del", "Corea", "Corea del Norte", "Costa de Marfíl", "Costa Rica", "Croacia (Hrvatska)", "Dinamarca", "Djibouti", "Dominica", "Egipto", "Emiratos Árabes Unidos", "Eritrea", "Eslovenia", "Estonia", "Etiopía", "Fiji", "Filipinas", "Finlandia", "Francia", "Gabón", "Gambia", "Georgia", "Ghana", "Gibraltar", "Granada", "Grecia", "Groenlandia", "Guadalupe", "Guam", "Guayana", "Guayana Francesa", "Guinea", "Guinea-Bissau", "Haití", "Hungría", "India", "Indonesia", "Irak", "Irán", "Irlanda", "Isla Bouvet", "Isla de Christmas", "Islandia", "Islas Caimán", "Islas Cook", "Islas de Cocos o Keeling", "Islas Faroe", "Islas Heard y McDonald", "Islas Malvinas", "Islas Marianas del Norte", "Islas Marshall", "Islas menores de Estados Unidos", "Islas Palau", "Islas Salomón", "Islas Svalbard y Jan Mayen", "Islas Tokelau", "Islas Turks y Caicos", "Islas Vírgenes (EEUU)", "Islas Vírgenes (Reino Unido)", "Islas Wallis y Futuna", "Israel", "Italia", "Jamaica", "Japón", "Jordania", "Kazajistán", "Kenia", "Kirguizistán", "Kiribati", "Kuwait", "Laos", "Lesotho", "Letonia", "Líbano", "Liberia", "Libia", "Liechtenstein", "Lituania", "Luxemburgo", "Macedonia, Ex-República Yugoslava de", "Madagascar", "Malasia", "Malawi", "Maldivas", "Malí", "Malta", "Marruecos", "Martinica", "Mauricio", "Mauritania", "Mayotte", "Micronesia", "Moldavia", "Mónaco", "Mongolia", "Montserrat", "Mozambique", "Namibia", "Nauru", "Nepal", "Níger", "Nigeria", "Niue", "Norfolk", "Noruega", "Nueva Caledonia", "Nueva Zelanda", "Omán", "Países Bajos", "Papúa Nueva Guinea", "Paquistán", "Pitcairn", "Polinesia Francesa", "Polonia", "Portugal", "Puerto Rico", "Qatar", "Reino Unido", "República Centroafricana", "República Checa", "República de Sudáfrica", "República Eslovaca", "Reunión", "Ruanda", "Rumania", "Rusia", "Sahara Occidental", "Saint Kitts y Nevis", "Samoa", "Samoa Americana", "San Marino", "San Vicente y Granadinas", "Santa Helena", "Santa Lucía", "Santo Tomé y Príncipe", "Senegal", "Seychelles", "Sierra Leona", "Singapur", "Siria", "Somalia", "Sri Lanka", "St Pierre y Miquelon", "Suazilandia", "Sudán", "Suecia", "Suiza", "Surinam", "Tailandia", "Taiwán", "Tanzania", "Tayikistán", "Territorios franceses del Sur", "Timor Oriental", "Togo", "Tonga", "Trinidad y Tobago", "Túnez", "Turkmenistán", "Turquía", "Tuvalu", "Ucrania", "Uganda", "Uzbekistán", "Vanuatu", "Vietnam", "Yemen", "Yugoslavia", "Zambia", "Zimbabue"];

  //Validaciones del LOGIN
  function validarLogin($data,BD $base) {
    $errores = [];

    if ($data["Email"] == "") {
      $errores["email"] = "Completar Email!";
    }
    else if (filter_var($data["Email"], FILTER_VALIDATE_EMAIL) == false) {
      $errores["email"] = "Email con formato invalido";
    } else if ($base->traerEmail($data["Email"]) == NULL) {
      $errores["email"] = "Usuario no Registado!";
    }

    $usuario = $base->traerEmail($data["Email"]);

    if ($data["Password"] == "") {
      $errores["pass"] = "Completar contraseña";
    } else if ($usuario != NULL) {
        if (password_verify($data["Password"], $usuario->pass_usuario) == false) {
        $errores["pass"] = "La contraseña no es correcta!";
      }
    }
    return $errores;
  }

  public function validarDatos($data, BD $base){

    $errores=[];


    if($data['NombreCompleto']== ""){
      $errores['NombreCompleto'] ="Bang! Este es un campo requerido";
    }

    if(ctype_digit( substr($data['NombreCompleto'], 0, 1))){
      $errores['NombreCompleto'] ='No eres un Robot, tu Nombre no puede empezar con un número';
    }

    //Verificamos si el Nombre de Usuario es Válido
    if(empty($data['NombreUsuario'])) {
      $errores['NombreUsuario'] = 'Boom! Este es un campo requerido';
    }

    //Verificar si existe en la BD
    if($base->traerUsername($data['NombreUsuario']) != NULL) {
     $errores['NombreUsuario'] = "Crack! Este Usuario ya se encuentra registrado";
    }

    //Verificamos si el País seleccionado es válido y está en nuestro Array $Countries
    if(in_array($data['PaisNacimiento'], $this->Countries) == "") {
      $errores['PaisNacimiento'] = 'Boom! Por favor selecciona un país de la lista';
    }

    //Verificamos si el Email es válido
    if (filter_var($data['Email'] , FILTER_VALIDATE_EMAIL )===false) {
      $errores['Email'] = 'Bang! El Correo es inválido';
    }

    if(empty($data["Email"])) {
      $errores['Email'] = 'Bang! Este es un campo requerido';
      }

    if($base->traerEmail($data['Email']) != NULL){
     $errores['Email'] = "Crack! Este mail ya se encuentra registrado";
   }

    //Verificamos si la password es válida
    if (empty($data["Password"])) {
      $errores["password"] = 'Boom! Este es un campo requerido';
    }

    if (strlen($data["Password"])<8) {
      $errores["password"] = 'Boom! Tu constraseña debe tener al menos 8 caracteres';
    }

    if ($data["Password2"] == "") {
      $errores["Password2"] = 'Bang! Este es un campo requerido';
    }

    if ($data["Password"] !== $data["Password2"]) {
      $errores["Password2"] = 'Bang! Las contraseñas deben coincidir';
    }

    return $errores;
  }
}
