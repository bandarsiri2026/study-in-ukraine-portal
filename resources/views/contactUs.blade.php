@extends('welcome')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 contactUsPage text-center">
                <h2>{{trans('main.contactUs')}}</h2>
            </div>
            <div class="col-md-10 offset-md-1 text-center contactUsPage">
                <h6>{{trans('main.contactUsques')}}</h6>
                <i class="fab fa-viber fa-2x" style="color: #59267c"></i> <i class="fab fa-whatsapp fa-2x" style="color: #25d366"></i>
                <img src="{{url('images/imo.png')}}" style="margin-bottom: 15px;width: 32px;" alt="">
                <p>[phone hidden]4 <br>[phone hidden]6</p>
                <p><img src="{{url('images/gmail.png')}}" alt=""> {{trans('main.email')}}: maghrebdirassa@gmail.com</p>
                <h5><strong>{{trans('main.bureauMaroc')}}</strong></h5>
                <img src="{{url('images/maroc.png')}}" alt="">
                <p><i class="fas fa-phone fa-2x" style="color: #25d366;"></i>
                    Tel : [phone hidden]2 <br>
                    Viber,Imo,WhatsApp : <br><i class="fab fa-viber fa-2x" style="color: #59267c"></i> <i class="fab fa-whatsapp fa-2x" style="color: #25d366"></i>                <img src="{{url('images/imo.png')}}" style="margin-bottom: 15px;width: 32px;" alt="">
                    <br> [phone hidden]3 <br>
                    Agence khidmanet 78 rue casablanca 1 er etage oujda maroc
                    chez Rachid Mohammed <br>
                    <i class="fas fa-phone fa-2x" style="color: #25d366;"></i>
                    Tel : [phone hidden]1 <br>
                    <i class="fab fa-whatsapp fa-2x" style="color: #25d366"></i>
                    WhatsApp : [phone hidden]8 <br>
                    chez Mohamad casa , mohammedia <br>
                    <i class="fas fa-phone fa-2x" style="color: #25d366;"></i>
                    Tel : [phone hidden]8

                </p>

            </div>


        </div>
    </div>
    <div class="coverContactus">
        <div class="container">
            <div class="row">
                <div id="contactUs" class="col-md-12">
                    <h2 class="text-center">{{trans('main.ApplyNow')}}</h2>
                    <i class="far fa-envelope fa-4x iContactUs"></i>
                    <form class="form-inline" role="form" method="post">
                        {{csrf_field()}}
                        <div class="col-md-6 wow bounceInLeft" data-wow-duration="3s" data-wow-offset="250">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control input-lg" placeholder="{{trans('main.name')}}"">
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control input-lg" placeholder="{{trans('main.email')}}"">
                            </div>
                            <div class="form-group">
                                <input type="text" name="telephone" class="form-control input-lg" placeholder="{{trans('main.phone')}}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="course" class="form-control input-lg" placeholder="{{trans('main.course')}}">
                            </div>
                        </div>
                        <div class="col-md-6 divTextarea wow bounceInRight" data-wow-duration="3s" data-wow-offset="250">
                            <div class="form-group">
                                <textarea class="form-control input-lg texareaPage" name="msg" placeholder={{trans('main.message')}}></textarea>
                            </div>
                            <button  class="btn btn-lg btn-block">{{trans('main.send')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
