<div class="second_background container-fluid row margin-top-5 " id="contact">
    <div class="row margin-top-5 ">
        <div class="col-md-8 col-md-offset-2">
            @if(Session::has('success'))
                <div class="alert alert-success text-center">
                    <h3>{{trans('mail.success')}}</h3>
                    {{Session::forget('success')}}
                </div>
            @endif
        </div>
        {{--<div class="col-md-12">--}}
        {{--<h1>{{trans('home.mail_h1')}}</h1>--}}
        {{--<hr class="horizontal-rule-white">--}}
        {{--</div>--}}
    </div>
    <div class="row margin-top-2">
        <div class="col-md-12">
            <h2 class="align-center">{{trans('home.mail_call_to_action')}}</h2>
            <img class="img-responsive img-center mail-size" src="{{url('/image/icon/mail.png')}}"
                 alt="{{trans('image_alt.mail')}}">
        </div>
        <div class="col-md-12">
            <div class="col-md-8 col-md-offset-2">
                <form role="form" method="POST" action="{{ $_SERVER['REQUEST_URI'] .'/send_mail'}}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label mail-label margin-top-1">{{trans('mail.name')}}
                            :</label>
                        <div class="col-md-12">
                            <input type="name" class="form-control input-lg" id="name" name="name"
                                   value="{{ old('name') }}" placeholder="IKRIANNIKOVA ELENA">
                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class=" form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label mail-label margin-top-1">{{trans('mail.mail')}}
                            :</label>
                        <div class="col-md-12">
                            <input type="email" class="form-control input-lg" id="email" name="email"
                                   value="{{ old('email') }}" placeholder="info&#64;msexpress.be">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class=" form-group{{ $errors->has('vat') ? ' has-error' : '' }}">
                        <label for="vat" class="col-md-4 control-label mail-label margin-top-1">{{trans('mail.vat')}}
                            :</label>
                        <div class="col-md-12">
                            <input type="vat" class="form-control input-lg" id="vat" name="vat" value="{{ old('vat') }}"
                                   placeholder="{{trans('mail.vat_example')}}">
                            @if ($errors->has('vat'))
                                <span class="help-block">
                                        <strong>{{$errors->first('vat')}}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class=" col-md-12 margin-top-2">
                        <div class=" form-group{{ $errors->has('checkbox') ? ' has-error' : '' }}">
                            <div class="col-md-3">
                                <label class="margin-left-checkbox">
                                    <input type="checkbox" name="checkbox['company']" id="opta"/ checked>
                                    <span class="checkboxtext">
                              {{trans('mail.company')}}
                            </span>
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label class="margin-left-checkbox">
                                    <input type="checkbox" name="checkbox['person']" id="opta" />
                                    <span class="checkboxtext">
                              {{trans('mail.person')}}
                            </span>
                                </label>
                            </div>

                            <div class="col-md-12">
                                @if ($errors->has('checkbox'))
                                    <span class="help-block">
                                        <strong>{{$errors->first('checkbox')}}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class=" form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                        <label for="message"
                               class="col-md-4 control-label mail-label margin-top-1">{{trans('mail.message')}}
                            :</label>
                        <div class="col-md-12">
                            <textarea rows="4" cols="50" type="message" class="form-control input-lg" id="message"
                                      name="message" value="{{ old('message') }}"></textarea>
                            @if ($errors->has('message'))
                                <span class="help-block">
                                        <strong>{{$errors->first('message')}}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn  btn-primary  btn-lg pull-right margin-top-2">
                                {{trans('mail.send')}}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>