<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Comic;
use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{
    public function getAddToCart(Request $request, $id){
      $comic = Comic::find($id);
      //uso Eloquent para encontrarlo en la base

      $oldCart =  Session::has('cart') ? Session::get('cart') : null;
      $cart = new Cart($oldCart);
      $cart->add($comic , $comic->id);

      $request->session()->put('cart', $cart);
      return redirect()->route('home');
    }

    // Eliminar del carrito -----------------------------------------------------

public function getReduceByOne($id){
  $oldCart = Session::has('cart') ? Session::get('cart') : null;
  $cart = new Cart($oldCart);
  $cart->reduceByOne($id);

  Session::put('cart', $cart);
  return redirect()->route('product.shoppingCart');
}

//-------------------------------------------------------------------------


    public function getCart() {
      //si la SESSION no tiene carrito devuvle null
      if (!Session::has('cart')) {
        return view('shop.shopping-cart', ['products'=>null]);
      }
      $oldCart = Session::get('cart');
      $cart = new Cart($oldCart);

      return view('shop.shopping-cart' , ['products'=>$cart->items, 'totalPrice'=>$cart->totalPrice]);
    }
}
