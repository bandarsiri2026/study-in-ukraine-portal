@extends('welcome')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 aboutUsPage">
                <h2>{{trans('main.photos')}}</h2>
            </div>
            <div class="container photoAlbum">
                <div class="row" >
                    <div class="col-md-3 col-6">
                        <a href="{{url('images/01.jpg')}}" data-lightbox="roadtrip">
                            <img class="img-fluid img-thumbnail " data-lightbox="roadtrip" src="{{url('images/01.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="col-md-3 col-6">
                        <a href="{{url('images/02.jpg')}}" data-lightbox="roadtrip">
                            <img class="img-fluid img-thumbnail " data-lightbox="roadtrip" src="{{url('images/02.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="col-md-3 col-6">
                        <a href="{{url('images/03.jpg')}}" data-lightbox="roadtrip">
                            <img class="img-fluid img-thumbnail " data-lightbox="roadtrip" src="{{url('images/03.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="col-md-3 col-6">
                        <a href="{{url('images/04.jpg')}}" data-lightbox="roadtrip">
                            <img class="img-fluid img-thumbnail " data-lightbox="roadtrip" src="{{url('images/04.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="col-md-3 col-6">
                        <a href="{{url('images/05.jpg')}}" data-lightbox="roadtrip">
                            <img class="img-fluid img-thumbnail " data-lightbox="roadtrip" src="{{url('images/05.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="col-md-3 col-6">
                        <a href="{{url('images/06.jpg')}}" data-lightbox="roadtrip">
                            <img class="img-fluid img-thumbnail " data-lightbox="roadtrip" src="{{url('images/06.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="col-md-3 col-6">
                        <a href="{{url('images/07.jpg')}}" data-lightbox="roadtrip">
                            <img class="img-fluid img-thumbnail " data-lightbox="roadtrip" src="{{url('images/07.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="col-md-3 col-6">
                        <a href="{{url('images/08.jpg')}}" data-lightbox="roadtrip">
                            <img class="img-fluid img-thumbnail " data-lightbox="roadtrip" src="{{url('images/08.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="col-md-3 col-6">
                        <a href="{{url('images/09.jpg')}}" data-lightbox="roadtrip">
                            <img class="img-fluid img-thumbnail " data-lightbox="roadtrip" src="{{url('images/09.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="col-md-3 col-6">
                        <a href="{{url('images/10.jpg')}}" data-lightbox="roadtrip">
                            <img class="img-fluid img-thumbnail " data-lightbox="roadtrip" src="{{url('images/10.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="col-md-3 col-6">
                        <a href="{{url('images/11.jpg')}}" data-lightbox="roadtrip">
                            <img class="img-fluid img-thumbnail " data-lightbox="roadtrip" src="{{url('images/11.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="col-md-3 col-6">
                        <a href="{{url('images/12.jpg')}}" data-lightbox="roadtrip">
                            <img class="img-fluid img-thumbnail " data-lightbox="roadtrip" src="{{url('images/12.jpg')}}" alt="">
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection