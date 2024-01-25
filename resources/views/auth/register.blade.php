@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center offset-lg-1 mt-lg-5">
     <div class="col-lg-6">
        <x-login>
        </x-login>
     </div>

        <div class="col-lg-5 p-4  rounded-3 m-4 me-lg-3 bg-white shadow-sm" style="font-size:0.75rem">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h4 class="text-center fw-bold" style="color:rgba(14, 69, 30, 0.735)">Nouveau compte </h4>
                <hr>
                <label for="nom" class="m-2 fw-bold">Nom  <span class="text-danger">*</span></label>
                <input id="nom" type="text" id="" class="form-control border-0 rounded-3  @error('name') is-invalid @enderror" 
                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              
                <label for="email" class="m-2 fw-bold">E-mail <span class="text-danger">*</span></label>
                <input id="email" type="email" id="" class="form-control border-0 rounded-3 @error('email') is-invalid @enderror"  
                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="mt-2">
                            <label for="password" class="m-2 fw-bold">{{ __('Mot de passe ') }}<span class="text-danger">*</span> </label>

                            <div class="">
                                <input id="password" type="password" class="form-control border-0 rounded-3  @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-2">
                            <label for="password-confirm" class="m-2 fw-bold ">{{ __('Confirmer le mot de passe ') }} <span class="text-danger">*</span></label>

                            <div class="">
                                <input id="password-confirm" type="password" class="form-control border-0 rounded-3 " name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                
                <div   class="offset-lg-4 mt-4" >
                    <button type="submit" class="btn btn-secondary  btn-sm shadow-sm fw-bold border-0 rounded-4">
                        {{ __('Enregistrer') }}
                    </button>
    
                
                </div>
            </form>

        </div>
        
        
{{--         
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> --}}
    </div>
</div>
@endsection
