<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticatorController extends Controller
{
  //recibe un email y lo guarda en una $_SESSION
  public function loguear($email){
  $_SESSION['logueado'] = $email;
  //Guarda en indice logueado el mail recibido
  }

  //cookie que guardo del lado del navegador para que me recuerde
  public function recuerdame(){
  setcookie('logueado', $email, time()+3600*24*30);
  //guardo la cookie por un mes
  }

  //verifica si hay alguien logueado
  public function estoyLogueado(){
  return isset($_SESSION['logueado']);
  //devuelve true o false si hay mail guardado en el indice logueado
  }

  //
  public function logout(){
  setcookie('logueado', NULL, time()-1);
  // destruyo la cookie donde se guarda la session
  session_destroy();
  //lo uso cuando le dan click a logout
  }

  public function usuarioLogueado($base){
    if($this->estoyLogueado()){
        $base->traerEmail($_SESSION['logueado']);
        return $loguado;
    } else {
      return NULL;
    }
  }
}
