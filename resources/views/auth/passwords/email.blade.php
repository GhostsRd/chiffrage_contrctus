@extends('layouts.auth')

@section('content')

<div class="container ">
    <div class="row justify-content-center offset-lg-1 mt-lg-5">

        <div class="col-lg-5 p-4  rounded-3 m-5 me-lg-3 bg-white shadow-sm">
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <h5 class=" fw-bold" style="text-shadow: 0 0 1.5px black">Renvoyer le mot de passe </h5>
                <hr>
                <label for="email" class="m-1 fw-bold">E-mail *</label>
                <input id="email" type="email" id="" class="form-control m-1  rounded-3 shadow-sm @error('email') is-invalid @enderror"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                
                <div   class="offset-lg-4 mt-4" >
                    <button type="submit" class="btn btn-secondary shadow border-0 rounded-4">
                        {{ __('Renvoyer le code') }}
                    </button>
        
                
                </div>
            </form>
        
        </div>
    </div>
</div>


{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('changer Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
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

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
