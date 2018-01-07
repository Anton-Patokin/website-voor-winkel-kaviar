<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8" lang="ru">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="{{trans('home.description')}}">
    <meta name="author" content="MS express">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{url('/image/favicon.ico' )}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{url('/image/favicon.ico' )}}" type="image/x-icon">
    <title>{{ trans('home.title') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script
            src="https://code.jquery.com/jquery-3.2.0.slim.min.js"
            integrity="sha256-qLAv0kBAihcHZLI3fv3WITKeRsUX27hd6upBBa0MSow="
            crossorigin="anonymous"></script>


</head>
<body>
<div id="app">
    {{--<nav class="navbar navbar-default navbar-static-top nav_top">--}}
    {{--<div class="container">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-12">--}}
    {{--<div class="collapse navbar-collapse" id="app-navbar-collapse">--}}

    {{--<ul class="nav navbar-nav navbar-right">--}}
    {{--@if(Auth::user())--}}
    {{--<li>--}}
    {{--<a href="{{ url('/mails') }}">Емейлы</a>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<a href="{{ url('/add-product') }}">Добавить продукт</a>--}}
    {{--</li>--}}
    {{--@endif--}}
    {{--<li><a href="{{url('/ru')}} "><img src="{{url('/image/icon/language_1.jpg')}}"--}}
    {{--alt="icon laguage ru"> </a></li>--}}
    {{--<li><a href="{{url('/nl')}} "><img src="{{url('/image/icon/language_3.jpg')}}"--}}
    {{--alt="icon laguage nl"> </a></li>--}}
    {{--<li><a href="{{url('/fr')}} "><img src="{{url('/image/icon/language_2.jpg')}}"--}}
    {{--alt="icon laguage fr"> </a></li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</nav>--}}
    <div class="example3 main_navbar">
        <nav class="navbar navbar-inverse navbar-static-top">

            <div class="container">
                <div class="row">


                    <div class="col-md-2 col-sm-2 hidden-xs nopadding">
                        <div id="brand-logo">
                            <a href="{{url('/'.$language)}}"><img src="{{url('/image/logo.jpg')}}"
                                                                  alt="{{trans('home.logo')}}"></a>
                        </div>
                    </div>
                    <div class="col-md-10 col-sm-12">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#navbar3">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            {{--<img src="{{url('/image/logo.jpg')}}" alt="{{trans('home.logo')}}">--}}

                            <a class="navbar-brand" href="">MS Express
                            </a>
                        </div>
                        <div id="navbar3" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="{{ Request::path() == $language || Request::path() == '/' ? 'active' : '' }}">
                                    <a href="{{url('/'.$language)}}">{{trans('home.home')}}</a></li>

                                <li class="{{ Request::path() == $language.'/product/fish' || Request::path() == '/product/fish' ? 'active' : '' }}">
                                    <a href="{{url('/'.$language.'/product/fish')}}">{{trans('home.fish')}}</a></li>

                                <li class="{{ Request::path() == $language.'/product/caviar' || Request::path() == '/product/caviar' ? 'active' : '' }}">
                                    <a href="{{url('/'.$language.'/product/caviar')}}">{{trans('home.caviar')}}</a></li>

                                <li class="{{ Request::path() == $language.'/product/other' || Request::path() == '/product/other' ? 'active' : '' }}">
                                    <a href="{{url('/'.$language.'/product/other')}}">{{trans('home.other')}}</a></li>

                                <li class="{{ Request::path() == $language.'/about-us' || Request::path() == '/about-us' ? 'active' : '' }}">
                                    <a class="scroll_anker" name="about_us"
                                       href="{{url('/'.$language.'/about-us')}}">{{trans('home.about_us')}}</a></li>
                                <li><a class="scroll_anker" name="contact" href="#">{{trans('home.contact')}}</a></li>


                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!--/.container-fluid -->
        </nav>
    </div>
    <div class="container-fluid">
        @yield('content')

    </div>
</div>

<!-- Scripts -->

<script src="{{ asset('js/app.js') }}"></script>
</body>
<script>
    if ($('.has-error').length > 0) {
        console.log('has error');
        $('html, body').animate({
            scrollTop: $('.has-error').offset().top
        }, 2000);
    }
    if ($('.alert-success').length > 0) {
        console.log('has error');
        $('html, body').animate({
            scrollTop: $('.alert-success').offset().top
        }, 2000);
    }
    $('.scroll_anker').click(function ($this) {
        $('html, body').animate({
            scrollTop: $('#' + $(this).attr('name')).offset().top
        }, 2000);
    })

</script>
</html>
