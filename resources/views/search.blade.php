@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="DJoz Template">
    <meta name="keywords" content="DJoz, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>K-Tran | Music</title>

    <!-- Google Font -->
    <link href="{{asset('https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- The form -->
   
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/nowfont.css" type="text/css">
    <link rel="stylesheet" href="css/rockville.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/search.css" type="text/css">
</head>

<body>
    @if (isset($successMsg))
    <span class="aler alert-danger">
        <strong>{{$successMsg}}</strong>
    </span>
    @endif
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="header__logo">
                      <a href="home"><img src="img/zlogo.jpg"style="width:82px;height:50px;" alt=""></a>
                    </div>
                </div>
                <form class="example" method="post" action="{{route('search')}}">
                    @csrf
                    <input type="text" placeholder="Search.." name="key">
                    <button type="submit"><i class="fa fa-search"></i></button>
                  </form>
                  <!-- Css Styles -->
                <div class="col-lg-10 col-md-10">
                    <div class="header__nav">
                        @csrf
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="{{url('/')}}">Home</a></li>
                                <li><a href="about">About</a></li>
                                <li><a href="./discography.html">Discography</a></li>
                                <li><a href="{{url('video-management')}}">Account</a></li>
                                <li><a href="{{url('/logout')}}">Logout</a></li>
                                
                            </ul>
                        </nav>
                        <div class="header__right__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-instagram"></i></a>
                            <a href="{{url('/logout')}}"><i class="fa fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <section class="event spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Find {{count($listVideo)}} music</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="event__slider owl-carousel">
                    @foreach  ($listVideo as $video )
                    <div class="col-lg-4">
                        <div class="event__item">
                            <div class="event__item__pic set-bg"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/{{ $video->video_url }}"  framborder="0" allow="accelerometer"; autoplay; encrypted-media; gyroscope; picture-in-picture; allowfullscreen ></iframe>
                                <div class="tag-date">
                                    <span>{{$video->created_at}}</span>
                                </div>
                            </div>
                            <div class="event__item__text">
                                <h4>{{$video->name}}</h4>
                                <p><i class="fa fa-map-marker"></i> {{$video->description}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection