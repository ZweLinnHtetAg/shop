@extends('frontend.template.master')

@section('main-content')

<section class="signin-page account">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="block text-center">
            <a class="logo" href="index.html">
              <img src="{{ asset('images/logo.png') }}" alt="">
            </a>
            <h2 class="text-center">Welcome Back</h2>
            <form class="text-left clearfix" method="POST" action="{{ route('login') }}" >
                @csrf
              <div class="form-group">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="email" class="form-control @error('email') is-invalid @enderror"  placeholder="Email"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
              </div>
              <div class="form-group">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-main text-center" >Login</button>
              </div>
            </form>
            <p class="mt-20">New in this site ?<a href="{{ url('/register') }}"> Create New Account</a></p>
            @if (Route::has('password.request'))
            {{-- <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a> --}}
        @endif
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection