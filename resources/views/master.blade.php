@extends('welcome')
@section('content')

<!-- start Universities-->
<div class="container univerDirection">
    <div class="row">
        <div class="col-md-12 text-center universities">
            <h2>{{trans('main.UniversitiesUkraine')}}</h2>
        </div>
        <div class="col-md-4 col-6 university">
            <div class="card" >
                <h6 class="text-center">{{trans('main.med')}}</h6>
                <img class="card-img-top" src="images/med.jpeg" alt="">
                <div class="card-body">
                    <p>{{trans('main.medDesc')}}</p>
                    <a href="{{url('/')}}/{{LaravelLocalization::getCurrentLocale()}}/universities#med" role="button">{{trans('main.readMore')}}</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-6 university">
            <div class="card" >
                <h6 class="text-center">{{trans('main.karazina')}}</h6>
                <img class="card-img-top" src="images/karazina.jpg" alt="">
                <div class="card-body">
                    <p>{{trans('main.karazinaDesc')}}</p>
                    <a href="{{url('/')}}/{{LaravelLocalization::getCurrentLocale()}}/universities#karazina" role="button">{{trans('main.readMore')}}</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-6 university">
            <div class="card" >
                <h6 class="text-center">{{trans('main.khiri')}}</h6>
                <img class="card-img-top" src="images/khiri.jpg" alt="">
                <div class="card-body">
                    <p>{{trans('main.khiriDesc')}}</p>
                    <a href="{{url('/')}}/{{LaravelLocalization::getCurrentLocale()}}/universities#khiri" role="button">{{trans('main.readMore')}}</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-6 university">
            <div class="card" >
                <h6 class="text-center">{{trans('main.pharm')}}</h6>
                <img class="card-img-top" src="images/pharm.jpg" alt="">
                <div class="card-body">
                    <p>{{trans('main.pharmDesc')}}</p>
                    <a href="{{url('/')}}/{{LaravelLocalization::getCurrentLocale()}}/universities#pharm" role="button">{{trans('main.readMore')}}</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-6 university">
            <div class="card" >
                <h6 class="text-center">{{trans('main.khai')}}</h6>
                <img class="card-img-top" src="images/khai.jpg" alt="">
                <div class="card-body">
                    <p>{{trans('main.khaiDesc')}}</p>
                    <a href="{{url('/')}}/{{LaravelLocalization::getCurrentLocale()}}/universities#khai" role="button">{{trans('main.readMore')}}</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-6 university">
            <div class="card" >
                <h6 class="text-center">{{trans('main.khapi')}}</h6>
                <img class="card-img-top" src="images/khapi.jpg" alt="">
                <div class="card-body">
                    <p>{{trans('main.khapiDesc')}}</p>
                    <a href="{{url('/')}}/{{LaravelLocalization::getCurrentLocale()}}/universities#khapi" role="button">{{trans('main.readMore')}}</a>
                </div>
            </div>
        </div>
        <div class="moreUniver">
            <h3>{{trans('main.moreUniver')}}</h3>
            <i class="far fa-hand-point-right fa-4x" ></i>

            <a href="{{url('/')}}/{{LaravelLocalization::getCurrentLocale()}}/universities" role="button">{{trans('main.clickHere')}}</a>
        </div>



    </div>
</div>
<!-- start why ukraine-->
<div class="coverWhy">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{trans('main.why')}}</h2>
            </div>
            <div class="col-md-4 wow bounceIn" data-wow-duration="2s" data-wow-offset="400" data-wow-delay=".5s">
                <img src="images/khapi.jpg" alt="">
                <h3>{{trans('main.bestUniver')}}</h3>
                <p>{{trans('main.bestUniverDesc')}}</p>
            </div>
            <div class="col-md-4 wow bounceIn" data-wow-duration="2s" data-wow-offset="400" data-wow-delay="1s">
                <img src="images/education-in-ukraine.jpg" alt="">
                <h3>{{trans('main.affor')}}</h3>
                <p>{{trans('main.afforDesc')}}</p>
            </div>
            <div class="col-md-4 wow bounceIn" data-wow-duration="2s" data-wow-offset="400" data-wow-delay="1.5s">
                <img src="images/leader.jpg" alt="">
                <h3>{{trans('main.inov')}}</h3>
                <p>{{trans('main.inovDesc')}}</p>
            </div>
        </div>
    </div>
</div>

<!-- start photo album-->
<div class="container photoAlbum">
    <div class="row" >
        <div class="col-md-3 col-6 wow fadeIn" data-wow-duration="1s" data-wow-offset="200" data-wow-delay=".20s">
            <a href="images/01.jpg" data-lightbox="roadtrip">
                <img class="img-fluid img-thumbnail " data-lightbox="roadtrip" src="images/01.jpg" alt="">
            </a>
        </div>
        <div class="col-md-3 col-6 wow fadeIn" data-wow-duration="1s" data-wow-offset="200" data-wow-delay=".30s">
            <a href="images/02.jpg" data-lightbox="roadtrip">
                <img class="img-fluid img-thumbnail " data-lightbox="roadtrip" src="images/02.jpg" alt="">
            </a>
        </div>
        <div class="col-md-3 col-6 wow fadeIn" data-wow-duration="1s" data-wow-offset="200" data-wow-delay=".40s">
            <a href="images/03.jpg" data-lightbox="roadtrip">
                <img class="img-fluid img-thumbnail " data-lightbox="roadtrip" src="images/03.jpg" alt="">
            </a>
        </div>
        <div class="col-md-3 col-6 wow fadeIn" data-wow-duration="1s" data-wow-offset="200" data-wow-delay=".50s">
            <a href="images/04.jpg" data-lightbox="roadtrip">
                <img class="img-fluid img-thumbnail " data-lightbox="roadtrip" src="images/04.jpg" alt="">
            </a>
        </div>
        <div class="col-md-3 col-6 wow fadeIn" data-wow-duration="1s" data-wow-offset="200" data-wow-delay="1s">
            <a href="images/05.jpg" data-lightbox="roadtrip">
                <img class="img-fluid img-thumbnail " data-lightbox="roadtrip" src="images/05.jpg" alt="">
            </a>
        </div>
        <div class="col-md-3 col-6 wow fadeIn" data-wow-duration="1s" data-wow-offset="200" data-wow-delay="1.10s">
            <a href="images/06.jpg" data-lightbox="roadtrip">
                <img class="img-fluid img-thumbnail " data-lightbox="roadtrip" src="images/06.jpg" alt="">
            </a>
        </div>
        <div class="col-md-3 col-6 wow fadeIn" data-wow-duration="1s" data-wow-offset="200" data-wow-delay="1.20s">
            <a href="images/07.jpg" data-lightbox="roadtrip">
                <img class="img-fluid img-thumbnail " data-lightbox="roadtrip" src="images/07.jpg" alt="">
            </a>
        </div>
        <div class="col-md-3 col-6 wow fadeIn" data-wow-duration="1s" data-wow-offset="200" data-wow-delay="1.30s">
            <a href="images/08.jpg" data-lightbox="roadtrip">
                <img class="img-fluid img-thumbnail " data-lightbox="roadtrip" src="images/08.jpg" alt="">
            </a>
        </div>
        <div class="col-md-3 col-6 wow fadeIn" data-wow-duration="1s" data-wow-offset="200" data-wow-delay="1.40s">
            <a href="images/09.jpg" data-lightbox="roadtrip">
                <img class="img-fluid img-thumbnail " data-lightbox="roadtrip" src="images/09.jpg" alt="">
            </a>
        </div>
        <div class="col-md-3 col-6 wow fadeIn" data-wow-duration="1s" data-wow-offset="200" data-wow-delay="1.50s">
            <a href="images/10.jpg" data-lightbox="roadtrip">
                <img class="img-fluid img-thumbnail " data-lightbox="roadtrip" src="images/10.jpg" alt="">
            </a>
        </div>
        <div class="col-md-3 col-6 wow fadeIn" data-wow-duration="1s" data-wow-offset="200" data-wow-delay="2s">
            <a href="images/11.jpg" data-lightbox="roadtrip">
                <img class="img-fluid img-thumbnail " data-lightbox="roadtrip" src="images/11.jpg" alt="">
            </a>
        </div>
        <div class="col-md-3 col-6 wow fadeIn" data-wow-duration="1s" data-wow-offset="200" data-wow-delay="2.10s">
            <a href="images/12.jpg" data-lightbox="roadtrip">
                <img class="img-fluid img-thumbnail " data-lightbox="roadtrip" src="images/12.jpg" alt="">
            </a>
        </div>

    </div>
</div>

<!--start contact us -->
<div class="coverContactus">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">{{trans('main.contactUs')}}</h2>
                <i class="far fa-envelope fa-4x"></i>
                <form class="form-inline" role="form" method="post" >
                    {{csrf_field()}}
                    <div class="col-md-6 wow bounceInLeft" data-wow-duration="3s" data-wow-offset="250">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control input-lg" placeholder="{{trans('main.name')}}">
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control input-lg" placeholder="{{trans('main.email')}}">
                        </div>
                        <div class="form-group">
                            <input type="text" name="telephone" class="form-control input-lg" placeholder="{{trans('main.phone')}}">
                        </div>
                        <div class="form-group">
                            <input type="text" name="course" class="form-control input-lg" placeholder="{{trans('main.course')}}" hidden>
                        </div>
                    </div>
                    <div class="col-md-6 divTextarea wow bounceInRight" data-wow-duration="3s" data-wow-offset="250">
                        <div class="form-group">
                            <textarea class="form-control input-lg" name="msg" placeholder={{trans('main.message')}}></textarea>
                        </div>
                        <button class="btn btn-lg btn-block">{{trans('main.contactUs')}}</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
<!-- start gerb-->
<div class="container gerb">
    <div class="row">
        <div class="col wow bounceInDown" data-wow-duration="3s" data-wow-offset="100"><img class="img-thumbnail img-fluid" src="images/gerb.jpg" alt=""></div>
        <div class="col wow bounceInUp" data-wow-duration="3s" data-wow-offset="100"><img class="img-thumbnail img-fluid" src="images/gerbmaghreb.jpg" alt=""></div>
        <div class="col wow bounceInDown" data-wow-duration="3s" data-wow-offset="100"><img class="img-thumbnail img-fluid" src="images/gerbkharkov.png" alt=""></div>

    </div>
</div>
@endsection