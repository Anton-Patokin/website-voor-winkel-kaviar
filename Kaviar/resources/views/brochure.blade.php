<div class="row margin-top-5">
    <div class="col-md-12">
        <h1>{{trans('home.brochure')}}</h1>
        <hr class="horizontal-rule-black">
    </div>
</div>
<div class="row">
    <div class="col-md-12 margin-bottom-2">
        {{--text-center--}}
        <div class="row">
            <div class="col-md-6">
                <iframe width="100%" height="250px" frameborder="0" style="border:0"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2500.728794824288!2d4.382460360301097!3d51.18722136687516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3f6b66b4ff66b%3A0x4a6b9f188f04c59a!2sMix+Shop+Express!5e0!3m2!1sen!2sbe!4v1490726718533"
                        allowfullscreen></iframe>
            </div>
            <div class="col-md-6 " id="about_us">
                <h2>{{trans('home.brochure_sub')}}</h2>
                @foreach (["EN","NL","FR","DE"] as $index=>$folder)
                    <p>{{$folder}}: <a href="/brochure/ROYAL BELGIAN CAVIAR - PROSPEKT FOLDER - {{$folder}}.pdf">ROYAL
                            BELGIAN CAVIAR - PROSPEKT FOLDER - {{$folder}}.pdf</a></p>
                @endforeach
                <p></p>
            </div>
        </div>
    </div>
</div>
