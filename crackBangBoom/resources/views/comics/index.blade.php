@extends('layouts.main')

@section('content')
    <div class="container">
        <h3>Comics
            <a href="/comics/create" class="btn btn-primary">Cargar Nuevo Comic</a>
        </h3>

        <div class="row card-columns">
                <div class="col-10 ">
                @forelse ($comics as $comic)
                    <div class="card" style="width: 18rem;">
                      <img class="card-img-top" src="/storage/comics/{{ $comic->img_cover }}" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">{{ $comic->title }}</h5>
                        <p class="card-text">{{ $comic->description }}</p>
                        <p class="card-text">Ilustrado por: {{ $comic->illustrator }}</p>
                        <p class="card-text">Rating: {{ $comic->rating }}</p>
                        <p class="card-text">Edición: {{ $comic->edition }}</p>
                        <p class="card-text">${{ $comic->price }}</p>
                        <a href="#" class="btn btn-primary">Ver Más</a>
                      </div>
                    </div>
                @empty
                    <div class="alert alert-danger" role="alert">
                      No hay productos registrados
                    </div>
                @endforelse



              </div>
        </div>
    </div>



@endsection
