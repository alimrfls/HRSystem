@extends('layout.app')
@section('content')
    <style>
        .landing{
            position: absolute;
            color: white;
            top:35%;
            left:32%;
            z-index: 100;
        }
    </style>
    <div class="landing">
        {{--<img src="/assets/img/tfinder.png" alt="">--}}
        <img src="/assets/img/tfinder-lg.png" width="60px" alt="">
        <h1 style="font-size: 68pt">Talent <span style="color: lime">Finder</span></h1>
    </div>

    <div id="particles-js">

    </div>
    <script type="text/javascript" src="/assets/vendors/particlejs/particles.js"></script>
    <script type="text/javascript" src="/assets/vendors/particlejs/app.js"></script>
@endsection