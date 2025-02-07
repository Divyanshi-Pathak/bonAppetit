@extends('layouts.master')

@section('content')
<section id="slider" class="slider">
    <div class="slider_overlay">
        <div class="container">
            <div class="row">
                <div class="main_slider text-center">
                    <div class="col-md-12">
                        <div class="main_slider_content wow zoomIn" data-wow-duration="1s">
                        <h6>Home / Blogs</h6>
                        </div>
                    </div>	
                </div>

            </div>
        </div>
    </div>
</section>

<section id="portfolio" class="portfolio">
    <div class="container">
        <div class="row">
            <div class="portfolio_content text-center  wow fadeIn" data-wow-duration="5s">
                <div class="col-md-12">
                    <div class="head_title text-center">
                        <h4>Recent Blogs</h4>
                    </div>
                </div>
                @foreach($blogs as $item)
                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('images/'.$item['image'])}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item['title'] }}</h5>
                            <p class="card-text">{{ $item['author']}}</p>
                            <a href="#" class="btn btn-primary">Read</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        
    </div>
</section>

@endsection