<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

        <script src="https://kit.fontawesome.com/848bdd6d4c.js"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @yield('customcss')

    </head>
    <body>

        @include('layout.addons.loading')

        @include('layout.inc.nav')

        <div class="flex-center position-ref full-height">
            {{-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif --}}

            <div class="content">
                <!-- Main Content Wrapper Start -->
                <main class="main-content-wrapper">

                    @yield('content')

                </main>

            </div>
        </div>

        @include('layout.inc.mobileNav')

        @include('layout.addons.cart')

        @include('forms.elem-login')

        {{-- @if(!Auth::guest())
            @if (Auth::user()->admin()) --}}
            
                @include('forms.elem-categories')
{{--             
            @endif
        @endif --}}

        @include('layout.addons.search')

        @include('layout.addons.quickView')

        <!-- Global Overlay Start -->

        <div class="global-overlay-new" id="overlay-elem"></div>

        <div class="global-overlay"></div>
        <!-- Global Overlay End -->

        <!-- Global Overlay Start -->
        <a class="scroll-to-top" href=""><i class="la la-angle-double-up"></i></a>
        <!-- Global Overlay End -->


        <script src="{{ asset('js/vendor.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>

        @yield('customjs')

    </body>
</html>