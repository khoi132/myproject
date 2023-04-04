@extends('layoutlogin')
@section('content')
<div class="breadcrumb">
    <div class="container">
        <a class ="breadcrumb-item" href="{{url('/')}}">Home</a>
        <span class="breadcrumb-item active"> View Video</span>
    </div>
</div>
<section class="product-sec">
    <div class="container">
        <h1>{{ $video->name}}</h1>
        <div class="row"
        <div class="col-md-6>
            <iframe width="100%" heigh="138%" src="https://www.youtube.com/embed/{{ $video->video_url }}"  framborder="0" allow="accelerometer"; autoplay; encrypted-media; gyroscope; picture-in-picture; allowfullscreen ></iframe> 
        </div>
                
        

        <div class="col-md-6 slider-content">
            <span> Description </span>
            <p> {{ $video->description}}</p>
            <ul>
                <li>
                    <span class="name">Category</span><span class="cln"> : </span>
                    <span class="price">{{ $video->category}}</span>
                </li>
                <li>
                    <span class="name">Views</span><span class="cln"> : </span>
                </li>
                
            </ul>
        </div>
    </div>
</section>
@endsection


            