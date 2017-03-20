@extends('layouts.app')

@section('content')
    <div class="row margin-top-5">
        <div class="col-md-12">
            <h1>Емейлы</h1>
            <hr class="horizontal-rule-black">
        </div>
    </div>
    <div class=" maging_admin">
        @foreach($emails as $key=>$email)

            <div class="row {{($key%2 ? 'odd':'even')}}">
                <div class="col-md-6 ">
                    <h4><span class="glyphicon glyphicon-envelope"></span> {{$email->email}}</h4>
                </div>
                <div class="col-md-6 {{($key%2 ? 'odd':'even')}}">
                    <h4>{{$email->person}}</h4>
                </div>
            </div>

        @endforeach
    </div>
@endsection
