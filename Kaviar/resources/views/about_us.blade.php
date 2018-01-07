@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row margin-top-5">
            <div class="col-md-12">
                <h1>{{trans('home.about_us')}}</h1>
                <hr class="horizontal-rule-black">
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <iframe  class="google_maps"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2500.728794824288!2d4.382460360301097!3d51.18722136687516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3f6b66b4ff66b%3A0x4a6b9f188f04c59a!2sMix+Shop+Express!5e0!3m2!1sen!2sbe!4v1490726718533"
                        allowfullscreen height="800px"></iframe>
            </div>

            <div class="col-md-4 ">
                {{--text-center--}}
                <div class="col-md-12 " id="about_us">
                    <h4>{{trans('home.aboutusµ_titel')}}</h4>
                    <p>{{trans('home.about_us_text')}}</p>
                    <div class="col-md-12">
                        <hr>

                    </div>
                    <h5>IKRIANNIKOVA ELENA</h5>
                    <p>BTW: BE 0888.523.859.</p>
                    <p>ABDIJSTRAAT 191 - 2020 ANTWERPEN - BELGIË
                    </p>
                    <p>msexpress.be</p>
                    <p>Tel.: +32 3 248 16 83</p>

                </div>
            </div>
        </div>
    </div>
    @include('mail')
@endsection
