<div class="second_background container-fluid row margin-top-5">
    <div class="row margin-top-5 ">
        <div class="col-md-12">
            <h1>{{trans('home.products_h1')}}</h1>
            <hr class="horizontal-rule-white">
        </div>
    </div>
    <div class="row margin-top-2">
        <div class="col-md-12">
            <h2 class="align-center">{{trans('home.mail_call_to_action')}}</h2>
            <img class="img-responsive img-center mail-size" src="{{url('/image/icon/mail.png')}}"
                 alt="{{trans('image_alt.mail')}}">
        </div>
        <div class="col-md-12">
            <div class="col-md-8 col-md-offset-2">
                <form role="form" method="POST" action="{{url('/send_mail')}}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label mail-label margin-top-1">{{trans('mail.name')}}
                            :</label>
                        <div class="col-md-12">
                            <input type="name" class="form-control input-lg" id="name" name="name"
                                   value="{{ old('name') }}" placeholder="Anton Patokin" required>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class=" form-group{{ $errors->has('mail') ? ' has-error' : '' }}">
                        <label for="mail" class="col-md-4 control-label mail-label margin-top-1">{{trans('mail.mail')}}
                            :</label>
                        <div class="col-md-12">
                            <input type="mail" class="form-control input-lg" id="mail" name="mail"
                                   value="{{ old('name') }}" placeholder="Anton.patokin&#64;gmail.com" required>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
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
                        <div class=" form-group{{ $errors->has('person') ? ' has-error' : '' }}">
                            <div class="col-md-3">
                                <label class="margin-left-checkbox">
                                    <input type="checkbox" name="company" id="opta"/>
                            <span class="checkboxtext">
                              {{trans('mail.company')}}
                            </span>
                                </label>
                            </div>
                            <div class="col-md-3">
                                <label class="margin-left-checkbox">
                                    <input type="checkbox" name="person" id="opta" checked/>
                            <span class="checkboxtext">
                              {{trans('mail.person')}}
                            </span>
                                </label>
                            </div>
                        </div>
                        @if ($errors->has('peson'))
                            <span class="help-block">
                                        <strong>{{$errors->first('person')}}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class=" form-group{{ $errors->has('vat') ? ' has-error' : '' }}">
                        <label for="message" class="col-md-4 control-label mail-label margin-top-1">{{trans('mail.message')}}
                            :</label>
                        <div class="col-md-12">
                            <textarea rows="4" cols="50" type="message" class="form-control input-lg" id="message" name="message" value="{{ old('message') }}"
                                   required></textarea>
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