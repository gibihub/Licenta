<div class="nav-container">
    <a id="top"></a>
    <nav class="absolute transparent">
        <div class="nav-bar">
            <div class="module left">
                <a href='/'>
                    <img class="logo logo-light" alt="Foundry" src="{{asset('storage/img/logo-light.png')}}" />
                    <img class="logo logo-dark" alt="Foundry" src="{{asset('storage/img/logo-light.png')}}" />
                </a>
            </div>
            <div class="module widget-handle mobile-toggle right visible-sm visible-xs">
                <i class="ti-menu"></i>
            </div>
            <div class="module-group right">
                <div class="module left">
                    <ul class="menu">
                        <li>
                            <a href="{{url('/')}}">
                                @lang('navbar.home')
                            </a>
                        </li>
                        @auth
                        <li>
                            <a href="#">
                                {{Auth::User()->name}}
                            </a>
                        </li>
                        <li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" name="logout" class="no-style">
                                    {{ __('welcome.logout')}}
                                </button>
                            </form>
                        </li>
                        @else
                        <li>
                            <a href="{{url('/login')}}">
                                @lang('navbar.login')
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/register')}}">
                                @lang('navbar.register')
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/bookings')}}">
                                @lang('navbar.bookings')
                            </a>
                        </li>
                        @endauth
                    </ul>
                </div>
                <!--end of menu module-->
                <div class="module widget-handle search-widget-handle left">
                    <div class="search">
                        <i class="ti-search"></i>
                        <span class="title">Search Site</span>
                    </div>
                    <div class="function">
                        <form class="search-form">
                            <input type="text" placeholder="@lang('navbar.type here')" />
                        </form>
                    </div>
                </div>
                <div class="module widget-handle language left">
                    <ul class="menu">
                        <li class="has-dropdown">
                            <a href="#">{{ Config::get('languages')[App::getLocale()] }}</a>
                            <ul>
                                @foreach (Config::get('languages') as $lang => $language)
                                @if ($lang != App::getLocale())
                                <li>
                                    <a href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
                                </li>
                                @endif
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                    <ul class="menu">
                        <li><a href ="{{url('/bookings/create')}}">@lang('bookings.create')</a></li>
                    </ul>
                </div>
            </div>
            <!--end of module group-->
        </div>
    </nav>
</div>
