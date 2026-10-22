
<div class="cover">
    <div class="container">

        <nav class="float navbar navbar-expand-lg navbar-light">

            <div>
                <a href="{{url('/')}}/{{LaravelLocalization::getCurrentLocale()}}">
                    <i class="fas fa-graduation-cap fa-4x" style="color: #007bff"></i>
                    <h6 class="logo" >{{trans('main.logo')}}</h6>
                    <span class="company">Maghreb Dirassa</span>
                </a>
            </div>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ">

                    <li class="nav-item ">
                        <a class="nav-link links " href="{{url('/')}}/{{LaravelLocalization::getCurrentLocale()}}/registration">{{trans('main.registration')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link links" href="{{url('/')}}/{{LaravelLocalization::getCurrentLocale()}}/about-us">{{trans('main.aboutUs')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link links" href="{{url('/')}}/{{LaravelLocalization::getCurrentLocale()}}/service">{{trans('main.service')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link links" href="{{url('/')}}/{{LaravelLocalization::getCurrentLocale()}}/informations">{{trans('main.informations')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link links" href="{{url('/')}}/{{LaravelLocalization::getCurrentLocale()}}/universities">{{trans('main.universities')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link links" href="{{url('/')}}/{{LaravelLocalization::getCurrentLocale()}}/fee">{{trans('main.fee')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link links" href="{{url('/')}}/{{LaravelLocalization::getCurrentLocale()}}/photos">{{trans('main.photos')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link links"href="{{url('/')}}/{{LaravelLocalization::getCurrentLocale()}}/contact-us">{{trans('main.contactUs')}}</a>
                    </li>

                    <div class="dropdown">
                        <a class="btn btn-light-outline dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-language" aria-hidden="true"></i>
                            {{trans('main.language')}}
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                            @endforeach
                        </div>
                    </div>

                </ul>
            </div>
        </nav>
        <div class="clearfix"></div>
        <div class="textInPhoto text-center">
            <h2> {{trans('main.logo')}}</h2>
            <h4 class="wow zoomIn" data-wow-duration="6s">{{trans('main.choice')}}</h4>
        </div>
        <div class="searchForm">
            <!-- Search form -->
            <form class="form-inline " action="">
                <input class="form-control formInput" type="text" placeholder="{{trans('main.search')}}" aria-label="Search">
                <i class="fa fa-search"></i>
                <input class="searchSubmit activeLink" type="submit" value="{{trans('main.search')}}">
            </form>

        </div>
        <!-- start apply now-->
        <div class="coverApply">
            <div class="container">
                <div class="row ">
                    <div class="col-md-8 offset-md-2">
                        <div class="applyNow text-center">
                            <h2>{{trans('main.admission')}}</h2>
                            <p>{{trans('main.welcomeToStudy')}}<br>{{trans('main.appling')}}<span>Maghreb Dirassa</span>.</p>
                            <div><i class="far fa-hand-point-down fa-4x wow slideInDown" data-wow-duration="3s" data-wow-offset="200"></i></div>
                            <a href="{{url('/')}}/{{LaravelLocalization::getCurrentLocale()}}/contact-us#contactUs" role="button">{{trans('main.ApplyNow')}}</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
