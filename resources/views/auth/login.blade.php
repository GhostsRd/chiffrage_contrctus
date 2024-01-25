@extends('layouts.auth')

@section('content')
<div class="container ">
    <div class="row justify-content-center offset-lg-1 mt-lg-5">
        
       <div class="col-lg-6">
        <x-login>
        </x-login>
       </div>

        <div class="col-lg-5 p-4  rounded-3 m-5 me-lg-3 bg-white ombre " id="" style="font-size:0.8rem;">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h4 class="text-center fw-bold" style="color:rgba(14, 69, 30, 0.735)">Contractus </h4>
                <hr>
                <label for="email" class="m-1 fw-bold">E-mail </label>
                <input id="email" type="email" id="" class="form-control m-1 border-0  rounded-3  @error('email') is-invalid @enderror"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                <label for="" class="m-1 fw-bold">Mot de passe </label>
                <input  id="password" type="password" class="form-control m-1  border-0 rounded-3  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                <div class="form-check m-2">
                    <input class="form-check-input " type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                    <label class="form-check-label " for="remember">
                        {{ __('Enregistrer mes informations ') }}
                    </label>
                </div>
                
                <div   class="offset-lg-3 mt-4" >
                    <button type="submit" class="btn fw-bold  btn-primary   shadow border-0 rounded-4" style="font-size:0.7rem;">
                        {{ __('Connexion') }}
                    </button>
    
                    @if (Route::has('password.request'))
                        <a class="btn btn-link " id="titre-info" href="{{ route('password.request') }}">
                            {{ __('Mot de passe oublié?') }}
                        </a>
                    @endif
                </div>
            </form>

        </div>



        {{-- <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> --}}
    </div>
</div>
@endsection
