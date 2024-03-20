@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="brand-logo pb-4 text-center">
                <a href="html/index.html" class="logo-link">
                    <img class="logo-light logo-img logo-img-lg" src="./images/ratpdev_logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                </a>
            </div>
            <div class="card">
                <div style="background-color: #27a591; text-align:center; font-size:35px" class="card-header text-light">{{ __('Se Connecter') }}</div>

                <div class="card-body px-5">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="col mb-3">
                            <label for="email" class="col col-form-label text-md-end" style="font-size: 20px">{{ __('Adresse email') }}</label>

                            <div class="col">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col mb-3">
                            <label for="password" class="col col-form-label text-md-end" style="font-size: 20px">{{ __('Mot de passe') }}</label>

                            <div class="col">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> --}}

                        <div class="row mb-0">
                            <div class="col">
                                <button type="submit" class="btn text-light col-12" style="background-color: #304e8e; font-size:20px">
                                    {{ __('Se Connecter') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link col-12" href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublié?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    
</div>
@endsection
