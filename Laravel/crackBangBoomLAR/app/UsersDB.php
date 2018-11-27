<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersDB extends Model
{
    //atributo para definir cuales campos en la tabla no pueden ser llenados por formulario o algun controller.
    protected $guarded = [];
    //para el caso que el modelo y la tabla no sigan la convencion de laravel, le decimos como se llama la tabla
    protected $table = "usuarios";

    protected $fillable = ['nombre_completo', 'nombre_usuario', 'email_usuario', 'pais_nacimiento', 'img_avatar', 'pass_usuario'];

}
