@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <title>K-Tran | Music</title>
        <link rel="stylesheet" href="{{asset('css/upload.css')}}">
        
    </head>
    <body>
<div class="breadcrumb">
    <div class="container">
        <a class ="breadcrumb-item" href="{{url('/')}}">Home</a>
        <span class="breadcrumb-item active"> Welcome {{ Auth::user()-> email}}</span>
        <span class="breadcrumb-item active"> Upload Video</span>
    </div>
</div>
<section class="static-about-sec">
    <div class="container">
        <h1> Upload Video</h1>
        <div class="form">
            <form class="form" action="{{route('video.store')}}" method="POST">
                @csrf
                <div class="row">
                    <div class= "col-md-6">
                        <input type="hidden" name="id" value="">
                        <labeL for="name"> Name of Video:</labeL>
                        <input type="text" name="name" value="" placeholder="Fantasy World" required><br>  
                        <label for ="video_url"> Video URL</label>
                        <input type="text" name="video_url" value=""placeholder="FMW5vLCdPks"><br>
                        <label type="description"> Description</label>
                        <input type="text" name="description" value="" placeholder="abc"><br>
                        <label for ="category"> Category</label>
                        <select name="category" class="form-control">
                            <option value="MUSIC"> Music</option>
                            <option value="FILM"> OST </option>
                            <option value="NATURE"> EDM </option>
                            <option value="OTHERS"> Ballad </option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-8-com-md-12">
                    <button type="submit" class="btn black">Upload video</button>
                </div>
            </form>
        </div>
    </div>
    
    <div class="col-lg-5 p-0">
        <div class="track__pic">
            <img src="img/about/about.png" alt="">
        </div>
    </div>
</section>
    </body>
@endsection


        
