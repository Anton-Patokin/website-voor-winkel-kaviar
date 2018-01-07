<div class="container-fluid margin-top-5 margin-bottom-5">
    <div class="row">
        <div class="col-md-12 margin-bottom-2">
            <div class="col-md-6 ">
                <div class="col-md-6">
                    <iframe width="100%" height="250px" frameborder="0" style="border:0"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2500.728794824288!2d4.382460360301097!3d51.18722136687516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3f6b66b4ff66b%3A0x4a6b9f188f04c59a!2sMix+Shop+Express!5e0!3m2!1sen!2sbe!4v1490726718533"
                            allowfullscreen></iframe>
                </div>
                <div class="col-md-6 " id="about_us">
                    <h3>Контактные телефоны:</h3>

                    <h4>Ikriannikova Elena</h4>

                    <h5>+32 3 248 16 83 или</h5>

                    <h5>+32 486 299 077 (WhatsApp / Viber)</h5>
                    <h5>Email: info@msexpress.be</h5>
                    {{--text-center--}}

                </div>
            </div>
            <div class="col-md-6 line-left">
                <div class="col-md-12">


                    <h2>{{trans('home.about_us')}}</h2>
                    <p>{{trans('home.about_us_text')}}</p>

                    {{--<div class="col-md-8 col-md-offset-2">--}}
                    {{--@if(Session::has('success_save'))--}}
                    {{--<div class="alert alert-success text-center">--}}
                    {{--<h3>{{trans('mail.success_save')}}</h3>--}}
                    {{--{{Session::forget('success_save')}}--}}
                    {{--</div>--}}
                    {{--@endif--}}
                    {{--</div>--}}
                    {{--<h2>{{trans('home.subscribe')}}</h2>--}}
                    {{--<form role="form" method="POST" action="{{ $_SERVER['REQUEST_URI'] .'/save_mail'}}">--}}
                    {{--{{ csrf_field() }}--}}

                    {{--<div class=" form-group{{ $errors->has('email_save') ? ' has-error' : '' }}">--}}
                    {{--<label for="email_save" class="col-md-4 control-label mail-label margin-top-1">{{trans('mail.mail')}}--}}
                    {{--:</label>--}}
                    {{--<div class="col-md-12">--}}
                    {{--<input type="email_save" class="form-control input-lg" id="email_save" name="email_save"--}}
                    {{--value="{{ old('email_save') }}" placeholder="Anton.patokin&#64;gmail.com">--}}
                    {{--@if ($errors->has('email_save'))--}}
                    {{--<span class="help-block">--}}
                    {{--<strong>{{ $errors->first('email_save') }}</strong>--}}
                    {{--</span>--}}
                    {{--@endif--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class=" col-md-12 margin-top-2">--}}
                    {{--<div class=" form-group{{ $errors->has('checkbox_save') ? ' has-error' : '' }}">--}}
                    {{--<div class="col-md-4">--}}
                    {{--<label class="margin-left-checkbox">--}}
                    {{--<input type="checkbox" name="checkbox_save['company']" id="opta"/>--}}
                    {{--<span class="checkboxtext">--}}
                    {{--{{trans('mail.company')}}--}}
                    {{--</span>--}}
                    {{--</label>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-4">--}}
                    {{--<label class="margin-left-checkbox">--}}
                    {{--<input type="checkbox" name="checkbox_save['person']" id="opta" checked/>--}}
                    {{--<span class="checkboxtext">--}}
                    {{--{{trans('mail.person')}}--}}
                    {{--</span>--}}
                    {{--</label>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-4">--}}
                    {{--<button type="submit" class="btn  btn-primary  btn-lg pull-right margin-top-2">--}}
                    {{--{{trans('mail.send')}}--}}
                    {{--</button>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-12">--}}
                    {{--@if ($errors->has('checkbox'))--}}
                    {{--<span class="help-block">--}}
                    {{--<strong>{{$errors->first('checkbox')}}</strong>--}}
                    {{--</span>--}}
                    {{--@endif--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</form>--}}
                </div>
            </div>
        </div>
    </div>
</div>




