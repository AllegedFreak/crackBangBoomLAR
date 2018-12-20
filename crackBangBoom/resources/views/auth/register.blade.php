@extends('layouts.main')

@section('content')
<div class="container-fluid">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">{{ __('Nuevo Usuario') }}</div>

                  <div class="card-body">
                      <form method="POST" id="validform" action="{{ route('register') }}">
                          @csrf

                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                              <div class="col-md-6">
                                  <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                  <span class="invalid-feedback name" role="alert"></span>

                                  @if ($errors->has('name'))
                                      <span class="invalid-feedback name" role="alert">
                                          <strong>{{ $errors->first('name') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                           <div class="form-group row">
                              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Maaaaail') }}</label>

                              <div class="col-md-6">
                                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                  <span class="invalid-feedback email" role="alert"></span>

                                  @if ($errors->has('email'))
                                      <span class="invalid-feedback email" role="alert">
                                          <strong>{{ $errors->first('email') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                              <div class="col-md-6">
                                  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                  <span class="invalid-feedback password" role="alert"></span>

                                  @if ($errors->has('password'))
                                      <span class="invalid-feedback pass" role="alert">
                                          <strong>{{ $errors->first('password') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirma Contraseña') }}</label>

                              <div class="col-md-6">
                                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                  <span class="invalid-feedback passconf" role="alert"></span>

                              </div>
                          </div>

                          <div class="form-group row mb-0">
                              <div class="col-md-6 offset-md-4">
                                  <button type="submit" class="btn btn-primary" onsubmit="return validateForm()">
                                      {{ __('Registrame') }}
                                  </button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<script src="/js/validformsontime.js"></script>
<script src="/js/validformssubmit.js"></script>


@endsection 
