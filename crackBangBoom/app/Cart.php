<?php

namespace App;

class Cart
{
  public $items = null;
  public $totalQty = 0;
  public $totalPrice = 0;
  
  public function __construct($oldCart){
    //si tengo un carrito anterior, lo trae para seguir sumando productos
    if ($oldCart) {
      $this->items = $oldCart->items;
      $this->totalQty = $oldCart->totalQty;
      $this->totalPrice = $oldCart->totalPrice;
    }
  }

  //incorpora un nuevo items
  public function add($item, $id){
    //este array asoc identifica mi grupo de $items
    $storedItem = ['qty'=>0,'price'=>$item->price,'item'=>$item];


    //veridico si tengo algun item en el Carrito
    if ($this->items) {
      // verifico si el prodcuto qeu quiero agregar ahora esta ya en el carrito (de ser asi se suma la qty de un producto)
      //array_key_exist devuelve TRUE si la key dada existe en el array
      if (array_key_exists($id, $this->items)) {
        $storedItem = $this->items[$id];
        // Si ya lo tengo, lo sobreescribe (no detallo dos veces el = producto). Quiero mantener una sola vez el producto y aumenta su qty
      }
    }

    $storedItem['qty']++;
    $storedItem['price'] = $item->price * $storedItem['qty'];

    //crea una nueva existencia de producto
    $this->items[$id] = $storedItem;
    $this->totalQty++;
    $this->totalPrice += $item->price;
  }



  public function reduceByOne($id){
    $this->items[$id]['qty']--;
    $this->items[$id]['price']-=$this->items[$id]['item']['price'];

    //reduce la unidad del total del Carrito
    $this->totalQty--;
    $this->totalPrice -= $this->items[$id]['item']['price'];

    if ($this->items[$id]['qty'] <= 0) {
      unset($this->items[$id]);
    }
  }

  public function removeItem($id){
    $this->totalQty -= $this->items[$id]['qty'];
    $this->totalPrice -= $this->items[$id]['price'];
    unset($this->items[$id]);
  }




}
