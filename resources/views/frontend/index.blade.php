@extends('frontend.frontend_template')
@section('banner')
    <div class="banner" id="banner">
        <div id="bannerCarousole" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item banner-max-height active">
                    <img class="d-block w-100" src="{{asset('frontend_template/img/banner.jpg')}}" alt="banner">
                    <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                        <div class="carousel-content container">
                            <div class="text-center">
                                <h3 class="text-uppercase">Find Your Dream House</h3>
                                <p class="none-mb-992-0">
                                    This is real estate website template based on Bootstrap 4 framework.
                                </p>
                                <div class="inline-search-area none-992">
                                    <div class="row">
                                        <div class="col-lg-2 col-sm-4 col-6 search-col">
                                            <select class="selectpicker search-fields" name="property-status">
                                                <option>Property Status</option>
                                                <option>For Sale</option>
                                                <option>For Rent</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-2 col-sm-3 col-6 search-col middle-col-1">
                                            <select class="selectpicker search-fields" name="property-types">
                                                <option>Property Types</option>
                                                <option>Apartments</option>
                                                <option>Houses</option>
                                                <option>Commercial</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-2 col-sm-3 col-8 search-col middle-col-2">
                                            <select class="selectpicker search-fields" name="Location">
                                                <option>Location</option>
                                                <option>United States</option>
                                                <option>United Kingdom</option>
                                                <option>American Samoa</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-2 col-sm-3 col-6 search-col middle-col-1">
                                            <select class="selectpicker search-fields" name="Bedrooms">
                                                <option>Bedrooms</option>
                                                <option>01</option>
                                                <option>02</option>
                                                <option>03</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-2 col-sm-3 col-8 search-col middle-col-2">
                                            <select class="selectpicker search-fields" name="Bathrooms">
                                                <option>Bathrooms</option>
                                                <option>01</option>
                                                <option>02</option>
                                                <option>03</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-2 col-sm-2 col-4 search-col">
                                            <button class="btn button-theme btn-search btn-block">
                                                <i class="fa fa-search"></i><strong>Find</strong>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('featured_properties')
    <div class="featured-properties content-area">
        <div class="container">
            <!-- Main title -->
            <div class="main-title mt2">
                <h1>Featured Properties</h1>
                <div class="list-inline-listing">
                    <ul class="filters filteriz-navigation clearfix">
                        <li class="active btn filtr-button filtr" data-filter="all">All</li>
                        <li data-filter="1" class="btn btn-inline filtr-button filtr">Apartment</li>
                        <li data-filter="2" class="btn btn-inline filtr-button filtr">House</li>
                        <li data-filter="3" class="btn btn-inline filtr-button filtr">Office</li>
                    </ul>
                </div>
            </div>
            <div class="row filter-portfolio">
                <div class="cars">
                    <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="3">
                        <div class="property-box">
                            <div class="property-thumbnail">
                                <a href="properties-details.html" class="property-img">
                                    <div class="listing-badges">
                                        <span class="featured">Featured</span>
                                    </div>
                                    <div class="price-ratings-box">
                                        <p class="price">
                                            $178,000
                                        </p>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                    <div class="listing-time opening">For Sale</div>
                                    <img class="d-block w-100" src="http://placehold.it/350x233" alt="properties">
                                </a>
                            </div>
                            <div class="detail">
                                <h1 class="title">
                                    <a href="properties-details.html">Modern Family Home</a>
                                </h1>
                                <div class="location">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City
                                    </a>
                                </div>
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-square"></i> 4800 sq ft
                                    </li>
                                    <li>
                                        <i class="flaticon-furniture"></i> 3 Beds
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i> 2 Baths
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i> 1 Garage
                                    </li>
                                    <li>
                                        <i class="flaticon-window"></i> 3 Balcony
                                    </li>
                                    <li>
                                        <i class="flaticon-monitor"></i> TV
                                    </li>
                                </ul>
                            </div>
                            <div class="footer clearfix">
                                <div class="pull-left days">
                                    <a><i class="fa fa-user"></i> Jhon Doe</a>
                                </div>
                                <div class="pull-right">
                                    <a><i class="flaticon-time"></i> 5 Days ago</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="3, 2, 1">
                        <div class="property-box">
                            <div class="property-thumbnail">
                                <a href="properties-details.html" class="property-img">
                                    <div class="listing-badges">
                                        <span class="featured">Featured</span>
                                    </div>
                                    <div class="price-ratings-box">
                                        <p class="price">
                                            $178,000
                                        </p>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                    <div class="listing-time opening">For Rent</div>
                                    <img class="d-block w-100" src="http://placehold.it/350x233" alt="properties">
                                </a>
                            </div>
                            <div class="detail">
                                <h1 class="title">
                                    <a href="properties-details.html">Relaxing Apartment</a>
                                </h1>
                                <div class="location">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City
                                    </a>
                                </div>
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-square"></i> 4800 sq ft
                                    </li>
                                    <li>
                                        <i class="flaticon-furniture"></i> 3 Beds
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i> 2 Baths
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i> 1 Garage
                                    </li>
                                    <li>
                                        <i class="flaticon-window"></i> 3 Balcony
                                    </li>
                                    <li>
                                        <i class="flaticon-monitor"></i> TV
                                    </li>
                                </ul>
                            </div>
                            <div class="footer clearfix">
                                <div class="pull-left days">
                                    <a><i class="fa fa-user"></i> Jhon Doe</a>
                                </div>
                                <div class="pull-right">
                                    <a><i class="flaticon-time"></i> 5 Days ago</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="1, 2">
                        <div class="property-box">
                            <div class="property-thumbnail">
                                <a href="properties-details.html" class="property-img">
                                    <div class="listing-badges">
                                        <span class="featured">Featured</span>
                                    </div>
                                    <div class="listing-time opening">For Sale</div>
                                    <div class="price-ratings-box">
                                        <p class="price">
                                            $178,000
                                        </p>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                    <img class="d-block w-100" src="http://placehold.it/350x233" alt="properties">
                                </a>
                            </div>
                            <div class="detail">
                                <h1 class="title">
                                    <a href="properties-details.html">Park Avenue</a>
                                </h1>
                                <div class="location">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City
                                    </a>
                                </div>
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-square"></i> 4800 sq ft
                                    </li>
                                    <li>
                                        <i class="flaticon-furniture"></i> 3 Beds
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i> 2 Baths
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i> 1 Garage
                                    </li>
                                    <li>
                                        <i class="flaticon-window"></i> 3 Balcony
                                    </li>
                                    <li>
                                        <i class="flaticon-monitor"></i> TV
                                    </li>
                                </ul>
                            </div>
                            <div class="footer clearfix">
                                <div class="pull-left days">
                                    <a><i class="fa fa-user"></i> Jhon Doe</a>
                                </div>
                                <div class="pull-right">
                                    <a><i class="flaticon-time"></i> 5 Days ago</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="3, 2">
                        <div class="property-box">
                            <div class="property-thumbnail">
                                <a href="properties-details.html" class="property-img">
                                    <div class="listing-badges">
                                        <span class="featured">Featured</span>
                                    </div>
                                    <div class="listing-time opening">For Rent</div>
                                    <div class="price-ratings-box">
                                        <p class="price">
                                            $178,000
                                        </p>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                    <img class="d-block w-100" src="http://placehold.it/350x233" alt="properties">
                                </a>
                            </div>
                            <div class="detail">
                                <h1 class="title">
                                    <a href="properties-details.html">Masons Villas</a>
                                </h1>
                                <div class="location">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City
                                    </a>
                                </div>
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-square"></i> 4800 sq ft
                                    </li>
                                    <li>
                                        <i class="flaticon-furniture"></i> 3 Beds
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i> 2 Baths
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i> 1 Garage
                                    </li>
                                    <li>
                                        <i class="flaticon-window"></i> 3 Balcony
                                    </li>
                                    <li>
                                        <i class="flaticon-monitor"></i> TV
                                    </li>
                                </ul>
                            </div>
                            <div class="footer clearfix">
                                <div class="pull-left days">
                                    <a><i class="fa fa-user"></i> Jhon Doe</a>
                                </div>
                                <div class="pull-right">
                                    <a><i class="flaticon-time"></i> 5 Days ago</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="2, 1">
                        <div class="property-box">
                            <div class="property-thumbnail">
                                <a href="properties-details.html" class="property-img">
                                    <div class="listing-badges">
                                        <span class="featured">Featured</span>
                                    </div>
                                    <div class="price-ratings-box">
                                        <p class="price">
                                            $178,000
                                        </p>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                    <img class="d-block w-100" src="http://placehold.it/350x233" alt="properties">
                                </a>
                            </div>
                            <div class="detail">
                                <h1 class="title">
                                    <a href="properties-details.html">Big Head House</a>
                                </h1>
                                <div class="location">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City
                                    </a>
                                </div>
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-square"></i> 4800 sq ft
                                    </li>
                                    <li>
                                        <i class="flaticon-furniture"></i> 3 Beds
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i> 2 Baths
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i> 1 Garage
                                    </li>
                                    <li>
                                        <i class="flaticon-window"></i> 3 Balcony
                                    </li>
                                    <li>
                                        <i class="flaticon-monitor"></i> TV
                                    </li>
                                </ul>
                            </div>
                            <div class="footer clearfix">
                                <div class="pull-left days">
                                    <a><i class="fa fa-user"></i> Jhon Doe</a>
                                </div>
                                <div class="pull-right">
                                    <a><i class="flaticon-time"></i> 5 Days ago</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="3, 1">
                        <div class="property-box">
                            <div class="property-thumbnail">
                                <a href="properties-details.html" class="property-img">
                                    <div class="listing-badges">
                                        <span class="featured">Featured</span>
                                    </div>
                                    <div class="listing-time opening">For Rent</div>
                                    <div class="price-ratings-box">
                                        <p class="price">
                                            $178,000
                                        </p>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                    <img class="d-block w-100" src="http://placehold.it/350x233" alt="properties">
                                </a>
                            </div>
                            <div class="detail">
                                <h1 class="title">
                                    <a href="properties-details.html">Park Avenue</a>
                                </h1>
                                <div class="location">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City
                                    </a>
                                </div>
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-square"></i> 4800 sq ft
                                    </li>
                                    <li>
                                        <i class="flaticon-furniture"></i> 3 Beds
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i> 2 Baths
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i> 1 Garage
                                    </li>
                                    <li>
                                        <i class="flaticon-window"></i> 3 Balcony
                                    </li>
                                    <li>
                                        <i class="flaticon-monitor"></i> TV
                                    </li>
                                </ul>
                            </div>
                            <div class="footer clearfix">
                                <div class="pull-left days">
                                    <a><i class="fa fa-user"></i> Jhon Doe</a>
                                </div>
                                <div class="pull-right">
                                    <a><i class="flaticon-time"></i> 5 Days ago</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('services')
    <div class="services-3 content-area-5 bg-grea-3">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <h1>What are you looking for?</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="service-info-2">
                        <div class="s-info">
                            <i class="flaticon-apartment"></i>
                            <span>Apartments</span>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="service-info-2">
                        <div class="s-info">
                            <i class="flaticon-internet"></i>
                            <span>Houses</span>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="service-info-2">
                        <div class="s-info">
                            <i class="flaticon-vehicle"></i>
                            <span>Garages</span>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="service-info-2">
                        <div class="s-info">
                            <i class="flaticon-coins"></i>
                            <span>Commercial</span>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
                    </div>
                </div>
            </div>
            <div class="text-center read-more-2">
                <a href="services-1.html" class="btn-white">Read More</a>
            </div>
        </div>
    </div>
@endsection

@section('recent_properties')
    <div class="recently-properties content-area-12">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <h1>Recently Properties</h1>
            </div>
            <div class="slick-slider-area">
                <div class="row slick-carousel" data-slick='{"slidesToShow": 4, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                    <div class="slick-slide-item">
                        <div class="property-box-5">
                            <div class="property-photo">
                                <img class="img-fluid" src="http://placehold.it/255x170" alt="properties">
                                <div class="date-box">For Sale</div>
                            </div>
                            <div class="detail">
                                <div class="heading">
                                    <h3>
                                        <a href="properties-details.html">Masons Villas</a>
                                    </h3>
                                    <div class="location">
                                        <a href="properties-details.html">
                                            <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City
                                        </a>
                                    </div>
                                </div>
                                <div class="properties-listing">
                                    <span>3 Beds</span>
                                    <span>2 Baths</span>
                                    <span>980 sqft</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide-item">
                        <div class="property-box-5">
                            <div class="property-photo">
                                <img class="img-fluid" src="http://placehold.it/255x170" alt="properties">
                                <div class="date-box">For Sale</div>
                            </div>
                            <div class="detail">
                                <div class="heading">
                                    <h3>
                                        <a href="properties-details.html">Luxury Villa</a>
                                    </h3>
                                    <div class="location">
                                        <a href="properties-details.html">
                                            <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City
                                        </a>
                                    </div>
                                </div>
                                <div class="properties-listing">
                                    <span>3 Beds</span>
                                    <span>2 Baths</span>
                                    <span>980 sqft</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide-item">
                        <div class="property-box-5">
                            <div class="property-photo">
                                <img class="img-fluid" src="http://placehold.it/255x170" alt="properties">
                                <div class="date-box">For Rent</div>
                            </div>
                            <div class="detail">
                                <div class="heading">
                                    <h3>
                                        <a href="properties-details.html">Park avenue</a>
                                    </h3>
                                    <div class="location">
                                        <a href="properties-details.html">
                                            <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City
                                        </a>
                                    </div>
                                </div>
                                <div class="properties-listing">
                                    <span>3 Beds</span>
                                    <span>2 Baths</span>
                                    <span>980 sqft</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide-item">
                        <div class="property-box-5">
                            <div class="property-photo">
                                <img class="img-fluid" src="http://placehold.it/255x170" alt="properties">
                                <div class="date-box">For Sale</div>
                            </div>
                            <div class="detail">
                                <div class="heading">
                                    <h3>
                                        <a href="properties-details.html">Real Luxury Villa</a>
                                    </h3>
                                    <div class="location">
                                        <a href="properties-details.html">
                                            <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City
                                        </a>
                                    </div>
                                </div>
                                <div class="properties-listing">
                                    <span>3 Beds</span>
                                    <span>2 Baths</span>
                                    <span>980 sqft</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide-item">
                        <div class="property-box-5">
                            <div class="property-photo">
                                <img class="img-fluid" src="http://placehold.it/255x170" alt="properties">
                                <div class="date-box">For Sale</div>
                            </div>
                            <div class="detail">
                                <div class="heading">
                                    <h3>
                                        <a href="properties-details.html">Luxury Villa</a>
                                    </h3>
                                    <div class="location">
                                        <a href="properties-details.html">
                                            <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City
                                        </a>
                                    </div>
                                </div>
                                <div class="properties-listing">
                                    <span>3 Beds</span>
                                    <span>2 Baths</span>
                                    <span>980 sqft</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-btn">
                    <div class="slick-prev slick-arrow-buton-2"></div>
                    <div class="slick-next slick-arrow-buton-2"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('categories')
    <div class="categories content-area-8 bg-grea-3">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <h1>Most Popular Places</h1>
            </div>
            <div class="row wow">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-pad">
                            <div class="category">
                                <div class="category_bg_box cat-1-bg">
                                    <div class="category-overlay">
                                        <div class="category-content">
                                            <h3 class="category-title">
                                                <a href="#">Florida</a>
                                            </h3>
                                            <div class="category-subtitle">14 Properties</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-pad">
                            <div class="category">
                                <div class="category_bg_box cat-2-bg">
                                    <div class="category-overlay">
                                        <div class="category-content">
                                            <h3 class="category-title">
                                                <a href="#">California</a>
                                            </h3>
                                            <div class="category-subtitle">98 Properties</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-pad">
                            <div class="category">
                                <div class="category_bg_box cat-6-bg">
                                    <div class="category-overlay">
                                        <div class="category-content">
                                            <h3 class="category-title">
                                                <a href="#">Villa</a>
                                            </h3>
                                            <div class="category-subtitle">98 Properties</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-6 col-pad none-992">
                            <div class="category">
                                <div class="category_bg_box cat-3-bg">
                                    <div class="category-overlay">
                                        <div class="category-content">
                                            <h3 class="category-title">
                                                <a href="#">Apartment</a>
                                            </h3>
                                            <div class="category-subtitle">98 Properties</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-pad">
                            <div class="category">
                                <div class="category_bg_box cat-5-bg">
                                    <div class="category-overlay">
                                        <div class="category-content">
                                            <h3 class="category-title">
                                                <a href="#">House</a>
                                            </h3>
                                            <div class="category-subtitle">98 Properties</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('counters')
    <div class="counters-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-box">
                        <div class="icon"><i class="flaticon-tag"></i></div>
                        <h1 class="counter">967</h1>
                        <p>Listings For Sale</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-box">
                        <div class="icon">
                            <i class="flaticon-business"></i>
                        </div>
                        <h1 class="counter">1276</h1>
                        <p>Listings For Rent</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-box">
                        <div class="icon">
                            <i class="flaticon-people"></i>
                        </div>
                        <h1 class="counter">396</h1>
                        <p>Agents</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-box">
                        <div class="icon">
                            <i class="flaticon-people-1"></i>
                        </div>
                        <h1 class="counter">177</h1>
                        <p>Brokers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('team')
    <div class="our-team-2 content-area">
            <div class="container">
                <!-- Main title -->
                <div class="main-title">
                    <h1>Our Agent</h1>
                </div>
                <div class="slick-slider-area">
                    <div class="row slick-carousel" data-slick='{"slidesToShow": 2, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                        <div class="slick-slide-item">
                            <div class="row team-4">
                                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-pad ">
                                    <div class="photo">
                                        <img src="http://placehold.it/224x268" alt="avatar-10" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-pad align-self-center">
                                    <div class="detail">
                                        <h5>Office Manager</h5>
                                        <h4>
                                            <a href="agent-detail.html">Karen Paran</a>
                                        </h4>

                                        <div class="contact">
                                            <ul>
                                                <li>
                                                    <span>Address:</span><a href="#"> 44 New Design Street,</a>
                                                </li>
                                                <li>
                                                    <span>Email:</span><a href="mailto:info@themevessel.com"> info@themevessel.com</a>
                                                </li>
                                                <li>
                                                    <span>Mobile:</span><a href="tel:+554XX-634-7071"> +55 4XX-634-7071</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <ul class="social-list clearfix">
                                            <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slick-slide-item">
                            <div class="row team-4">
                                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-pad ">
                                    <div class="photo">
                                        <img src="http://placehold.it/224x268" alt="avatar-9" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-pad align-self-center">
                                    <div class="detail">
                                        <h5>Creative Director</h5>
                                        <h4>
                                            <a href="agent-detail.html">Eliane Pereira</a>
                                        </h4>

                                        <div class="contact">
                                            <ul>
                                                <li>
                                                    <span>Address:</span><a href="#"> 44 New Design Street,</a>
                                                </li>
                                                <li>
                                                    <span>Email:</span><a href="mailto:info@themevessel.com"> info@themevessel.com</a>
                                                </li>
                                                <li>
                                                    <span>Mobile:</span><a href="tel:+554XX-634-7071"> +55 4XX-634-7071</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <ul class="social-list clearfix">
                                            <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slick-slide-item">
                            <div class="row team-4">
                                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-pad ">
                                    <div class="photo">
                                        <img src="http://placehold.it/224x268" alt="avatar-10" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-pad align-self-center">
                                    <div class="detail">
                                        <h5>Office Manager</h5>
                                        <h4>
                                            <a href="agent-detail.html">Karen Paran</a>
                                        </h4>

                                        <div class="contact">
                                            <ul>
                                                <li>
                                                    <span>Address:</span><a href="#"> 44 New Design Street,</a>
                                                </li>
                                                <li>
                                                    <span>Email:</span><a href="mailto:info@themevessel.com"> info@themevessel.com</a>
                                                </li>
                                                <li>
                                                    <span>Mobile:</span><a href="tel:+554XX-634-7071"> +55 4XX-634-7071</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <ul class="social-list clearfix">
                                            <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slick-slide-item">
                            <div class="row team-4">
                                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-pad">
                                    <div class="photo">
                                        <img src="http://placehold.it/224x268" alt="avatar-9" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-pad align-self-center">
                                    <div class="detail">
                                        <h5>Creative Director</h5>
                                        <h4>
                                            <a href="agent-detail.html">Eliane Pereira</a>
                                        </h4>

                                        <div class="contact">
                                            <ul>
                                                <li>
                                                    <span>Address:</span><a href="#"> 44 New Design Street,</a>
                                                </li>
                                                <li>
                                                    <span>Email:</span><a href="mailto:info@themevessel.com"> info@themevessel.com</a>
                                                </li>
                                                <li>
                                                    <span>Mobile:</span><a href="tel:+554XX-634-7071"> +55 4XX-634-7071</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <ul class="social-list clearfix">
                                            <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-prev slick-arrow-buton">
                        <i class="fa fa-angle-left"></i>
                    </div>
                    <div class="slick-next slick-arrow-buton">
                        <i class="fa fa-angle-right"></i>
                    </div>
                </div>
            </div>
    </div>
@endsection

@section('testimonial')
    <div class="testimonial-2 t2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="testimonial-inner">
                        <header class="testimonia-header">
                            <h1>Our Testimonial</h1>
                        </header>
                        <div id="carouselExampleIndicators4" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators4" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators4" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators4" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <p class="lead">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae.
                                    </p>
                                    <div class="media mb-4">
                                        <a class="pr-3" href="#">
                                            <img src="http://placehold.it/50x50" alt="use" class="img-fluid">
                                        </a>
                                        <div class="media-body align-self-center">
                                            <h5>
                                                <a href="#">Anne Brady</a>
                                            </h5>
                                            <h6>Creative Director</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <p class="lead">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae.
                                    </p>
                                    <div class="media mb-4">
                                        <a class="pr-3" href="#">
                                            <img src="http://placehold.it/50x50" alt="use" class="img-fluid">
                                        </a>
                                        <div class="media-body align-self-center">
                                            <h5>
                                                <a href="#">Eliane Perei</a>
                                            </h5>
                                            <h6>Web Developer</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <p class="lead">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae.
                                    </p>
                                    <div class="media mb-4">
                                        <a class="pr-3" href="#">
                                            <img src="http://placehold.it/50x50" alt="use" class="img-fluid">
                                        </a>
                                        <div class="media-body align-self-center">
                                            <h5>
                                                <a href="#">Maria Blank</a>
                                            </h5>
                                            <h6>Office Manager</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('blog')
    <div class="blog content-area-12">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <h1>Our Blog</h1>
            </div>
            <div class="slick-slider-area">
                <div class="row slick-carousel" data-slick='{"slidesToShow": 2, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                    <div class="slick-slide-item">
                        <div class="row blog-2">
                            <div class="col-lg-5 col-md-12 col-pad">
                                <div class="photo">
                                    <img src="http://placehold.it/224x272" alt="blog" class="img-fluid fit-cover">
                                    <div class="date-box">
                                        <span>17</span>Feb
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-12 col-pad align-self-center">
                                <div class="detail">
                                    <h3>
                                        <a href="blog-single-sidebar-right.html">Selling Your House</a>
                                    </h3>
                                    <div class="post-meta">
                                        <span><a href="#"><i class="fa fa-user"></i>Admin</a></span>
                                        <span><a href="#"><i class="fa fa-clock-o"></i>237</a></span>
                                        <span><a href="#"><i class="fa fa-heart-o"></i>548</a></span>
                                    </div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever <span class="none-1200">since the 1500s, when an unknown</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide-item">
                        <div class="row blog-2">
                            <div class="col-lg-5 col-md-12 col-pad ">
                                <div class="photo">
                                    <img src="http://placehold.it/224x272" alt="blog" class="img-fluid fit-cover">
                                    <div class="date-box">
                                        <span>21</span>Feb
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-12 col-pad align-self-center">
                                <div class="detail">
                                    <h3>
                                        <a href="blog-single-sidebar-right.html">Selling Your House</a>
                                    </h3>
                                    <div class="post-meta">
                                        <span><a href="#"><i class="fa fa-user"></i>Admin</a></span>
                                        <span><a href="#"><i class="fa fa-clock-o"></i>237</a></span>
                                        <span><a href="#"><i class="fa fa-heart-o"></i>548</a></span>
                                    </div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever <span class="none-1200">since the 1500s, when an unknown</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide-item">
                        <div class="row blog-2">
                            <div class="col-lg-5 col-md-12 col-pad ">
                                <div class="photo">
                                    <img src="http://placehold.it/224x272" alt="blog" class="img-fluid fit-cover">
                                    <div class="date-box">
                                        <span>9</span>Feb
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-12 col-pad align-self-center">
                                <div class="detail">
                                    <h3>
                                        <a href="blog-single-sidebar-right.html">Buying a Best House</a>
                                    </h3>
                                    <div class="post-meta">
                                        <span><a href="#"><i class="fa fa-user"></i>Admin</a></span>
                                        <span><a href="#"><i class="fa fa-clock-o"></i>237</a></span>
                                        <span><a href="#"><i class="fa fa-heart-o"></i>548</a></span>
                                    </div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever <span class="none-1200">since the 1500s, when an unknown</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-btn">
                    <div class="slick-prev slick-arrow-buton-2"></div>
                    <div class="slick-next slick-arrow-buton-2"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('partners')
    <div class="partners">
        <div class="container">
            <h4>Brands and Partners</h4>
            <div class="slick-slider-area">
                <div class="row slick-carousel" data-slick='{"slidesToShow": 5, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 3}}, {"breakpoint": 768,"settings":{"slidesToShow": 2}}]}'>
                    <div class="slick-slide-item"><img src="http://placehold.it/160x80" alt="brand" class="img-fluid"></div>
                    <div class="slick-slide-item"><img src="http://placehold.it/160x80" alt="brand" class="img-fluid"></div>
                    <div class="slick-slide-item"><img src="http://placehold.it/160x80" alt="brand" class="img-fluid"></div>
                    <div class="slick-slide-item"><img src="http://placehold.it/160x80" alt="brand" class="img-fluid"></div>
                    <div class="slick-slide-item"><img src="http://placehold.it/160x80" alt="brand" class="img-fluid"></div>
                    <div class="slick-slide-item"><img src="http://placehold.it/160x80" alt="brand" class="img-fluid"></div>
                    <div class="slick-slide-item"><img src="http://placehold.it/160x80" alt="brand" class="img-fluid"></div>
                    <div class="slick-slide-item"><img src="http://placehold.it/160x80" alt="brand" class="img-fluid"></div>
                </div>
                <div class="slick-prev slick-arrow-buton">
                    <i class="fa fa-angle-left"></i>
                </div>
                <div class="slick-next slick-arrow-buton">
                    <i class="fa fa-angle-right"></i>
                </div>
            </div>
        </div>
    </div>
@endsection