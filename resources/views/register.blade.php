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
</head>
<body data-spy="scroll" data-target="#pb-navbar" data-offset="200">
@extends('layouts.header')
<!-- END nav -->
<section class="overflow-hidden cover-bg-indigo cover-bg-opacity text-left pb_gradient_v1" id="section-home">
    <div class="container">

        <div class="row align-items-center justify-content-center" style="margin: 150px 0px;">
            <div class="col-md-7  align-self-center">
                <form action="#" class="bg-white rounded pb_form_v1">
                    <h2 class="mb-4 mt-0 text-center">Sign Up for a demo</h2>
                    <div class="form-group">
                        <input type="text" class="form-control pb_height-50 reverse" placeholder="Full name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control pb_height-50 reverse" placeholder="Email">
                    </div>
                    <hr>
                    <div class="form-group">
                        <input type="text" class="form-control pb_height-50 reverse" placeholder="Company Name">
                    </div>
                    <div class="form-group">
                        <input type="phone" class="form-control pb_height-50 reverse" placeholder="Work Phone Number">
                    </div>
                    <div class="form-group">
                        <div class="pb_select-wrap">
                            <select class="form-control pb_height-50 reverse">
                                <option value="" selected disabled="">Number of Employees</option>
                                <option value="10">1 - 10 Employees</option>
                                <option value="20">11 - 20 Employees</option>
                                <option value="30">21 - 30 Employees</option>
                                <option value="50">31 - 50 Employees</option>
                                <option value="50">50 - 100 Employees</option>
                                <option value="500">100 - 500 Employees</option>
                                <option value="1000">More than 500 Employees</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-lg btn-block pb_btn-pill  btn-shadow-blue" value="GET STARTED">
                        <hr>
                        <p class="text-center"><small>By clicking "GET STARTED" I agree with the <br>Privacy Policy and Terms & Conditions</small></p>
                    </div>
                </form>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4">
                <h2 class="heading mb-3">Fast, Reliable and Secure</h2>
                <div class="sub-heading">
                    <p class="mb-4">HR Software for Small Business <a href="http://uicookies.com" target="_blank">uicookies.com</a>. For more templates visit the <a href="http://uicookies.com" target="_blank">site</a>. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END section -->
@extends('layouts.footer')
<!-- loader -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/slick.min.js')}}"></script>
<script src="{{asset('js/jquery.mb.YTPlayer.min.js')}}"></script>
<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>