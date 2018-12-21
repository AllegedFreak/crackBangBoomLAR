@extends('layouts.main')

@section('content')
    <div class="container">
      <div class="row red section">

        <div class="name-section col-12">
          <h1>Comics</h1>
        </div>

        @if($message = Session::get('success'))
        <div class="alert alert-success">
          <p> {{ $message }} </p>
        </div>
        @endif

        <div class="col-12 comic-section">

          <div class="col-12 d-flex justify-content-around" style="">
            <div class="row all-items" >

                @forelse ($comics as $comic)

                    <div class="col-4 item">
                        <div class="cover">
                      <a href="/comics/{{ $comic->id }}">
                        <img class="card-img-top" src="/storage/comics{{ $comic->img_cover }}" alt="Card image cap">
                      </a>
                        </div>
                    </div> {{-- fin item --}}





                @empty
                    <div class="alert alert-danger" role="alert">
                      No Hay Comics Registrados
                    </div>
                @endforelse





              </div>{{-- fin all item --}}
            </div>
        </div> {{-- fin de la comic-section --}}




        <div class="col-12 d-flex justify-content-center" style="padding:10px;">
        @if (Auth::check()) @if (Auth::user()->admin == TRUE)
        <a href="/comics/create" class="btn btn-primary"> Nuevo Comic</a>
        @endif
        @endif
        </div>


      </div> {{-- fin de la red section --}}

  </div>







@endsection
