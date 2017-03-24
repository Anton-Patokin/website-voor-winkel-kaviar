@extends('layouts.app')

@section('content')
    <div class="row carousel-position">
        <div class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                {{--<img class="logo-carousel" src="{{url('/images/logo.png')}}">--}}
                <div class="item active">
                    <img src="{{url('/image/carousel/fish.jpg')}}" alt="{{trans('image_alt.carousel_1')}}">
                    <div class=" right-caption carousel-caption text-right">
                        <h1 class="font-normal-banner">{{trans('product.'.$product)}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container margin-top-5">
        <div class="row">
            <div class="col-md-12">


                <div class="col-sm-6 col-md-12 thumbnail right-caption">

                    <img class="col-md-3 " src="{{url('/image/products/product_1.jpg')}}" alt="">
                    <div class="caption">
                        <h1 class="sub-title-richt-caption">Thumbnail label </h1>

                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget. Eget metus Cras justo odio, dapibus ac facilisis in, egestas eget. Eget metus
                            Cras justo odio, dapibus ac facilisis in, egestas eget. Eget metus
                            Cras justo odio, dapibus ac facilisis in, egestas eget. Eget metusCras justo odio, dapibus ac facilisis in, egestas eget. Eget metus</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-12 thumbnail right-caption">
                    <h1 class="sub-title">Thumbnail label </h1>

                    <img class="col-md-3 " src="{{url('/image/products/product_1.jpg')}}" alt="">
                    <div class="caption">
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget. Eget metus Cras justo odio, dapibus ac facilisis in, egestas eget. Eget metus
                            Cras justo odio, dapibus ac facilisis in, egestas eget. Eget metus
                            Cras justo odio, dapibus ac facilisis in, egestas eget. Eget metusCras justo odio, dapibus ac facilisis in, egestas eget. Eget metus</p>
                    </div>
                </div>


            </div>
        </div>
    </div>

    @include('mail')
    @include('footer')
@endsection
