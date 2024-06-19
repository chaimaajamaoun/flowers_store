@extends('layouts.app')

@section('content')
<style>
/* custom.css */
body {
    background-color: #f0f9f8; /* Background baby green */
}

.card {
    border: none;
    border-radius: 1rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin-top: 100px;
}

.card-header {
    background-color: #fd4f9a; /* Pink background for header */
    color: white;
    font-weight: bold;
    text-align: center;
    border-top-left-radius: 1rem;
    border-top-right-radius: 1rem;
}

.form-control:focus {
    border-color: #fd4f9a; /* Pink border on focus */
    box-shadow: 0 0 0 0.2rem rgba(255, 135, 135, 0.25);
}

.btn-primary {
    background-color: #fd4f9a; /* Pink button */
    border-color: #fd4f9a;
}

.btn-primary:hover {
    background-color: #fa3f90;
    border-color: #fa3f90;
}

.btn-link {
    color: #fd4f9a; /* Pink link */
}

.btn-link:hover {
    color: #fa3f90;
}

.form-check-input:checked {
    background-color: #fd4f9a; /* Pink for checkbox */
    border-color: #fd4f9a;
}

</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
    </div>
</div>
</div>
@endsection
