@extends('layouts.app')

@section('extra-scripts')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endsection

@section('content')

<div class="main-container">
        <section class="cover fullscreen image-bg overlay">
            <div class="background-image-holder">
                <img alt="image" class="background-image" src="{{asset('storage/img/home2.jpg')}}" />
            </div>
            <div class="container v-align-transform">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <div class="feature bordered text-center">
                            <h4 class="uppercase">{{ __('auth.Register') }}</h4>
                            <form class="text-left" method="POST" action="{{ route('register') }}">
                                    @csrf
                                <div class = "form-group">
                                <input type="text" name="name" placeholder="{{ __('auth.username') }}"  class=" form-input @error('name') is-invalid @enderror " name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input type="text" name="email" placeholder="{{ __('auth.email') }}" class="form-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus  />
                                <input type="password" placeholder="{{ __('auth.password') }}" class=" form-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"/>
                                @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                                <input type="password" placeholder="{{ __('auth.confirmpw') }}" class="form-control" name="password_confirmation" required autocomplete="new-password"/>
                                <div class="g-recaptcha" data-sitekey="6LcSqcQUAAAAAHMvL6UFpVk_P8iW1pT56iTjtu8G"></div>
                                <input type="submit" value="Register" />
                                </div>
                            </form>
                            <p class="mb0">By signing up, you agree to our
                                <a href="#">Terms Of Use</a>
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
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection
