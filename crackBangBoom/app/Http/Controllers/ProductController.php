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

    // Eliminar uno del carrito -----------------------------------------------------

    public function getReduceByOne($id){
      $oldCart = Session::has('cart') ? Session::get('cart') : null;
      $cart = new Cart($oldCart);
      $cart->reduceByOne($id);

      //si el array de items es mayor a 0
      if (count($cart->items) > 0) {
        Session::put('cart', $cart);
      } else {
        //elimina el carrito
        Session::forget('cart');
      }

      return redirect()->route('product.shoppingCart');

    }

    //-------------------------------------------------------------------------------

    // Eliminar item  del carrito -----------------------------------------------------

    public function getRemoveItem($id){
      $oldCart = Session::has('cart') ? Session::get('cart') : null;
      $cart = new Cart($oldCart);
      $cart->removeItem($id);

      //si el array de items es mayor a 0
      if (count($cart->items) > 0) {
        Session::put('cart', $cart);
      } else {
        //elimina el carrito
        Session::forget('cart');
      }

      return redirect()->route('product.shoppingCart');
    }
    //--------------------------------------------------------------------------------

    public function getCart() {
      //si la SESSION no tiene carrito devuvle null
      if (!Session::has('cart')) {
        return view('shop.shopping-cart', ['products'=>null]);
      }
      $oldCart = Session::get('cart');
      $cart = new Cart($oldCart);

      return view('shop.shopping-cart' , ['products'=>$cart->items, 'totalPrice'=>$cart->totalPrice]);
    }


    // CHECKOUT ---------------------------------------------------------------------

      public function getCheckOut() {
        if (!Session::has('cart')) {
          return view('shop.shopping-cart'); //para que no puedan entrar al /checkout si no tienen carrito
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        // dd($cart);



        return view('shop.checkout' , ['total'=>$total , 'products'=>$cart->items]);

      }


      public function postCheckOut(Request $request) {
        if (!Session::has('cart')) {
          return redirect()->route('shop.shoppingCart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

          Session::forget('cart');

        return redirect()->route('home');
      }
    //--------------------------------------------------------------------------------
}
