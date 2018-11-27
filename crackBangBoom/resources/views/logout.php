<?php
require("autoload.php");

$auth->logout();
header('Location:index.php');
exit;
