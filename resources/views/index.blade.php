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
   
    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="header__logo">
                      <a href="{{url('/')}}"><img src="img/zlogo.jpg"style="width:82px;height:50px;" alt=""></a>
                    </div>
                </div>

                  <!-- Css Styles -->
          
                <div class="col-lg-10 col-md-10">
                    <div class="header__nav">
                        <form class="example"  action="{{route('search')}}" method="POST"  enctype="multipart/form-data">
                            @csrf
                            <input type="text" placeholder="Search.." name="keyWord" id="keyword">
                            <button type="submit"><i class="fa fa-search"></i></button>
                          </form>
                        <nav class="header__menu mobile-menu">
                            <ul>
                                {{-- <li class="active"><a href="{{url('/')}}">Home</a></li>
                                <li><a href="about">About</a></li> --}}
                                {{-- <li><a href="{{url('video-management')}}">Account</a></li> --}}
                                <li>
                                    
                                    @if(Auth::check() && Auth::user()->role === 1) 
                                    <li class="active"><a href="{{url('/')}}">Home</a></li>
                                <li><a href="about">About</a></li>
                                        <li><a href="{{url('video-management')}}">Account</a></li>
                                        @else
                                        <li class="active"><a href="{{url('/')}}">Home</a></li>
                                <li><a href="about">About</a></li>
                                @endif 
                                </li>
                                <li>
                                    @if(Auth::check())
                                     <li> <a href=""> {{Auth::user() -> email}}  </a></li>
                                    <li><a href="{{url('/logout')}}">Logout</a></li>
                                    @else
                                    <li><a href="{{route('login')}}">Login</a></li>
                                    <li><a href="{{route('showregister')}}" >Register here</a>
                                    </li>
                                @endif
                                </li>  
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
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero spad set-bg" data-setbg="img/mono.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__text">
                        <span>New single</span>
                        <h1>Feel the heart beats</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br />tempor
                            incididunt ut labore et dolore magna aliqua.</p>
                        <a href="https://www.youtube.com/watch?v=okz5RIZRT0U" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="linear__icon">
            <i class="fa fa-angle-double-down"></i>
        </div>
    </section>
    <!-- Hero Section End -->
    
    <!-- Event Section Begin -->
    <section class="event spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Upcoming Musics</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="event__slider owl-carousel">
                    @foreach  ($videos as $video )
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
                    
                    {{-- <div class="col-lg-4">
                        <div class="event__item">
                            <div class="event__item__pic set-bg" data-setbg="img/events/event-2.jpg">
                                <div class="tag-date">
                                    <span>Dec 15, 2019</span>
                                </div>
                            </div>
                            <div class="event__item__text">
                                <h4>David Guetta Miami Ultra</h4>
                                <p><i class="fa fa-map-marker"></i> Funkhaus Berlin, Berlin, Germany</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="event__item">
                            <div class="event__item__pic set-bg" data-setbg="img/events/event-3.jpg">
                                <div class="tag-date">
                                    <span>Dec 15, 2019</span>
                                </div>
                            </div>
                            <div class="event__item__text">
                                <h4>David Guetta Miami Ultra</h4>
                                <p><i class="fa fa-map-marker"></i> Funkhaus Berlin, Berlin, Germany</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="event__item">
                            <div class="event__item__pic set-bg" data-setbg="img/events/event-2.jpg">
                                <div class="tag-date">
                                    <span>Dec 15, 2019</span>
                                </div>
                            </div>
                            <div class="event__item__text">
                                <h4>David Guetta Miami Ultra</h4>
                                <p><i class="fa fa-map-marker"></i> Funkhaus Berlin, Berlin, Germany</p>
                            </div> --}}
                        {{-- </div>
                    </div> --}}
                </div>
                </div>
            </div>
    </section>



    <!-- Event Section End -->
<section class="youtube spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Youtube feed</h2>
                        <h1>Latest videos</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                    @foreach ($videos as $video )
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="youtube__item">
                            <h5><iframe width="320px" heigh="450px" src="https://www.youtube.com/embed/{{ $video->video_url }}"  framborder="0" allow="accelerometer"; autoplay; encrypted-media; gyroscope; picture-in-picture; allowfullscreen ></iframe> 
                            </h5>
                            <h4>{{$video ->name}}</h4>
                        </div>
                    </div>
                    @endforeach
            </div>
           
        </div>
       
    </section>
    <!-- About Section Begin -->
    {{-- <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about__pic">
                        <img src="img/about/about.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__text">
                        <div class="section-title">
                            <h2>DJ Alexandra Rud</h2>
                            <h1>About me</h1>
                        </div>
                        <p>DJ Rainflow knows how to move your mind, body and soul by delivering tracks that stand out
                            from the norm. As if this impressive succession of high impact, floor-filling bombs wasn’t
                            enough to sustain.</p>
                        <a href="#" class="primary-btn">CONTACT ME</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- About Section End -->

    {{-- <!-- Services Section Begin -->
    <section class="services">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="services__left set-bg" data-setbg="img/services/service-left.jpg">
                        <a href="https://www.youtube.com/watch?v=JGwWNGJdvx8" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="row services__list">
                        <div class="col-lg-6 p-0 order-lg-1 col-md-6 order-md-1">
                            <div class="service__item deep-bg">
                                <img src="img/services/service-1.png" alt="">
                                <h4>Wedding</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 p-0 order-lg-2 col-md-6 order-md-2">
                            <div class="service__item">
                                <img src="img/services/service-2.png" alt="">
                                <h4>Clubs and bar</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 p-0 order-lg-4 col-md-6 order-md-4">
                            <div class="service__item deep-bg">
                                <img src="img/services/service-4.png" alt="">
                                <h4>DJ lessons</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 p-0 order-lg-3 col-md-6 order-md-3">
                            <div class="service__item">
                                <img src="img/services/service-3.png" alt="">
                                <h4>Corporate events</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End --> --}}

    <!-- Track Section Begin -->
    <section class="track spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="section-title">
                        <h2>Latest tracks</h2>
                        <h1>Music podcast</h1>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="track__all">
                        <a href="#" class="primary-btn border-btn">View all tracks</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 p-0">
                    <div class="track__content nice-scroll">
                        <div class="single_player_container">
                            <h4>David Guetta Miami Ultra</h4>
                            <div class="jp-jplayer jplayer" data-ancestor=".jp_container_1"
                                data-url="music-files/1.mp3"></div>
                            <div class="jp-audio jp_container_1" role="application" aria-label="media player">
                                <div class="jp-gui jp-interface">
                                    <!-- Player Controls -->
                                    <div class="player_controls_box">
                                        <button class="jp-play player_button" tabindex="0"></button>
                                    </div>
                                    <!-- Progress Bar -->
                                    <div class="player_bars">
                                        <div class="jp-progress">
                                            <div class="jp-seek-bar">
                                                <div>
                                                    <div class="jp-play-bar">
                                                        <div class="jp-current-time" role="timer" aria-label="time">0:00
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
                                    </div>
                                    <!-- Volume Controls -->
                                    <div class="jp-volume-controls">
                                        <button class="jp-mute" tabindex="0"><i
                                                class="fa fa-volume-down"></i></button>
                                        <div class="jp-volume-bar">
                                            <div class="jp-volume-bar-value" style="width: 0%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_player_container">
                            <h4>David Guetta Miami Ultra</h4>
                            <div class="jp-jplayer jplayer" data-ancestor=".jp_container_2"
                                data-url="music-files/2.mp3"></div>
                            <div class="jp-audio jp_container_2" role="application" aria-label="media player">
                                <div class="jp-gui jp-interface">
                                    <!-- Player Controls -->
                                    <div class="player_controls_box">
                                        <button class="jp-play player_button" tabindex="0"></button>
                                    </div>
                                    <!-- Progress Bar -->
                                    <div class="player_bars">
                                        <div class="jp-progress">
                                            <div class="jp-seek-bar">
                                                <div>
                                                    <div class="jp-play-bar">
                                                        <div class="jp-current-time" role="timer" aria-label="time">0:00
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
                                    </div>
                                    <!-- Volume Controls -->
                                    <div class="jp-volume-controls">
                                        <button class="jp-mute" tabindex="0"><i
                                                class="fa fa-volume-down"></i></button>
                                        <div class="jp-volume-bar">
                                            <div class="jp-volume-bar-value" style="width: 0%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_player_container">
                            <h4>David Guetta Miami Ultra</h4>
                            <div class="jp-jplayer jplayer" data-ancestor=".jp_container_3"
                                data-url="music-files/3.mp3"></div>
                            <div class="jp-audio jp_container_3" role="application" aria-label="media player">
                                <div class="jp-gui jp-interface">
                                    <!-- Player Controls -->
                                    <div class="player_controls_box">
                                        <button class="jp-play player_button" tabindex="0"></button>
                                    </div>
                                    <!-- Progress Bar -->
                                    <div class="player_bars">
                                        <div class="jp-progress">
                                            <div class="jp-seek-bar">
                                                <div>
                                                    <div class="jp-play-bar">
                                                        <div class="jp-current-time" role="timer" aria-label="time">0:00
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
                                    </div>
                                    <!-- Volume Controls -->
                                    <div class="jp-volume-controls">
                                        <button class="jp-mute" tabindex="0"><i
                                                class="fa fa-volume-down"></i></button>
                                        <div class="jp-volume-bar">
                                            <div class="jp-volume-bar-value" style="width: 0%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_player_container">
                            <h4>David Guetta Miami Ultra</h4>
                            <div class="jp-jplayer jplayer" data-ancestor=".jp_container_4"
                                data-url="music-files/4.mp3"></div>
                            <div class="jp-audio jp_container_4" role="application" aria-label="media player">
                                <div class="jp-gui jp-interface">
                                    <!-- Player Controls -->
                                    <div class="player_controls_box">
                                        <button class="jp-play player_button" tabindex="0"></button>
                                    </div>
                                    <!-- Progress Bar -->
                                    <div class="player_bars">
                                        <div class="jp-progress">
                                            <div class="jp-seek-bar">
                                                <div>
                                                    <div class="jp-play-bar">
                                                        <div class="jp-current-time" role="timer" aria-label="time">0:00
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
                                    </div>
                                    <!-- Volume Controls -->
                                    <div class="jp-volume-controls">
                                        <button class="jp-mute" tabindex="0"><i
                                                class="fa fa-volume-down"></i></button>
                                        <div class="jp-volume-bar">
                                            <div class="jp-volume-bar-value" style="width: 0%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_player_container">
                            <h4>David Guetta Miami Ultra</h4>
                            <div class="jp-jplayer jplayer" data-ancestor=".jp_container_5"
                                data-url="music-files/5.mp3"></div>
                            <div class="jp-audio jp_container_5" role="application" aria-label="media player">
                                <div class="jp-gui jp-interface">
                                    <!-- Player Controls -->
                                    <div class="player_controls_box">
                                        <button class="jp-play player_button" tabindex="0"></button>
                                    </div>
                                    <!-- Progress Bar -->
                                    <div class="player_bars">
                                        <div class="jp-progress">
                                            <div class="jp-seek-bar">
                                                <div>
                                                    <div class="jp-play-bar">
                                                        <div class="jp-current-time" role="timer" aria-label="time">0:00
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
                                    </div>
                                    <!-- Volume Controls -->
                                    <div class="jp-volume-controls">
                                        <button class="jp-mute" tabindex="0"><i
                                                class="fa fa-volume-down"></i></button>
                                        <div class="jp-volume-bar">
                                            <div class="jp-volume-bar-value" style="width: 0%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_player_container">
                            <h4>David Guetta Miami Ultra</h4>
                            <div class="jp-jplayer jplayer" data-ancestor=".jp_container_6"
                                data-url="music-files/6.mp3"></div>
                            <div class="jp-audio jp_container_6" role="application" aria-label="media player">
                                <div class="jp-gui jp-interface">
                                    <!-- Player Controls -->
                                    <div class="player_controls_box">
                                        <button class="jp-play player_button" tabindex="0"></button>
                                    </div>
                                    <!-- Progress Bar -->
                                    <div class="player_bars">
                                        <div class="jp-progress">
                                            <div class="jp-seek-bar">
                                                <div>
                                                    <div class="jp-play-bar">
                                                        <div class="jp-current-time" role="timer" aria-label="time">0:00
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
                                    </div>
                                    <!-- Volume Controls -->
                                    <div class="jp-volume-controls">
                                        <button class="jp-mute" tabindex="0"><i
                                                class="fa fa-volume-down"></i></button>
                                        <div class="jp-volume-bar">
                                            <div class="jp-volume-bar-value" style="width: 0%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 p-0">
                    <div class="track__pic">
                        <img src="img/track-right.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Track Section End -->

    <!-- Youtube Section Begin -->
    {{-- <section class="youtube spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Youtube feed</h2>
                        <h1>Latest videos</h1>
                    </div>
                </div>
            </div>
            <div class= " container">
                <table class ="col-md-12">
                    <tr>
                        <th> Name </th>
                        <th> Category</th>
                        <th>Description </th>
                        <th> Creat At </th>
                        <th> Video URL </th>
                    </tr>
                    @foreach ($listVideo as $video )
                        <tr>
                            <td>{{ $video->name}}</td>
                            <td>{{ $video->category}}</td>
                            <td>{{ $video->description}}</td>
                            <td>{{ $video->created_at}}</td>
                            <td><iframe with="400" heigh="320" src="https://www.youtube.com/embed/{{ $video->video_url }}"  framborder="0" allow="accelerometer"; autoplay; encrypted-media; gyroscope; picture-in-picture; allowfullscreen ></iframe> 
                            </td>
                        
                        </tr>
                    @endforeach
                </table>
            </div>
            
        </div>
    </section> --}}
    <!-- Youtube Section End -->

    <!-- Countdown Section Begin -->
    <section class="countdown spad set-bg" data-setbg="img/sontungmtp.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="countdown__text">
                        <h1>Tomorrowland 2022</h1>
                        <h4>Music festival start in</h4>
                    </div>
                    <div class="countdown__timer" id="countdown-time">
                        <div class="countdown__item">
                            <span>20</span>
                            <p>days</p>
                        </div>
                        <div class="countdown__item">
                            <span>45</span>
                            <p>hours</p>
                        </div>
                        <div class="countdown__item">
                            <span>18</span>
                            <p>minutes</p>
                        </div>
                        <div class="countdown__item">
                            <span>09</span>
                            <p>seconds</p>
                        </div>
                    </div>
                    <div class="buy__tickets">
                        <a href="#" class="primary-btn">Buy tickets</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Countdown Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad set-bg" data-setbg="img/footer-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer__address">
                        <ul>
                            <li>
                                <i class="fa fa-phone"></i>
                                <p>Phone</p>
                                <h6>0943401216</h6>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <p>Email</p>
                                <h6>khoitvbh00082@fpt.edu.vn</h6>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 col-md-6">
                    <div class="footer__social">
                        <h2>DJoz</h2>
                        <div class="footer__social__links">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6">
                    <div class="footer__newslatter">
                        <h4>Stay With me</h4>
                        <form action="#">
                            <input type="text" placeholder="Email">
                            <button type="submit"><i class="fa fa-send-o"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
 <!-- Js Plugins -->
 <script src="{{url('js/jquery-3.3.1.min.js')}}"></script>
 <script src="{{url('js/bootstrap.min.js')}}"></script>
 <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
 <script src="{{asset('js/jquery.nicescroll.min.js')}}"></script>
 <script src="{{asset('js/jquery.barfiller.js')}}"></script>
 <script src="{{asset('js/jquery.countdown.min.js')}}"></script>
 <script src="{{asset('js/jquery.slicknav.js')}}"></script>
 <script src="{{asset('js/owl.carousel.min.js')}}"></script>
 <script src="{{asset('js/main.js')}}"></script>
 <script src="{{asset('js/search.js')}}"></script>

 <!-- Music Plugin -->
 <script src="{{asset('js/jquery.jplayer.min.js')}}"></script>
 <script src="{{asset('js/jplayerInit.js')}}"></script>
   
</body>
@endsection

