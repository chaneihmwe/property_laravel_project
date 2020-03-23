@extends('frontend/frontend_template')
@section('banner')
    <div class="banner" id="banner">
        <div id="bannerCarousole" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('frontend_template/img/banner.jpg')}}" alt="banner" style="height: 400px;">
                    <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                        <div class="sub-banner">
						    <div class="container">
						        <div class="page-name">
						            <h1>Agent Grid</h1>
						            <ul>
						                <li><a href="index.html">Index</a></li>
						                <li><span>/</span>Agent Grid</li>
						            </ul>
						        </div>
						    </div>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection