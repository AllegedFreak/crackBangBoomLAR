@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nuevo Comic</div>

                <div class="card-body">
                    <form method="POST" action="/comics/create" enctype="multipart/form-data">
                            @csrf

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">Título</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" min="0" step="1" autofocus>

                                @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="illustrator" class="col-md-4 col-form-label text-md-right">Ilustrador</label>

                            <div class="col-md-6">
                                <input id="illustrator" type="text" class="form-control{{ $errors->has('illustrator') ? ' is-invalid' : '' }}" name="illustrator" value="{{ old('illustrator') }}" min="0" step="1" autofocus>

                                @if ($errors->has('illustrator'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('illustrator') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right">Universo</label>

                            <div class="col-md-6">
                                @foreach ($universes as $universe)
                                    <input id="{{$universe->id}}"  type="checkbox" name="universes[]" value="{{$universe->id}}">
                                    <label for="{{$universe->id}}">{{$universe->name}}</label>
                                @endforeach

                                @if ($errors->has('categories'))
                                        <strong>{{ $errors->first('universes') }}</strong>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">Descripción</label>

                            <div class="col-md-6">

                                <textarea name="description" id="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}">{{ old('description')}}</textarea>

                                @if ($errors->has('description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="img_cover" class="col-md-4 col-form-label text-md-right">Imagen Portada</label>

                            <div class="col-md-6">
                                <input id="img_cover" type="file" class="form-control{{ $errors->has('img_cover') ? ' is-invalid' : '' }}" name="img_cover">
                                @if ($errors->has('img_cover'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('img_cover') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="pdf" class="col-md-4 col-form-label text-md-right">PDF Comic</label>

                            <div class="col-md-6">
                                <input id="pdf" type="file" class="form-control{{ $errors->has('pdf') ? ' is-invalid' : '' }}" name="pdf">
                                @if ($errors->has('pdf'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('pdf') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="rating" class="col-md-4 col-form-label text-md-right">Rating</label>

                            <div class="col-md-6">
                                <input id="rating" type="number" class="form-control{{ $errors->has('rating') ? ' is-invalid' : '' }}" name="rating" value="{{ old('rating') }}" min="0" step="1">

                                @if ($errors->has('rating'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('rating') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="edition" class="col-md-4 col-form-label text-md-right">Edición</label>

                            <div class="col-md-6">
                                <input id="edition" type="text" class="form-control{{ $errors->has('edition') ? ' is-invalid' : '' }}" name="edition" value="{{ old('edition') }}" min="0" step="1" autofocus>

                                @if ($errors->has('edition'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('edition') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">Precio</label>

                            <div class="col-md-6">
                                <input id="price" type="number" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ old('price') }}" min="0" step="1">

                                @if ($errors->has('price'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="release_date" class="col-md-4 col-form-label text-md-right">Fecha de Publicación</label>

                            <div class="col-md-6">

                                <textarea name="release_date" id="release_date" type="date" class="form-control{{ $errors->has('release_date') ? ' is-invalid' : '' }}">{{ old('description')}}</textarea>

                                @if ($errors->has('release_date'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('release_date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Guardar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
