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

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/nowfont.css" type="text/css">
    <link rel="stylesheet" href="css/rockville.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/listvideo.css" type="text/css">
    {{-- <link rel="stylesheet" href="css/search.css" type="text/css"> --}}
</head>

<body>
    @if (isset($successMsg))
    <span class="aler alert-danger">
        <strong>{{$successMsg}}</strong>
    </span>
    @endif
    <div id="preloder">
        <div class="loader"></div>
    </div>
<div class="breadcrumb">
    <div class="container">
        <form class="example"  action="{{route('search')}}" method="POST"  enctype="multipart/form-data">
            @csrf
            <input type="text" placeholder="Search.." name="keyWord" id="keyword">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        <a class="breadcrumb-item" href="{{url('/')}}">Home</a>
        <span class="breadcrumb-item active">welcome {{ Auth::user()-> email}}</span>
        <span class="breadcrumb-item active"> List off Videos Available</span>
        <a href="{{route ('video.add')}}"><button> Add Video</button></a>
    </div>
</div>
<div class= "listvideo">
    <table class ="col-md-12">
        <tr>
            <th> Name </th>
            <th> Category </th>
            <th> Description</th>
            <th> Publish Date </th>
            <th> Video URL </th>
            <th> Actions </th>
        </tr>
        @foreach ($videos as $video )
            <tr>
                <td>{{ $video->name}}</td>
                <td>{{ $video->category}}</td>
                <td>{{ $video->description}}</td>
                <td>{{ $video->create_at }}</td>
                <td><iframe with="200" heigh="150" src="https://www.youtube.com/embed/{{ $video->video_url }}" framborder="0" allow="accelerometer"; autoplay; encrypted-media; gyroscope; picture-in-picture; allowfullscreen ></iframe> 
                </td>
                <td>
                    <a href="{{route('video.update',$video->id)}}"><button class="btn-succes" type="botton">UPDATE</button></a>
                    <a href="{{route('video.delete',$video->id)}}"><button class="btn-delete" type="botton">DELETE </button></a>
                </td>
            </tr>
        @endforeach
        
    </table>
</div>
</body>
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

 <!-- Music Plugin -->
 <script src="{{asset('js/jquery.jplayer.min.js')}}"></script>
 <script src="{{asset('js/jplayerInit.js')}}"></script>

@endsection

        