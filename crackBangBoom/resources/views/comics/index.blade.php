@extends('layouts.main')

@section('content')
    <div class="container">
        <h3>Comics
        </h3>

        <div class="row card-columns">
                <div class="col-10 ">
                @forelse ($comics as $comic)
                    <div class="card" style="width: 18rem;">
                      <a href="/comics/{{ $comic->id }}">
                        <img class="card-img-top" src="/storage/comics/{{ $comic->img_cover }}" alt="Card image cap">
                      </a>
                    </div>
                @empty
                    <div class="alert alert-danger" role="alert">
                      No Hay Comics Registrados
                    </div>
                @endforelse

                @if (Auth::check()) @if (Auth::user()->admin == TRUE)
                <a href="/comics/create" class="btn btn-primary"> Nuevo Comic</a>
                @endif
                @endif
              </div>
        </div>
    </div>



@endsection
