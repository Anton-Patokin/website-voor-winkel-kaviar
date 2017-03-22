@extends('layouts.app')

@section('content')
    <div class="row margin-top-5">
        <div class="col-md-12">
            <h1>Добавить продукт</h1>
            <hr class="horizontal-rule-black">
        </div>
    </div>
    <div class=" maging_admin">


        {{Form::open(array('url' => 'foo/bar', 'files' => true))}}

        <div class="col-md-6">
            <div class=" form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                {{ Form::label('image', 'Фотография', array('class' => 'control-label'))}}
                {{ Form::file('image', $attributes = array(),array('class'=>'form-control input-lg'))}}
                <div class="col-md-12">
                    @if ($errors->has('image'))
                        <span class="help-block">
                                        <strong>{{$errors->first('image')}}</strong>
                                    </span>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class=" form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                {{ Form::label('category', 'Категория продукта', array('class' => 'control-label'))}}
                {{  Form::select('category', array('fish' => 'Рвба', 'caviar' => 'Икра', 'other' => 'Другое'), 'fish')}}
                <div class="col-md-12">
                    @if ($errors->has('category'))
                        <span class="help-block">
                                        <strong>{{$errors->first('category')}}</strong>
                                    </span>
                    @endif
                </div>
            </div>
        </div>
        <hr class="horizontal-rule-black">
        <div class="col-md-12">
            <div class=" form-group{{ $errors->has('title_ru') ? ' has-error' : '' }}">
                {{ Form::label('title_ru', 'Название продукта на русском', array('class' => 'control-label'))}}
                {{ Form::text('title_ru',old('title_ru'),array('class'=>'form-control input-lg'))}}
                <div class="col-md-12">
                    @if ($errors->has('title_ru'))
                        <span class="help-block">
                                        <strong>{{$errors->first('title_ru')}}</strong>
                                    </span>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class=" form-group{{ $errors->has('text_ru') ? ' has-error' : '' }}">
                {{ Form::label('text_ru', 'Описание продукта на русском', array('class' => 'control-label'))}}
                {{ Form::textarea('text_ru',  null, ['class' => 'form-control input-lg','size' => '30x3'])}}
                <div class="col-md-12">
                    @if ($errors->has('text_ru'))
                        <span class="help-block">
                                        <strong>{{$errors->first('text_ru')}}</strong>
                                    </span>
                    @endif
                </div>
            </div>
        </div>
        {{Form::close()}}
    </div>
@endsection
