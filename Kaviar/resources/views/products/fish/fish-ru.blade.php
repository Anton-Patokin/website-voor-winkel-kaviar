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
                    <img class="img-products col-md-4 img-responsive" src="{{url('/image/products/osetrPotroshonyi.jpg')}}" alt="">
                    <div class="caption">
                        <h1 class="sub-title-richt-caption">Осётр потрошеный (без головы) в индивидуальной упаковке </h1>

                        <p>
                            Вес одной рыбы от 4,0 кг и до 25,0 кг<br>
                            Cрок хранения: 10 дней при температуре (+2°C)<br>
                            Cрок хранения: 12 месяцев при температуре (-18°C)<br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-sm-6 col-md-12 thumbnail right-caption">
                    <img class="img-products col-md-4 img-responsive" src="{{url('/image/products/svegeeFille.jpg')}}" alt="">
                    <div class="caption">
                        <h1 class="sub-title-richt-caption">Свежее филе осётра на коже или без кожи, полутушка XXL</h1>
                        <p>
                            Перерабатывается в Бельгии, вес продукта от 2,0 кг до 8,0 кг<br>
                            Срок хранения: 10 дней при температуре (+2/+4°C)<br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-sm-6 col-md-12 thumbnail right-caption">
                    <img class="img-products col-md-4 img-responsive" src="{{url('/image/products/fileNaKoge.jpg')}}" alt="">
                    <div class="caption">
                        <h1 class="sub-title-richt-caption">Свежемороженое филе осётра на коже, без кости</h1>
                        <p>
                            Индивидуальная вакуумная упаковка от 300 гр до 600 гр<br>
                            Срок хранения: 12 месяцев при температуре (-18°C)<br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-sm-6 col-md-12 thumbnail right-caption">
                    <img class="img-products col-md-4 img-responsive" src="{{url('/image/products/krupnyeKuski.jpg')}}" alt="">
                    <div class="caption">
                        <h1 class="sub-title-richt-caption">Свежемороженые крупные кусочки осётра</h1>
                        <p>
                            Индивидуальная вакуумная упаковка от 1,5 кг до 3,0 кг<br>
                            Срок хранения: 12 месяцев при температуре (-18°C)<br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-sm-6 col-md-12 thumbnail right-caption">
                    <img class="img-products col-md-4 img-responsive" src="{{url('/image/products/holodnogoKopchenija.jpg')}}" alt="">
                    <div class="caption">
                        <h1 class="sub-title-richt-caption">Филе осётра холодного копчения, на коже</h1>
                        <p>
                            Натуральное копчение на ольховых опилках (Германия)<br>
                            Упаковка: в картоне по 3,0 кг (кусочки от 200 гр до 400 гр)<br>
                            Срок хранения: 8 месяцев при температуре (-18°C)<br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-sm-6 col-md-12 thumbnail right-caption">
                    <img class="img-products col-md-4 img-responsive" src="{{url('/image/products/fileOsetraHolodnogoKopchenija.jpg')}}" alt="">
                    <div class="caption">
                        <h1 class="sub-title-richt-caption">Филе осётра горячего копчения, на коже</h1>
                        <p>
                            Натуральное копчение на ольховых опилках (Бельгия)<br>
                            Индивидуальная вакуумная упаковка от 300 гр до 600 гр<br>
                            Срок хранения: 30 дней при температуре (+2/+4°C)<br>
                            Срок хранения: 12 месяцев при температуре (-18°C)<br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-sm-6 col-md-12 thumbnail right-caption">
                    <img class="img-products col-md-4 img-responsive" src="{{url('/image/products/cheloeFile.jpg')}}" alt="">
                    <div class="caption">
                        <h1 class="sub-title-richt-caption"> Филе осётра холодного или горячего копчения на коже, полутушка XXL</h1>
                        <p>
                            Натуральное копчение на ольховых опилках (Бельгия)<br>
                            Индивидуальная вакуумная упаковка от 2,5 кг до 6,5 кг<br>
                            Срок хранения: 30 дней при температуре (+2/+4°C)<br>
                            Срок хранения: 12 месяцев при температуре (-18°C)<br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-sm-6 col-md-12 thumbnail right-caption">
                    <img class="img-products col-md-4 img-responsive" src="{{url('/image/products/fileBelugi.jpg')}}" alt="">
                    <div class="caption">
                        <h1 class="sub-title-richt-caption">Свежемороженое филе Белуги на коже, без кости</h1>
                        <p>
                            Индивидуальная вакуумная упаковка от 800 гр до 1,7 кг<br>
                            Срок хранения: 12 месяцев при температуре (-18°C)<br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-sm-6 col-md-12 thumbnail right-caption">
                    <img class="img-products col-md-4 img-responsive" src="{{url('/image/products/brushko.jpg')}}" alt="">
                    <div class="caption">
                        <h1 class="sub-title-richt-caption">Брюшко Белуги горячего копчения на коже, без кости</h1>
                        <p>
                            Индивидуальная вакуумная упаковка от 200 гр до 400 гр<br>
                            Срок хранения: 30 дней при температуре (+2/+4°C)<br>
                            Срок хранения: 12 месяцев при температуре (-18°C)<br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-sm-6 col-md-12 thumbnail right-caption">
                    <img class="img-products col-md-4 img-responsive" src="{{url('/image/products/belugaVjalinaja.jpg')}}" alt="">
                    <div class="caption">
                        <h1 class="sub-title-richt-caption">Белуга вяленая, небольшими малосолёными кусочками</h1>
                        <p>
                            Упаковка: в картоне по 5,0 кг (кусочки от 200 гр до 500 гр)<br>
                            Срок хранения: 8 месяцев при температуре (-18°C)<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('mail')
    @include('footer')
@endsection
