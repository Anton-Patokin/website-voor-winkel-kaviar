<div class="row carousel-position">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">


        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            {{--<img class="logo-carousel" src="{{url('/images/logo.png')}}">--}}
            <div class="item active">
                <img src="{{url('/image/carousel/home_01.jpg')}}" alt="Chania" >

            </div>

            <div class="item">
                <img src="{{url('/image/carousel/home_02.jpg')}}" alt="Chania" >
            </div>

            <div class="item">
                <img src="{{url('/image/carousel/home_03.jpg')}}" alt="Flower" >
            </div>
            <div class=" right-caption carousel-caption text-right">
                <h1 class="font-normal-banner">{{trans('home.banner')}}</h1>
            </div>
        </div>
        {{--<div class="progress">--}}
        {{--<div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">--}}
        {{--<span class="sr-only">60% Complete</span>--}}
        {{--</div>--}}
        {{--</div>--}}

    </div>
</div>