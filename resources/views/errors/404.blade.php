@extends('frontend.template.master')

@section('main-content')

<section class="page-404">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="index.html">
                    <img src="{{ asset('frontend/images/logo.png') }}" alt="site logo" />
                </a>
                <h1>404</h1>
                <h2>Page Not Found</h2>
                <a href="{{ url('/') }}" class="btn btn-main"><i class="tf-ion-android-arrow-back"></i> Go Home</a>
                <p class="copyright-text">© 2018 Themefisher All Rights Reserved</p>
            </div>
        </div>
    </div>
</section>
    
@endsection