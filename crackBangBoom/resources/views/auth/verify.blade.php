@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifica tu E-Mail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un link ha sido enviado a tu E-Mail.') }}
                        </div>
                    @endif

                    {{ __('Antes de proceder, por favor verifica el link de verificación enviado a tu email.') }}
                    {{ __('Si no recibiste el email') }}, <a href="{{ route('verification.resend') }}">{{ __('hacé click aquí para solicitar otro') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
