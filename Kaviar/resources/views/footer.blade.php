<div class="container-fluid margin-top-5 margin-bottom-5">
    <div class="row">
        <div class="col-md-12 margin-bottom-2">
            <div class="col-md-6 ">
                <div class="col-md-6">
                    <iframe width="100%" height="250px" frameborder="0" style="border:0"
                            src="https://www.google.com/maps/embed/v1/place?q=Abdijstraat%2C%20Antwerp%20msexpress&key=AIzaSyCPe8GFC_SZz7BWH17695FwfT1sHC9kR6g"
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




