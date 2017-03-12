<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <style>
        /**********************************
Responsive navbar-brand image CSS
- Remove navbar-brand padding for firefox bug workaround
- add 100% height and width auto ... similar to how bootstrap img-responsive class works
***********************************/

        .navbar-brand {
            padding: 0px;
        }

        .navbar-brand > img {
            height: 100%;
            padding: 15px;
            width: auto;
        }

        /* EXAMPLE 3

        line height is 20px by default so add 30px top and bottom to equal the new .navbar-brand 80px height  */

        .example3 .navbar-brand {
            height: 80px;
        }

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


    </style>


</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top nav_top">
        <div class="container">
            <div class="collapse navbar-collapse" id="app-navbar-collapse">

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{url('/ru')}} "><img src="{{url('/image/icon/language_1.jpg')}}"
                                                       alt="icon laguage ru"> </a></li>
                    <li><a href="{{url('/nl')}} "><img src="{{url('/image/icon/language_2.jpg')}}"
                                                       alt="icon laguage fr"> </a></li>
                    <li><a href="{{url('/fr')}} "><img src="{{url('/image/icon/language_3.jpg')}}"
                                                       alt="icon laguage nl"> </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="example3 main_navbar">
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar3">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href=""><img src="{{url('/image/logo.png')}}" alt="{{trans('home.logo')}}">
                    </a>
                </div>
                <div id="navbar3" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#">{{trans('home.home')}}</a></li>
                        <li><a href="#">{{trans('home.fish')}}</a></li>
                        <li><a href="#">{{trans('home.caviar')}}</a></li>
                        <li><a href="#">{{trans('home.about_us')}}</a></li>
                        <li><a href="#">{{trans('home.contact')}}</a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
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
</html>
