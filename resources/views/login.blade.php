<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>dippinno &mdash; Fast, Reliable and Secure HR Software for Small Business</title>
    <meta name="description" content="Free Bootstrap 4 Template by uicookies.com">
    <meta name="keywords" content="Free website templates, Free bootstrap themes, Free template, Free bootstrap, Free website template">

    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600|Montserrat:200,300,400" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/law-icons/font/flaticon.css')}}">

    <link rel="stylesheet" href="{{asset('fonts/fontawesome/css/font-awesome.min.css')}}">


    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick-theme.css')}}">

    <link rel="stylesheet" href="{{asset('css/helpers.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/landing-2.css')}}">
    <style>
        .fieldWrap {
            position: relative;
        }
        .dotCom {
            font-size: 20px;
            color: #acacac;
            width: 41%;
            padding-left: 5px;
            margin: 0;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            display: inline-block;
        }
    </style>
</head>
<body data-spy="scroll" data-target="#pb-navbar" data-offset="200">
@extends('layouts.header')
<!-- END nav -->




<section class=" overflow-hidden cover-bg-indigo cover-bg-opacity text-left pb_gradient_v1" id="section-home" >
    <div class="container">
        <div class="row align-items-center justify-content-center" style="margin: 150px 0px;">

            <div class="col-md-6 relative align-self-center" >
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}" class="bg-white rounded pb_form_v1">
                        @csrf
                        <div id="loginFormCompany">
                            <h2 class="mb-4 mt-0 text-center">Login</h2>
                            <div class="form-group fieldWrap text-center">
                                <input type="text" class="pb_height-50 reverse form-control" placeholder="Company URL" value="{{ old('company') }}" required autofocus id="company" name="company">
                                <span class="dotCom">.dippinno.com</span>
                            </div>
                            <div id="loadingLogin" class="text-center">
                                <img src="{{asset('imgs/index/loading.svg')}}" width="100">
                            </div>
                            @if($errors->any())
                                <p class="text-danger text-center">{{$errors->first()}}</p>
                            @endif
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                            <p id="errorMesLogin" class="text-danger text-center">That doesn't look like a valid Dippinno domain.</p>
                            <div id="loginBtnZone" class="form-group text-center">
                                <input id="btnLogin" class="btn btn-primary btn-lg pb_btn-pill  btn-shadow-blue" value="Login">
                            </div>
                        </div>
                        <div id="loginFormCompanyStepTwo">
                            <p class="text-center" id="logoCompany"></p>
                            <hr>
                            <input id="companyValue" type="hidden" class="form-control" name="company" value="{{ old('company') }}" required autofocus>
                            <div class="form-group">
                                <input id="email" type="email" class="form-control pb_height-50 reverse" placeholder="E-Mail Address"  name="email" value="{{ old('email') }}" required autofocus>
                            </div>
                            <div class="form-group">
                                <input id="password" type="password" class="form-control pb_height-50 reverse" placeholder="Password"  name="password" required>
                            </div>

                            <div class="form-group text-right">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> <small>Remember Me</small>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg pb_btn-pill  btn-shadow-blue">
                                    {{ __('Login') }}
                                </button>
                            </div>


                        </div>
                    </form>


            </div>
        </div>
    </div>
</section>
<!-- END section -->
@extends('layouts.footer')
<!-- loader -->
<div id="pb_loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#1d82ff"/></svg></div>



<script src="{{asset('js/jquery.min.js')}}"></script>

<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/slick.min.js')}}"></script>
<script src="{{asset('js/jquery.mb.YTPlayer.min.js')}}"></script>

<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>

<script src="{{asset('js/main.js')}}"></script>
<script>
    window.onload = function (e) {
        $("#loadingLogin").hide();
        $("#loginMemberZone").hide();
        $("#errorMesLogin").hide();
        $("#loginFormCompanyStepTwo").hide();
        $("#btnLogin").click(function(e) {
            $.ajax({
                type: "POST",
                url: "/api/api/apiCheckCompanyExist.is",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    name: $("#company").val()
                },
                crossDomain: true,
                beforeSend: function(){
                    $("#loadingLogin").show();
                    $("#loginBtnZone").hide();
                    $("#errorMesLogin").hide();
                },
                success: function(result) {
                    var result = JSON.parse(JSON.parse(JSON.stringify(result)));
                    if (result.success == true){
                        $("#loginMemberZone").show();
                        $("#loadingLogin").hide();
                        $("#loginFormCompany").hide();
                        $("#errorMesLogin").show();
                        $("#logoCompany").html("<img src='"+result.logo+"' width='250'>");
                        $("#loginFormCompanyStepTwo").show();
                        $("#companyValue").val($("#company").val().toLowerCase());
                    }else{
                        $("#loadingLogin").hide();
                        $("#loginBtnZone").show();
                        $("#errorMesLogin").show();
                    }
                },
                error: function(error) {
                    console.log("error");
                },
            });
        });
    };
</script>
</body>
</html>