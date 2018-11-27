<?php
session_start();
require("models/User.php");
require("models/Validator.php");
require("models/Authenticator.php");
require("models/BD.php");
// require("models/Validator_registrar.php");
// require("models/Validator_login.php");
//require("models/User-Inscript.php");

$validator = new Validator();
$base = new BD();
$auth = new Auth();
