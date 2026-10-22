@extends('welcome')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12  universitiesPage text-center">
                <h2>{{trans('main.UniversitiesUkraine')}}</h2>
            </div>
        </div>
        <div class="container univerDirection">
            <div class="row">

                <div id="med" class="col-md-12 universityPage">

                    <h3 class="text-center">{{trans('main.med')}}</h3>
                    <img src="{{url('images/med.jpeg')}}" alt="">
                    <p>{{trans('main.medDesc')}}</p>

                </div>
                <div id="pharm" class="col-md-12 universityPage">

                    <h3 class="text-center">{{trans('main.pharm')}}</h3>
                    <img src="{{url('images/pharm.jpg')}}" alt="">
                    <p>{{trans('main.pharmDesc')}}</p>

                </div>
                <div id="karazina" class="col-md-12 universityPage">

                    <h3 class="text-center">{{trans('main.karazina')}}</h3>
                    <img  src="{{url('images/karazina.jpg')}}" alt="">
                    <p>{{trans('main.karazinaDesc')}}</p>

                </div>
                <div id="khiri" class="col-md-12 universityPage">

                    <h3 class="text-center">{{trans('main.khiri')}}</h3>
                    <img  src="{{url('images/khiri.jpg')}}" alt="">
                    <p>{{trans('main.khiriDesc')}}</p>

                </div>
                <div id="khapi" class="col-md-12 universityPage">

                    <h3 class="text-center">{{trans('main.khapi')}}</h3>
                    <img src="{{url('images/khapi.jpg')}}" alt="">
                    <p>{{trans('main.khapiDesc')}}</p>

                </div>
                <div id="khai" class="col-md-12 universityPage">

                    <h3 class="text-center">{{trans('main.khai')}}</h3>
                    <img  src="{{url('images/khai.jpg')}}" alt="">
                    <p>{{trans('main.khaiDesc')}}</p>

                </div>
                <div id="khadi" class="col-md-12 universityPage">

                    <h3 class="text-center">{{trans('main.khadi')}}</h3>
                    <img  src="{{url('images/khadi.jpg')}}" alt="">
                    <p>{!! trans('main.khadiDesc') !!}</p>

                </div>


            </div>
        </div>
    </div>
@endsection