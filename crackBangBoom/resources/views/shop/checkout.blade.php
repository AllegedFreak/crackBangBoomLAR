@extends('layouts.main')

@section('content')
<div class="container-fluid contact-principal">
  <section class="align-content">
    <section class="content-shop">
<div class="row">
  <div class="col">
      <h1 style="color:#E52328;">CHECKOUT</h1>
      <p style="font-size:15px;">Finaliza tu compra seleccionando el método de pago.</p>
@if(Session::has('cart'))
@foreach($products as $product)

      <img width="88px" height="120px"src="/storage/comics{{$product['item']['img_cover']}}" alt="">
      <!-- <strong>{{$product['item']['title']}}</strong> -->
@endforeach
@endif
  <br><br>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">
        <p style="font-size:23px;">Total a pagar: ${{$total}}</p>



      <form class="" idea action="{{route('checkout')}}" method="post">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"

    data-key="pk_test_TYooMQauvdEDq54NiTphI7jx"
    data-amount="{{$total}}"
    data-name="CrackBangBoom !"
    data-description="Reliza tu pago"
    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
    data-locale="auto">
  </script>
      @csrf
      </form>
  </li>
    </ul>



  </div>
</div>

    </section>
  </section>
</div>
@endsection
