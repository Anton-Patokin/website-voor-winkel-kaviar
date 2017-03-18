<div class="row margin-top-5">
    <div class="col-md-12">
        <h1>{{trans('home.products_h1')}}</h1>
        <hr class="horizontal-rule-black">
    </div>
</div>
<div class="row margin-top-2">
    <div class="col-sm-6 col-md-3">
        <div class="thumbnail">
            <img src="{{url('/image/products/product_1.jpg')}}" alt="{{trans('image_alt.fish')}}">
            <div class="caption">
                <h3 class="sub-title">{{trans('home.fish')}}</h3>
                <p>{{trans('home.fish_text_short')}}</p>
                <p><a href="{{ $_SERVER['REQUEST_URI'] .'/test'}}" class="btn btn-info" role="button">{{trans('home.production_button')}}</a><a href="{{ $_SERVER['REQUEST_URI'] .'/test'}}" class="btn btn-success pull-right" role="button">{{trans('home.production_button')}}</a></p>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="thumbnail">
            <img src="{{url('/image/products/product_2.jpg')}}" alt="{{trans('image_alt.caviar')}}">
            <div class="caption">
                <h3 class="sub-title">{{trans('home.caviar')}}</h3>
                <p>{{trans('home.caviar_text_short')}}</p>
                <p><a href="#" class="btn btn-info" role="button">{{trans('home.production_button')}}</a></p>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="thumbnail">
            <img src="{{url('/image/products/product_3.jpg')}}" alt="{{trans('image_alt.other_product')}}">
            <div class="caption">
                <h3 class="sub-title">{{trans('home.other')}}</h3>
                <p>{{trans('home.other_text_short')}}</p>
                <p><a href="#" class="btn btn-info" role="button">{{trans('home.production_button')}}</a></p>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="thumbnail">
            <img src="{{url('/image/products/product_4.jpg')}}" alt="{{trans('image_alt.delivery')}}">
            <div class="caption">
                <h3 class="sub-title">{{trans('home.delivery')}}</h3>
                <p>{{trans('home.delivery_text_short')}}</p>
                <p><a href="#" class="btn btn-info" role="button">{{trans('home.delivery_button')}}</a></p>
            </div>
        </div>
    </div>
</div>