@extends('layouts.main')

@section('content')
<div class="container-fluid contact-principal">
  <section class="align-content">
      <section class="content-shop">
<div class="row justify-content-center">
  <h1 style="color:#E52328;">Registrarme</h1>
</div>

<div class="container-fluid">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card" style="background-color: transparent; border:none;">
                  <!-- <div class="card-header">{{ __('Register') }}</div> -->

                  <div class="card-body">
                      <form method="POST" name="validform" id="validform" action="{{ route('register') }}" onsubmit="return validateForm()" >
                          @csrf

                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre Completo') }}</label>

                              <div class="col-md-6">
                                  <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}"   autofocus>

                                  <span class="invalid-feedback name" role="alert"></span>

                                  @if ($errors->has('name'))
                                      <span class="invalid-feedback name" role="alert">
                                          <strong>{{ $errors->first('name') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                              <div class="col-md-6">
                                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"  >

                                  <span class="invalid-feedback email" role="alert"></span>

                                  @if ($errors->has('email'))
                                      <span class="invalid-feedback email" role="alert">
                                          <strong>{{ $errors->first('email') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="birth" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de Nacimiento') }}</label>

                              <div class="col-md-6">

                                  <input id="date-birth" type="date" name="date-birth">

                                  <span class="invalid-feedback date-bith" role="alert"></span>

                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('Lugar de Nacimiento') }}</label>

                              <div class="col-md-6">

                                  <select id="country_birth" name="country_birth" onchange="verifCountry()">
                                    <option value="">  *País*  </option>
                                  </select>

                                  <span class="invalid-feedback country_birth" role="alert"></span>

                                  <select id="provincias-list" style="display:none;" name="pcia_ar">
                                    <option value="">  *Provincia*  </option>
                                  </select>

                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                              <div class="col-md-6">
                                  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"  >

                                  <span class="invalid-feedback password" role="alert"></span>

                                  @if ($errors->has('password'))
                                      <span class="invalid-feedback pass" role="alert">
                                          <strong>{{ $errors->first('password') }}</strong>
                                      </span>
                                  @endif

                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>

                              <div class="col-md-6">
                                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  >

                                  <span class="invalid-feedback passconf" role="alert"></span>

                              </div>
                          </div>

                          <!-- @if (Auth::check()) @if (Auth::user()->admin == TRUE)
                          <div class="form-group row">
                              <label for="admin" class="col-md-4 col-form-label text-md-right">{{ __('¿Es Administrador?') }}</label>

                              <div class="col-md-1">
                                  <input id=1 type="checkbox" name="admin" value=1>
                              </div>
                          </div>
                          @endif
                          @endif -->

                          <div class="form-group row mb-0">
                              <div class="col-md-6 offset-md-4">
                                  <button type="submit" class="btn btn-primary" >
                                      {{ __('Registrar') }}
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

</section>
</section>
</div>

<script src="/js/validformsontime.js"></script>
<script src="/js/validformssubmit.js"></script>

<script src="/js/apicountries.js"></script>
<script src="/js/apiprovincias.js"></script>


@endsection
