@extends('welcome')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 aboutUsPage">
                <h2 class="text-center">{{trans('main.service')}}</h2>
                <p>{!! trans('main.servicePage')!!}</p>
            </div>
        </div>
    </div>
@endsection