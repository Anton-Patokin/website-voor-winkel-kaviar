<div class="row margin-top-5">
    <div class="col-md-12">
        <h1>{{trans('home.products_h1')}}</h1>
        <hr class="horizontal-rule-black">
    </div>
</div>
<div class="row margin-top-2">
    <div class="col-sm-6 col-md-3">
        <div class="thumbnail">
            <div id="box">
                <h1 class="sub-title">{{trans('home.fish')}}</h1>
            </div>
            <img src="{{url('/image/products/product_1.jpg')}}" alt="{{trans('image_alt.fish')}}">
            <div class="caption">
                <p>{{trans('home.fish_text_short')}}</p>
                <p class="margin-top-10"><a href="{{ $_SERVER['REQUEST_URI'] .'/test'}}" class="btn btn-info btn-lg"
                                            role="button">{{trans('home.production_button')}}</a>
                    <a href="{{ $_SERVER['REQUEST_URI'] .'/video/fish'}}" class="btn btn-success btn-lg"
                       role="button" data-toggle="modal"
                       data-target="#myModal">{{trans('home.production_how_it_made_button')}}</a>

                </p>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="thumbnail">
            <div id="box">
                <h1 class="sub-title">{{trans('home.caviar')}}</h1>
            </div>
            <img src="{{url('/image/products/product_2.jpg')}}" alt="{{trans('image_alt.caviar')}}">
            <div class="caption">
                <p>{{trans('home.caviar_text_short')}}</p>
                <p class="margin-top-10">
                    <a href="#" class="btn btn-info btn-lg" role="button">{{trans('home.production_button')}}</a>
                    <a href="{{ $_SERVER['REQUEST_URI'] .'/video/caviar'}}" class="btn btn-success  btn-lg"
                       role="button" data-toggle="modal" data-target="#myModal_1">{{trans('home.video_button')}}</a>

                </p>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="thumbnail">
            <div id="box">
                <h1 class="sub-title">{{trans('home.other')}}</h1>
            </div>
            <img src="{{url('/image/products/product_3.jpg')}}" alt="{{trans('image_alt.other_product')}}">
            <div class="caption">
                <p>{{trans('home.other_text_short')}}</p>
                <p class="margin-top-10"><a href="#" class="btn btn-info btn-lg"
                                            role="button">{{trans('home.production_button')}}</a></p>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="thumbnail">
            <div id="box">
                <h1 class="sub-title">{{trans('home.delivery')}}</h1>
            </div>
            <img src="{{url('/image/products/product_4.jpg')}}" alt="{{trans('image_alt.delivery')}}">
            <div class="caption">
                <p>{{trans('home.delivery_text_short')}}</p>
                <p class="margin-top-10"><a href="#" class="btn btn-info btn-lg"
                                            role="button">{{trans('home.delivery_button')}}</a></p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div id="myModal" class="modal fade " role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            </div>
        </div>
    </div>
</div>


<div id="myModal_1" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
        </div>
    </div>
</div>