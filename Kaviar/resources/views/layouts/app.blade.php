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
        .horizontal-rule-white{
            display: block;
            height: 1px;
            border: 0;
            border-top: 1px solid #fff;
            margin: 1em 0;
            padding: 0;
        }
        .mail-label{
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
        .line-left{
            border-left: 1px solid #000;
        }
        .line-right{
            border-right: 1px solid #000;
        }
        .margin-bottom-5{
            margin-bottom: 5%;
        }
        .margin-bottom-2{
            margin-bottom: 2%;
        }




        input[type=checkbox]
        {
            /* Double-sized Checkboxes */
            -ms-transform: scale(2); /* IE */
            -moz-transform: scale(2); /* FF */
            -webkit-transform: scale(2); /* Safari and Chrome */
            -o-transform: scale(2); /* Opera */
            padding: 10px;
            margin-right: 10px;

        }

        /* Might want to wrap a span around your checkbox text */
        .checkboxtext
        {
            /* Checkbox text */

            font-size: 1.4em;
            display: inline;
        }
        .margin-left-checkbox{
            margin-left: 2%;
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
        <div class="container">
            <div class="collapse navbar-collapse" id="app-navbar-collapse">

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{url('/ru')}} "><img src="{{url('/image/icon/language_1.jpg')}}"
                                                       alt="icon laguage ru"> </a></li>
                    <li><a href="{{url('/nl')}} "><img src="{{url('/image/icon/language_3.jpg')}}"
                                                       alt="icon laguage nl"> </a></li>
                    <li><a href="{{url('/fr')}} "><img src="{{url('/image/icon/language_2.jpg')}}"
                                                       alt="icon laguage fr"> </a></li>
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
                        <li><a href="#">{{trans('home.delivery')}}</a></li>
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
        @include('footer')
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
<script>
    if ($('.has-error').length>0) {
        console.log('has error');
        $('html, body').animate({
            scrollTop: $('.has-error').offset().top
        }, 2000);
    }
    if ($('.alert-success').length>0) {
        console.log('has error');
        $('html, body').animate({
            scrollTop: $('.alert-success').offset().top
        }, 2000);
    }

</script>
</html>
