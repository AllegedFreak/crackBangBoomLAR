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


//Route::prefix('/comics')->middleware('auth')->group( function () {


Route::get('/home', 'IndexController@cargarIndex')->name('home');

<<<<<<< HEAD
Route::get('/', 'IndexController@cargarIndex');


// CARRITO ------------------------------------------------
// Agregar
Route::get('/add-to-cart/{id}', [
  'uses'=>'ProductController@getAddToCart',
  'as'=>'product.addToCart']);

//Borrar uno
=======
// Agregar Carrito ------------------------------------------------

Route::get('/add-to-cart/{id}', [
  'uses'=>'ProductController@getAddToCart',
  'as'=>'product.addToCart']);

//---------------------------------------------------------------

//---------------------------BORRAR carrito (1uni)----------

>>>>>>> f8eedf55775d9914598f545c4368de7ece676fee
Route::get('/reduce/{id}', [
    'uses'=>'ProductController@getReduceByOne',
    'as'=>'product.reduceByOne'
  ]);
<<<<<<< HEAD
=======

//----------------------------------------------------------
>>>>>>> f8eedf55775d9914598f545c4368de7ece676fee

//Borrar Item
Route::get('/remove/{id}', [
    'uses'=>'ProductController@getRemoveItem',
    'as'=>'product.remove'
  ]);

<<<<<<< HEAD
// View Carrito
Route::get('/shopping-cart', [
  'uses'=>'ProductController@getCart',
  'as'=>'product.shoppingCart']);
=======
// View Carrito ------------------------------------------------

Route::get('/shopping-cart', [
  'uses'=>'ProductController@getCart',
  'as'=>'product.shoppingCart']);

//---------------------------------------------------------------
>>>>>>> f8eedf55775d9914598f545c4368de7ece676fee

//View Compra
Route::get('/checkout', [
  'uses'=>'ProductController@getCheckOut',
  'as'=>'checkout',
  'middleware'=>'auth']);

//CHECKOUT
  Route::post('/checkout', [
    'uses'=>'ProductController@postCheckOut',
    'as'=>'checkout',
    'middleware'=>'auth']);
//---------------------------------------------------------------
Route::prefix('/comics')->middleware('auth')->group( function () {

    Route::get('/create', 'ComicController@create');
    Route::post('/create', 'ComicController@store');

    Route::get('/{id}/editar', 'ComicController@edit'); //Formulario de Edicion // EL NAME ES PARA laravel colective
    Route::patch('/{id}', 'ComicController@update'); //Formulario Actualizar

    Route::get('/{id}', 'ComicController@show');

    Route::get('/{id}/borrar', 'ComicController@destroy');
    Route::post('/{id}', 'ComicController@update');

    Route::get('/', 'ComicController@index');

    // Route::get('/', function () {
    //     return 'Soy Comics <a href="/">Inicio</a>';
    // });

});


Route::prefix('/usuario')->name('usuario.')->group( function() {

    Route::get('/registro', function () {
        return view('register');
    });

    Route::get('/logueo', function () {
        return view('login');
    });

    Route::get('/perfil', 'ProfileController@cargar');



    Route::get('/deslogueo', function () {
      Auth::logout();
      Session::flush();
      return redirect()->route('home');
    }  );

});




//Logueo por Google
Route::get('login/google', 'Auth\LoginController@redirectToProviderGoogle');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallbackGoogle');




Route::get('/contacto', function () {
    return view('contact');
    //return 'Soy Contacto <a href="/">Inicio</a>';
});

Route::get('/preguntas-frecuentes', function () {
    return view('faq');
    //return 'Soy FAQ <a href="/">Inicio</a>';
});

Route::get('/sobre-nosotros',  function () {
    return view('sobre-nosotros');
    //return 'Soy Sobre Nosotros <a href="/">Inicio</a>';
});

Route::get('/', 'IndexController@cargarIndex');

Auth::routes();
