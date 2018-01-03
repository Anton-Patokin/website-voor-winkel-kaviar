@extends('layouts.app')

@section('content')
    <div class="row carousel-position">
        <div class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                {{--<img class="logo-carousel" src="{{url('/images/logo.png')}}">--}}
                <div class="item active">
                    <img src="{{url('/image/carousel/caviar.jpg')}}" alt="{{trans('image_alt.carousel_1')}}">
                    <div class=" right-caption carousel-caption text-right">
                        <h1 class="font-normal-banner">{{trans('product.'.$product)}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container margin-top-5">
        <div class="component-wrapper">
            <div class="component-item">
                <div class="thumbnail right-caption">
                    <h1 class="sub-title-richt-caption">GOLD LABEL</h1>

                    <img class="img-responsive" src="{{url('/image/products/GOLD-LABEL.jpg')}}" alt="">
                    <div class="caption">
                        <h4>Сорт икры:</h4>
                        <p>Сибирский осётр или скрещенный Русский осётр с Сибирским</p>
                        <h4>Латинское название:</h4>
                        <p>Acipenser baeri или гибрид между Acipenser gueldenstaedti и Acipenser baeri</p>
                        <h4>Способ приготовления:</h4>
                        <p>Слегка подсолённая, забойная икра, готовится традиционным способом</p>
                        <h4>Диаметр икринок:</h4>
                        <p>От 2,7 мм до 3,2 мм (от маленького до среднего)</p>
                        <h4>Возраст осётра:</h4>
                        <p>Не менее 5/6 лет</p>
                        <h4>Цвет икринок:</h4>
                        <p>От глубокого тёмно-зелёного до чёрного цвета</p>
                        <h4>Вкус икры:</h4>
                        <p>Слабо солёный, а затем богатый сливочный вкус с тонким приятным послевкусием</p>
                        <h4>Есть в наличии (металл):</h4>
                        <p>10 гр – 30 гр – 50 гр – 125 гр – 250 гр – 500 гр и 1.000 гр</p>
                        <h4>Происхождение икры:</h4>
                        <p>Страна Бельгия (Аквакультура)</p>
                    </div>
                </div>
            </div>

            <div class="component-item">
                <div class=" thumbnail right-caption">
                    <h1 class="sub-title-richt-caption">PLATINUM</h1>

                    <img class="img-responsive" src="{{url('/image/products/PLATINUM.jpg')}}" alt="">
                    <div class="caption">
                        <h4>Сорт икры:</h4>
                        <p>Скрещенный Русский осётр с Сибирским (Гибрид)</p>
                        <h4>Латинское название:</h4>
                        <p>Гибрид между Acipenser gueldenstaedti и Acipenser baeri</p>
                        <h4>Способ приготовления:</h4>
                        <p>Слегка подсолённая, забойная икра, готовится традиционным способом</p>
                        <h4>Диаметр икринок:</h4>
                        <p>От 2,9 мм до 3,4 мм (средний)</p>
                        <h4>Возраст осётра:</h4>
                        <p>Не менее 7/8 лет</p>
                        <h4>Цвет икринок:</h4>
                        <p>От оливково-зелёного до глубокого тёмно-зелёного цвета</p>
                        <h4>Вкус икры:</h4>
                        <p>Твёрдые икринки со слабо солёным, сливочным вкусом и ощущением тонкого аромата ореха</p>
                        <h4>Есть в наличии (металл):</h4>
                        <p>10 гр – 30 гр – 50 гр – 125 гр – 250 гр – 500 гр и 1.000 гр</p>
                        <h4>Происхождение икры:</h4>
                        <p>Страна Бельгия (Аквакультура)</p>
                    </div>
                </div>
            </div>

            <div class="component-item">
                <div class=" thumbnail right-caption">
                    <h1 class="sub-title-richt-caption">OSIETRA</h1>
                    <img class="img-responsive" src="{{url('/image/products/OSIETRA.jpg')}}" alt="">
                    <div class="caption">
                        <h4>Сорт икры:</h4>
                        <p>Осётр из региона Каспийского моря, также известен как русский осётр</p>
                        <h4>Латинское название:</h4>
                        <p>Acipenser gueldenstaedti</p>
                        <h4>Способ приготовления:</h4>
                        <p>Слегка подсолённая, забойная икра, готовится традиционным способом</p>
                        <h4>Диаметр икринок:</h4>
                        <p>От 2,9 мм до 3,4 мм (средний)</p>
                        <h4>Возраст осётра:</h4>
                        <p>Не менее 9/10 лет</p>
                        <h4>Цвет икринок:</h4>
                        <p>Варьирует от оливково-зелёного до тёмно-зелёного, иногда янтарного цвета</p>
                        <h4>Вкус икры:</h4>
                        <p>Приятный слегка подсолённый ореховый вкус с последующим ощущением минералов</p>
                        <h4>Есть в наличии (металл):</h4>
                        <p>10 гр – 30 гр – 50 гр – 125 гр – 250 гр – 500 гр и 1.000 гр</p>
                        <h4>Происхождение икры:</h4>
                        <p>Страна Бельгия (Аквакультура)</p>
                    </div>
                </div>
            </div>

            <div class="component-item">
                <div class=" thumbnail right-caption">
                    <h1 class="sub-title-richt-caption">BELUGA</h1>
                    <img class="img-responsive" src="{{url('/image/products/OSIETRA.jpg')}}" alt="">
                    <div class="caption">
                        <h4>Сорт икры:</h4>
                        <p>Белуга</p>
                        <h4>Латинское название:</h4>
                        <p>Huso huso</p>
                        <h4>Способ приготовления:</h4>
                        <p>Слегка подсолённая, забойная икра, готовится традиционным способом</p>
                        <h4>Диаметр икринок:</h4>
                        <p>Не менее 3,5 мм (крупный)</p>
                        <h4>Возраст осётра:</h4>
                        <p>Не менее 18 лет</p>
                        <h4>Цвет икринок:</h4>
                        <p>Отражение светло-серого цвета до отблеска Эбенового дерева</p>
                        <h4>Вкус икры:</h4>
                        <p>Деликатно подсолённый вкус с богатым ощущением маслянистости и сливок придающие
                            невероятно-изящное послевкусие</p>
                        <h4>Есть в наличии (металл):</h4>
                        <p>10 гр – 30 гр – 50 гр – 125 гр – 250 гр – 500 гр и 1.000 гр</p>
                        <h4>Происхождение икры:</h4>
                        <p>Страна Бельгия (Аквакультура)</p>
                    </div>
                </div>
            </div>
            <div class="component-item">
                <div class=" thumbnail right-caption">
                    <h1 class="sub-title-richt-caption">WHITE PEARL</h1>
                    <img class="img-responsive" src="{{url('/image/products/OSIETRA.jpg')}}" alt="">
                    <div class="caption">
                        <h4>Сорт икры:</h4>
                        <p>Стерлядь Альбинос</p>
                        <h4>Latijnse naam:</h4>
                        <p>Acipenser ruthenus (разновидность Альбиноса)</p>
                        <h4>Способ приготовления:</h4>
                        <p>Слегка подсолённая, забойная икра, готовится традиционным способом</p>
                        <h4>Диаметр икринок:</h4>
                        <p>От 2,2 мм до 2,7 мм (мелкий)</p>
                        <h4>Возраст осётра:</h4>
                        <p>Не менее 4 лет</p>
                        <h4>Цвет икринок:</h4>
                        <p>Уникальный перламутровый цвет</p>
                        <h4>Вкус икры:</h4>
                        <p>Богатый вкус масла и подсоленных сливок, который таит на языке</p>
                        <h4>Есть в наличии (металл):</h4>
                        <p>10 гр – 30 гр – 50 гр и 125 гр</p>
                        <h4>Происхождение икры:</h4>
                        <p>Страна Бельгия (Аквакультура)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('mail')
    @include('footer')
@endsection
