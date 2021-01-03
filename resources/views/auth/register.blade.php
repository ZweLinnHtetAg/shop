@extends('frontend.template.master')

@section('main-content')

<section class="signin-page account">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="block text-center">
            <a class="logo" href="index.html">
              <img src="images/logo.png" alt="">
            </a>
            <h2 class="text-center">Create Your Account</h2>
            <form class="text-left clearfix" method="POST" action="{{ route('register') }}">
              @csrf
              {{-- <div class="form-group">
                <input type="text" class="form-control"  placeholder="First Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control"  placeholder="Last Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control"  placeholder="Username">
              </div> --}}
              <div class="form-group">
                <input type="text" class="form-control @error('name') is-invalid @enderror"  placeholder="User Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
              </div>
              <div class="form-group">
                <input type="email" class="form-control @error('email') is-invalid @enderror"  placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">
              </div>
              <div class="form-group">
                <input type="password" class="form-control @error('password') is-invalid @enderror"  placeholder="Password" name="password" required autocomplete="new-password">
              </div>
              <div class="form-group">
                <input type="password" class="form-control"  placeholder="Confirmed Password" name="password_confirmation" required autocomplete="new-password">
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-main text-center">Register</button>
              </div>
            </form>
            <p class="mt-20">Already hava an account ?<a href="{{ url('/login') }}"> Login</a></p>
            {{-- <p><a href="forget-password.html"> Forgot your password?</a></p> --}}
          </div>
        </div>
      </div>
    </div>
  </section>
    

  @endsection