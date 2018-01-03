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
                        src="https://www.google.com/maps/embed/v1/place?q=Abdijstraat%2C%20Antwerp%20msexpress&key=AIzaSyCPe8GFC_SZz7BWH17695FwfT1sHC9kR6g"
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
