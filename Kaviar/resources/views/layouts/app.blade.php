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

    <title>{{ trans('home.title') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <style>
        /**********************************
Responsive navbar-brand image CSS
- Remove navbar-brand padding for firefox bug workaround
- add 100% height and width auto ... similar to how bootstrap img-responsive class works
***********************************/

        /* EXAMPLE 3

        line height is 20px by default so add 30px top and bottom to equal the new .navbar-brand 80px height  */

        .example3 .nav > li > a {
            font-size: 15px;
            text-transform: uppercase;
            padding-top: 30px;
            padding-bottom: 30px;
        }

        .example3 .navbar-toggle {
            padding: 10px;
            margin: 25px 15px 25px 0;
        }

        .navbar-nav > li > .dropdown-menu {
            z-index: 9999;
        }

        body {
            font-family: "Lato";
        }

        .nav_top {
            margin-bottom: -0px;
        }

        .carousel-position {
            margin-top: -30px;
        }

        .overlay {
            position: absolute;
            top: 52px;
            left: 50%;
            width: 312px;
            height: 500px;
            margin-left: -156px;
            z-index: 10;
        }

        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img {

        / / position: relative;
        / / top: 0 px;
            width: 100%;
            height: 100%;
            margin: auto;
        }

        h1 {
            text-transform: uppercase;
        }

        .horizontal-rule-black {
            display: block;
            height: 1px;
            border: 0;
            border-top: 1px solid #000;
            margin: 1em 0;
            padding: 0;
        }

        .horizontal-rule-white {
            display: block;
            height: 1px;
            border: 0;
            border-top: 1px solid #fff;
            margin: 1em 0;
            padding: 0;
        }

        .mail-label {
            font-size: 1.4em;
        }

        .modal-content iframe {
            margin: 0 auto;
            display: block;
        }

        .sub-title {
            text-transform: capitalize;
        }


        .btn {
            border-radius: 0px;

        }

        .margin-top-1 {
            margin-top: 1%;
        }

        .margin-top-2 {
            margin-top: 2%;
        }

        .margin-top-3 {
            margin-top: 3%;
        }

        .margin-top-4 {
            margin-top: 4%;
        }

        .margin-top-5 {
            margin-top: 5%;
        }

        .margin-top-10 {
            margin-top: 10%;
        }

        .modal-header {
            padding: 9px 15px;
            border-bottom: 1px solid #eee;
            background-color: #2c3e50;
            color: #fff;
            -webkit-border-top-left-radius: 5px;
            -webkit-border-top-right-radius: 5px;
            -moz-border-radius-topleft: 5px;
            -moz-border-radius-topright: 5px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .close {
            color: #fff;
        }

        .align-center {
            text-align: center;
        }

        .second_background {
            background-color: #2c3e50;
            color: #fff;
            padding-bottom: 7%;
        }

        .img-center {
            margin: 0 auto;
        }

        .line-left {
            border-left: 1px solid #000;
        }

        .line-right {
            border-right: 1px solid #000;
        }

        .margin-bottom-5 {
            margin-bottom: 5%;
        }

        .margin-bottom-2 {
            margin-bottom: 2%;
        }

        input[type=checkbox] {
            /* Double-sized Checkboxes */
            -ms-transform: scale(2); /* IE */
            -moz-transform: scale(2); /* FF */
            -webkit-transform: scale(2); /* Safari and Chrome */
            -o-transform: scale(2); /* Opera */
            padding: 10px;
            margin-right: 10px;

        }

        /* Might want to wrap a span around your checkbox text */
        .checkboxtext {
            /* Checkbox text */

            font-size: 1.4em;
            display: inline;
        }

        .margin-left-checkbox {
            margin-left: 2%;
        }

        .maging_admin {
            margin-bottom: 400px;
        }

        @media screen and (max-width: 991px) {
            .line-left {
                border-left: 0px solid #000;
            }
        }

        .odd {
            background-color: #99cb84;
        }

        .even {
            background-color: #abdbff;
        }

        .font-normal-banner {
            text-transform: none;
            font-size: 3em;
        }

        @media screen and (min-width: 768px) {
            .font-normal-banner {
                font-size: 3em;
            }
        }

        @media screen and (max-width: 768px) {
            .font-normal-banner {
                font-size: 1.5em;
            }
        }

        .sub-title {
            background-color: #2c3e50;
            color: #fff;
            text-align: center;
            padding-top: 10px;
            padding-bottom: 10px;
            margin-bottom: 0px;
            margin-top: 0px;
            font-size: 2em;

        }
.sub-title-richt-caption{
    color: #2c3e50;
    text-align: left;
    padding-top: 10px;
    padding-bottom: 10px;
    margin-bottom: 0px;
    margin-top: 0px;
    font-size: 2em;
}
        #box {
            position: relative;
        }

        #box::before,
        #box::after {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            border-color: transparent;
            border-style: solid;
        }

        #box::after {
            border-width: 1em;
            border-right-color: rgba(245, 248, 255, 1);
            border-top-color: rgba(245, 248, 255, 1);
        }

        .lower-nav {
            color: #fff;
            font-size: 20px;
            padding: 23px 20px;
            height: 78px;
            color: #266080;
            background-color: #fff;
            border-bottom: 6px solid #266080;
        }

        #brand-logo {
            margin-top: -1px;
            background-size: cover;
            position: absolute;
            border: 3px solid #fff;
        }

        #brand-logo img {
            width: 221px;
            height: 221px;
            min-width: 150px;
        }

        .navbar-brand {
            color: #fff;
            font-size: 1.5em;
            padding-top: 35px;
            display: none;
        }

        @media (max-width: 768px) {
            .lower-nav {
                font-size: 20px;
                padding: 25px 20px;
            }

            .navbar-brand {
                display: block;
            }
        }

        @media (max-width: 480px) {
            .lower-nav {
                font-size: 18px;
                padding: 20px 10px;
            }
        }

        .thumbnail.right-caption{
            background-color: #fff;
        }
        .thumbnail.right-caption > img {
            margin-left: 0;
            border: 3px solid #fff;
            padding: 0;
            float: left;
            margin-right: 9px;
        }

        .thumbnail.right-caption {
            float: left;
        }

        .thumbnail.right-caption > .caption {
            padding: 4px;
        }


        .component-wrapper {
            display: flex;
            flex-flow: row wrap;
            justify-content: space-between;
        }

        .component-item {
            flex: 0 1 31%;
        }

        .component-wrapper:after {
            content: "";
            flex: 0 1 31%;
        }

        @media screen and (max-width: 768px) {
            .component-item {
                flex: 0 1 48%;
            }
            .languege.nav > li, .nav > li > a{
                display: inline;
            }

            .navbar-inverse .navbar-nav > .active > a, .navbar-inverse .navbar-nav > .active > a:focus, .navbar-inverse .navbar-nav > .active > a:hover{
                background-color: rgba(255, 255, 255, 0);
            }
        }

        @media screen and (max-width: 480px) {
            .component-item {
                flex: 0 1 100%;
            }
        }

    </style>
    <script
            src="https://code.jquery.com/jquery-3.2.0.slim.min.js"
            integrity="sha256-qLAv0kBAihcHZLI3fv3WITKeRsUX27hd6upBBa0MSow="
            crossorigin="anonymous"></script>


</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top nav_top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <ul class="nav navbar-nav navbar-right languege">
                            @if(Auth::user())
                                <li>
                                    <a href="{{ url('/mails') }}">Емейлы</a>
                                </li>
                                <li>
                                    <a href="{{ url('/add-product') }}">Добавить продукт</a>
                                </li>
                            @endif
                            <li><a href="{{url('/ru')}} "><img src="{{url('/image/icon/language_1.jpg')}}"
                                                               alt="icon laguage ru"> </a></li>
                            <li><a href="{{url('/nl')}} "><img src="{{url('/image/icon/language_3.jpg')}}"
                                                               alt="icon laguage nl"> </a></li>
                            <li><a href="{{url('/fr')}} "><img src="{{url('/image/icon/language_2.jpg')}}"
                                                               alt="icon laguage fr"> </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="example3 main_navbar">
        <nav class="navbar navbar-inverse navbar-static-top">

            <div class="container-fluid">
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

                                <li><a class="scroll_anker" name="about_us" href="#">{{trans('home.about_us')}}</a></li>
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
