<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/register', function () {
//     return view('register');
// });
//
// Route::post('/register', ['as' => '/register', 'uses' => 'UserController@save_user']);
//
// Route::get('/prueba', function () {
//     return view('contact');
// });


Route::prefix('/comics')->group( function () {

    // Route::get('crear', 'ComicController@create');
    Route::get('/crear', function () {
        return 'Soy Crear';
    });

    // Route::get('editar', 'ComicController@edit');
    Route::get('/editar', function () {
        return 'Soy Editar';
    });

    // Route::get('eliminar', 'ComicController@delete');
    Route::get('/eliminar', function () {
        return 'Soy Eliminar';
    });

    Route::get('/', function () {
        return 'Soy Comics';
    });

});


Route::prefix('/usuario')->name('usuario.')->group( function() {

    Route::get('/registro', function () {
        // return view('register');
        return 'Soy Registro';
    });

    Route::get('/logueo', function () {
        // return view('login');
        return 'Soy Logueo';
    });

    Route::get('/perfil', function () {
        // return view('user_profile');
        return 'Soy Perfil';
    });

});


Route::get('/contacto', function () {
    // return view('contact');
    return 'Soy Contacto';
});

Route::get('/preguntas-frecuentes', function () {
    // return view('faq');
    return 'Soy FAQ';
});

Route::get('/sobre-nosotros',  function () {
    // return view('sobre-nosotros');
    return 'Soy Sobre Nosotros';
});

Route::get('/', 'IndexController@cargarIndex');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
