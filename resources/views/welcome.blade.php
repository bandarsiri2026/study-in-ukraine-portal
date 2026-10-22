<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Maghreb-Dirassa</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Gravitas+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amiri" rel="stylesheet">
    <link href="{{url('css/all.min.css')}}" rel="stylesheet"  type="text/css">
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet"  type="text/css">
    <link href="{{url('css/lightbox.min.css')}}" rel="stylesheet"  type="text/css">
    <link href="{{url('/')}}/css/main_{{LaravelLocalization::getCurrentLocale()}}.css" rel="stylesheet" type="text/css">
    <link href="{{url('css/animate.css')}}" rel="stylesheet">



</head>
<body>
@include('header')
@yield('content')
@include('footer')
<script src="{{url('js/jquery.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>
<script src="{{url('js/lightbox.min.js')}}"></script>
<script src="{{url('js/main.js')}}"></script>
<script src="{{url('js/wow.min.js')}}"></script>
<script>new WOW().init();</script>



</body>
</html>
