@extends('welcome')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 aboutUsPage">
                <h2 class="text-center">{{trans('main.informations')}}</h2>
                <p>{!! trans('main.informationsPage')!!}</p>
            </div>
        </div>
    </div>
@endsection