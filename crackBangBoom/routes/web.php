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

            //HAY QUE SUMAR ->middleware('auth')
//Route::prefix('/comics')->middleware('auth')->group( function () {
Route::prefix('/comics')->group( function () {

    // Route::get('crear', 'ComicController@create');
    Route::get('/create', 'ComicController@create');
    Route::post('/create', 'ComicController@store');

    // Route::get('editar', 'ComicController@edit');
    Route::get('/editar', function () {
        return 'Soy Editar <a href="/">Inicio</a>';
    });

    // Route::get('eliminar', 'ComicController@delete');
    Route::get('/eliminar', function () {
        return 'Soy Eliminar <a href="/">Inicio</a>';
    });

    Route::get('/', function () {
        return 'Soy Comics <a href="/">Inicio</a>';
    });

});


Route::prefix('/usuario')->name('usuario.')->group( function() {

    Route::get('/registro', function () {
        return view('register');
    });

    Route::get('/logueo', function () {
        return view('login');
    });

    Route::get('/perfil', function () {
        return view('user_profile');
        // return 'Soy Perfil';
    });

});




//Logueo por Google
Route::get('login/google', 'Auth\LoginController@redirectToProviderGoogle');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallbackGoogle');




Route::get('/contacto', function () {
    // return view('contact');
    return 'Soy Contacto <a href="/">Inicio</a>';
});

Route::get('/preguntas-frecuentes', function () {
    // return view('faq');
    return 'Soy FAQ <a href="/">Inicio</a>';
});

Route::get('/sobre-nosotros',  function () {
    return view('sobre-nosotros');
    //return 'Soy Sobre Nosotros <a href="/">Inicio</a>';
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'IndexController@cargarIndex');
