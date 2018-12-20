@extends('layouts.main')

@section('content')

  @if(Session::has('cart'))
    <div class="row">
      <div class="col-8">
        <ul class="list-group">
  @foreach($products as $product)
          <li class="'list-group-item'">
            <span class="badge">{{$product['qty']}}</span>
            <strong>{{$product['item']['title']}}</strong>
            <span class="label label-success">${{$product['price']}}</span>

            <div class="btn-group">
            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <span class="caret"> </span> </button>

            <ul class="">
              <!-- BORRA DE A UNO -->
              <li class="dropdown-item "> <a href="{{ route('product.reduceByOne',['id'=>$product['item']['id']] ) }}"> Eliminar</a> </li>
              <li class="dropdown-item"> <a href="#"> Eliminar todos</a> </li>
            </ul>

          </div>
            <!-- <div class="btn-group">
              <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                Accion
                <span class="caret"></span>
              </button>

              <ul class="dropdown-menu">
                  <li class="dropdown-item"><a href="">Eliminar </a> </li>
                  <li class="dropdown-item"><a href="#">Eliminar Todos</a> </li>
              </ul>

            </div> -->

          </li>
  @endforeach
        </ul>
      </div>
  </div>
  @else

  @endif
@endsection
