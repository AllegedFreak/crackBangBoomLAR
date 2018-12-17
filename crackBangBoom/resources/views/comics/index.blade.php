@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Comics
            <a href="/comics/create" class="btn btn-primary">Cargar Nuevo Comic</a>
        </h3>
        <div class="row card-columns">
            <div class="col-2">
                <ul>
                    <li>A</li>
                    <li>B</li>
                    <li>C</li>
                    <li>D</li>
                </ul>
            </div>
            <div class="col-10 ">
                @forelse ($comics as $comic)
                    {{--EMPIEZA CADA PRODUCTO--}}
                    <div class="card" style="width: 18rem;">
                      <img class="card-img-top" src="/{{ $comic->img_cover }}" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">{{ $comic->title }}</h5>
                        <p class="card-text">{{ $comic->description }}</p>
                        <p class="card-text">{{ $comic->illustrator }}</p>
                        <p class="card-text">{{ $comic->universes }}</p>
                        <p class="card-text">{{ $comic->rating }}</p>
                        <p class="card-text">{{ $comic->edition }}</p>
                        <p class="card-text">{{ $comic->price }}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
                    {{--TERMINA CADA PRODUCTO--}}
                @empty
                    <div class="alert alert-danger" role="alert">
                      No hay productos registrados
                    </div>
                @endforelse



            </div>
        </div>
    </div>



@endsection
