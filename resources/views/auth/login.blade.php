@extends('layouts.app')

@section('extra-scripts')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endsection

@section('content')

<div class="main-container">
        <section class="cover fullscreen image-bg overlay">
            <div class="background-image-holder">
                <img alt="image" class="background-image" src="{{asset('storage/img/home12.jpg')}}" />
            </div>
            <div class="container v-align-transform">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2">
                        <div class="feature bordered text-center">
                            <h4 class="uppercase">{{ __('auth.login') }}</h4>
                            <form class="text-left" method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group">
                                    <input id="email" type="email" placeholder="Email" class="form-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <input id="password" type="password" placeholder="{{__('auth.password')}}" class=" form-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <div class="g-recaptcha" data-sitekey="6LcSqcQUAAAAAHMvL6UFpVk_P8iW1pT56iTjtu8G"></div>
                                </div>
                                
                                <input type="submit" value="{{ __('auth.login button') }}" />
                                <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                </label>
                            </form>
                            <p class="mb0">{{ __('auth.forgot')}}
                            <a href="{{Url('password/reset')}}">{{ __('auth.reset')}}</a>
                            </p>
                        </div>
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>
        <footer class="footer-1 bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <img alt="Logo" class="logo" src="{{asset('storage/img/logo-light.png')}}" />
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="widget">
                            <h6 class="title">Recent Posts</h6>
                            <hr>
                            <ul class="link-list recent-posts">
                                <li>
                                    <a href="#">Hugging pugs is super trendy</a>
                                    <span class="date">February
                                        <span class="number">14, 2015</span>
                                    </span>
                                </li>
                                <li>
                                    <a href="#">Spinning vinyl is oh so cool</a>
                                    <span class="date">February
                                        <span class="number">9, 2015</span>
                                    </span>
                                </li>
                                <li>
                                    <a href="#">Superior theme design by pros</a>
                                    <span class="date">January
                                        <span class="number">27, 2015</span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <!--end of widget-->
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="widget">
                            <h6 class="title">Latest Updates</h6>
                            <hr>
                            <div class="twitter-feed">
                                <div class="tweets-feed" data-feed-name="mrareweb">
                                </div>
                            </div>
                        </div>
                        <!--end of widget-->
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="widget">
                            <h6 class="title">Instagram</h6>
                            <hr>
                            <div class="instafeed" data-user-name="mrareweb">
                                <ul></ul>
                            </div>
                        </div>
                        <!--end of widget-->
                    </div>
                </div>
                <!--end of row-->
                <div class="row">
                    <div class="col-sm-6">
                        <span class="sub">&copy; Copyright 2016 - Medium Rare</span>
                    </div>
                    <div class="col-sm-6 text-right">
                        <ul class="list-inline social-list">
                            <li>
                                <a href="#">
                                    <i class="ti-twitter-alt"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ti-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ti-dribbble"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ti-vimeo-alt"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end of container-->
            <a class="btn btn-sm fade-half back-to-top inner-link" href="#top">Top</a>
        </footer>
    </div>
@endsection
