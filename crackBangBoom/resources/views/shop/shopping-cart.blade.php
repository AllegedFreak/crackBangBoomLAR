@extends('layouts.main')

@section('content')
<div class="container-fluid contact-principal">
  <section class="align-content">
    <section class="content-shop">
        <div class="titulo-contact">
  @if(Session::has('cart'))
    <div class="row ">
      <div class="col-12">
        <!-- <ul class="list-group"> -->
        <ul class="list-group list-group-flush">
  @foreach($products as $product)
          <!-- <li class="'list-group-item'">
            <span class="badge badge-primary badge-pill">{{$product['qty']}}</span>
            <strong>{{$product['item']['title']}}</strong>
            <span class="label label-success">${{$product['price']}}</span> -->

  <!-- Listado productos-->

              <li class="list-group-item justify-content-around">
                  <span class="badge badge-primary badge-pill">{{$product['qty']}}</span>
                  <strong>{{$product['item']['title']}}</strong>
                  <span class="label label-success">${{$product['price']}}</span>
              <!-- </li> -->
              <!-- </ul> -->



      <!-- button eliminar-->
        <div class="btn-group" id="delete-btn">
          <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding:2px;"><i class="fas fa-trash-alt " style="font-size:14px;"></i></button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ route('product.reduceByOne',['id'=>$product['item']['id']] ) }}">Eliminar</a>
            <a class="dropdown-item" href="{{ route('product.remove',['id'=>$product['item']['id']] ) }}">Eliminar Todo</a>
        </div>
      </div>
          </li>
  @endforeach
          <li class="list-group-item"></li>
        </ul>
      </div>
  </div>

  <div class="row">
      <div class="col-6">
        <strong>Total: $ {{$totalPrice}}</strong>
        <br><br>
      </div>
  </div>

  <div class="row">
      <div class="col-6">
        <a href="{{route('checkout')}}"><button type="button" class="btn btn-success" id="shop-btn"name="button">Comprar!</button></a>
      </div>
  </div>

  @else
  <div class="row justify-content-center ">
      <div class="col-12">
        <p>Ups! <br>
          No hay Comics en el Carrito...</p>
      </div>

      <div class="col-6">
      <img class="img-responsive" src="https://i.imgur.com/e1IneGq.jpg" width="250px"alt="">
      </div>


  </div>
  @endif
        </div>
      </section>
    </section>
  </div>
@endsection
