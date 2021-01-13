@extends('layouts.app')

@section('title', 'Tours')

@section('h3', 'active')

@section('content')
        <div class="page-title-area ptb-100">
        <div class="container">
            <div class="page-title-content">
                <h1>Tours</h1>
                <ul>
                    <li class="item"><a href="/">Home</a></li>
                    <li class="item"><a href="/tours"><i class='bx bx-chevrons-right'></i>Tours</a></li>
                </ul>
            </div>
        </div>
        <div class="bg-image">
            <img src="assets/img/page-title-area/tour.jpg" alt="Demo Image">
        </div>
    </div>


    <section id="tours" class="tours-section tours-style-two pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Recent Tours</h2>
                <p>Travel has helped us to understand the meaning of life and it has helped us become better people.
                    Each time we travel, we see the world with new eyes.</p>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="item-single mb-30">
                        <div class="image">
                            <img src="assets/img/tour/tour1.jpg" alt="Demo Image" />
                        </div>
                        <div class="content">
                            <span class="location"><i class='bx bx-map'></i>Oia, Greece</span>
                            <h3>
                                <a href="tours.html">Greek Cottage Greece</a>
                            </h3>
                            <div class="review mb-15">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <span>25 Review</span>
                            </div>
                            <p>
                                A wonderful little cottage right on the seashore - perfect for exploring with the little
                                boat which is included in the price. Located opposite Nidri sleeping.
                            </p>
                            <hr>
                            <ul class="list">
                                <li><i class='bx bx-time'></i>3 Days</li>
                                <li><i class='bx bx-group'></i>160+</li>
                                <li>$1500</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="item-single mb-30">
                        <div class="image">
                            <img src="assets/img/tour/tour9.jpg" alt="Demo Image" />
                        </div>
                        <div class="content">
                            <span class="location"><i class='bx bx-map'></i>Thailand</span>
                            <h3>
                                <a href="tours.html">Great Natural Sea</a>
                            </h3>
                            <div class="review mb-15">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <span>31 Review</span>
                            </div>
                            <p>
                                A wonderful little cottage right on the seashore - perfect for exploring with the little
                                boat which is included in the price. Located opposite Nidri sleeping.
                            </p>
                            <hr>
                            <ul class="list">
                                <li><i class='bx bx-time'></i>5 Days</li>
                                <li><i class='bx bx-group'></i>138+</li>
                                <li>$1900</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item-single mb-30">
                        <div class="image">
                            <img src="assets/img/tour/tour2.jpg" alt="Demo Image" />
                        </div>
                        <div class="content">
                            <div class="review">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <span>39 Review</span>
                            </div>
                            <div class="title">
                                <h3>
                                    <a href="tours.html">Piazza Castello</a>
                                </h3>
                            </div>
                            <ul class="list">
                                <li><i class='bx bx-time'></i>7 Days</li>
                                <li><i class='bx bx-group'></i>60+</li>
                                <li>$2100</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item-single mb-30">
                        <div class="image">
                            <img src="assets/img/tour/tour3.jpg" alt="Demo Image" />
                        </div>
                        <div class="content">
                            <div class="review">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <span>69 Review</span>
                            </div>
                            <div class="title">
                                <h3>
                                    <a href="tours.html">Santorini, Greece</a>
                                </h3>
                            </div>
                            <ul class="list">
                                <li><i class='bx bx-time'></i>5 Days</li>
                                <li><i class='bx bx-group'></i>60+</li>
                                <li>$1500</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 m-auto">
                    <div class="item-single mb-30">
                        <div class="image">
                            <img src="assets/img/tour/tour4.jpg" alt="Demo Image" />
                        </div>
                        <div class="content">
                            <div class="review">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <span>39 Review</span>
                            </div>
                            <div class="title">
                                <h3>
                                    <a href="tours.html">Metropolitan City</a>
                                </h3>
                            </div>
                            <ul class="list">
                                <li><i class='bx bx-time'></i>7 Days</li>
                                <li><i class='bx bx-group'></i>60+</li>
                                <li>$2300</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="tours" class="tours-section tours-style-two ptb-100 bg-light">
        <div class="container">
            <div class="section-title">
                <h2>Our Tours</h2>
                <p>Travel has helped us to understand the meaning of life and it has helped us become better people.
                    Each time we travel, we see the world with new eyes.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="item-single mb-30">
                        <div class="image">
                            <img src="assets/img/tour/tour5.jpg" alt="Demo Image" />
                        </div>
                        <div class="content">
                            <div class="review">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <span>39 Review</span>
                            </div>
                            <div class="title">
                                <h3>
                                    <a href="tours.html">Piazza Castello</a>
                                </h3>
                            </div>
                            <ul class="list">
                                <li><i class='bx bx-time'></i>7 Days</li>
                                <li><i class='bx bx-group'></i>60+</li>
                                <li>$2100</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item-single mb-30">
                        <div class="image">
                            <img src="assets/img/tour/tour6.jpg" alt="Demo Image" />
                        </div>
                        <div class="content">
                            <div class="review">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <span>69 Review</span>
                            </div>
                            <div class="title">
                                <h3>
                                    <a href="tours.html">Santorini, Greece</a>
                                </h3>
                            </div>
                            <ul class="list">
                                <li><i class='bx bx-time'></i>5 Days</li>
                                <li><i class='bx bx-group'></i>60+</li>
                                <li>$1500</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item-single mb-30">
                        <div class="image">
                            <img src="assets/img/tour/tour7.jpg" alt="Demo Image" />
                        </div>
                        <div class="content">
                            <div class="review">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <span>39 Review</span>
                            </div>
                            <div class="title">
                                <h3>
                                    <a href="tours.html">Metropolitan City</a>
                                </h3>
                            </div>
                            <ul class="list">
                                <li><i class='bx bx-time'></i>7 Days</li>
                                <li><i class='bx bx-group'></i>60+</li>
                                <li>$2300</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item-single mb-30">
                        <div class="image">
                            <img src="assets/img/tour/tour8.jpg" alt="Demo Image" />
                        </div>
                        <div class="content">
                            <div class="review">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <span>39 Review</span>
                            </div>
                            <div class="title">
                                <h3>
                                    <a href="tours.html">Piazza Castello</a>
                                </h3>
                            </div>
                            <ul class="list">
                                <li><i class='bx bx-time'></i>7 Days</li>
                                <li><i class='bx bx-group'></i>60+</li>
                                <li>$2100</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item-single mb-30">
                        <div class="image">
                            <img src="assets/img/tour/tour10.jpg" alt="Demo Image" />
                        </div>
                        <div class="content">
                            <div class="review">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <span>69 Review</span>
                            </div>
                            <div class="title">
                                <h3>
                                    <a href="tours.html">Santorini, Greece</a>
                                </h3>
                            </div>
                            <ul class="list">
                                <li><i class='bx bx-time'></i>5 Days</li>
                                <li><i class='bx bx-group'></i>60+</li>
                                <li>$1500</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item-single mb-30">
                        <div class="image">
                            <img src="assets/img/tour/tour11.jpg" alt="Demo Image" />
                        </div>
                        <div class="content">
                            <div class="review">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <span>39 Review</span>
                            </div>
                            <div class="title">
                                <h3>
                                    <a href="tours.html">Metropolitan City</a>
                                </h3>
                            </div>
                            <ul class="list">
                                <li><i class='bx bx-time'></i>7 Days</li>
                                <li><i class='bx bx-group'></i>60+</li>
                                <li>$2300</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item-single mb-30">
                        <div class="image">
                            <img src="assets/img/tour/tour12.jpg" alt="Demo Image" />
                        </div>
                        <div class="content">
                            <div class="review">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <span>39 Review</span>
                            </div>
                            <div class="title">
                                <h3>
                                    <a href="tours.html">Piazza Castello</a>
                                </h3>
                            </div>
                            <ul class="list">
                                <li><i class='bx bx-time'></i>7 Days</li>
                                <li><i class='bx bx-group'></i>60+</li>
                                <li>$2100</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item-single mb-30">
                        <div class="image">
                            <img src="assets/img/tour/tour13.jpg" alt="Demo Image" />
                        </div>
                        <div class="content">
                            <div class="review">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <span>69 Review</span>
                            </div>
                            <div class="title">
                                <h3>
                                    <a href="tours.html">Santorini, Greece</a>
                                </h3>
                            </div>
                            <ul class="list">
                                <li><i class='bx bx-time'></i>5 Days</li>
                                <li><i class='bx bx-group'></i>60+</li>
                                <li>$1500</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 m-auto">
                    <div class="item-single mb-30">
                        <div class="image">
                            <img src="assets/img/tour/tour14.jpg" alt="Demo Image" />
                        </div>
                        <div class="content">
                            <div class="review">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <span>39 Review</span>
                            </div>
                            <div class="title">
                                <h3>
                                    <a href="tours.html">Metropolitan City</a>
                                </h3>
                            </div>
                            <ul class="list">
                                <li><i class='bx bx-time'></i>7 Days</li>
                                <li><i class='bx bx-group'></i>60+</li>
                                <li>$2300</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="pagination text-center">
                        <span class="page-numbers current" aria-current="page">1</span>
                        <a href="#" class="page-numbers">2</a>
                        <a href="#" class="page-numbers">3</a>
                        <a href="#" class="page-numbers">Next</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="testimonial" class="testimonial-section ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>What're Our Clients Say</h2>
                <p>Travel has helped us to understand the meaning of life and it has helped us become better people.
                    Each time we travel, we see the world with new eyes.</p>
            </div>
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="testimonial-slider owl-carousel">
                        <div class="slider-item">
                            <div class="client-img">
                                <img src="assets/img/client1.jpg" alt="client-1" />
                            </div>
                            <div class="content">
                                <div class="client-info">
                                    <h3>Jordan Alin</h3>
                                    <span>Bloger & Youtuber</span>
                                </div>
                                <div class="quote">
                                    <i class='bx bxs-quote-left'></i>
                                </div>
                                <p>
                                    The Personal Travel Agents Academy is a 12-month training programme allowing anyone
                                    with no previous travel experience to start their own travel business. This is an
                                    advanced course to help build knowledge in travel and develop sales skills.
                                </p>
                                <div class="review">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="client-img">
                                <img src="assets/img/client2.jpg" alt="client-1" />
                            </div>
                            <div class="content">
                                <div class="client-info mb-30">
                                    <h3>David Milan</h3>
                                    <span>Photographer</span>
                                </div>
                                <div class="quote">
                                    <i class='bx bxs-quote-left'></i>
                                </div>
                                <p>
                                    The Personal Travel Agents Academy is a 12-month training programme allowing anyone
                                    with no previous travel experience to start their own travel business. This is an
                                    advanced course to help build knowledge in travel and develop sales skills.
                                </p>
                                <div class="review mt-15">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="client-img">
                                <img src="assets/img/client3.jpg" alt="client-1" />
                            </div>
                            <div class="content">
                                <div class="client-info mb-30">
                                    <h3>Thomas Alva</h3>
                                    <span>Journalist</span>
                                </div>
                                <div class="quote">
                                    <i class='bx bxs-quote-left'></i>
                                </div>
                                <p>
                                    The Personal Travel Agents Academy is a 12-month training programme allowing anyone
                                    with no previous travel experience to start their own travel business. This is an
                                    advanced course to help build knowledge in travel and develop sales skills.
                                </p>
                                <div class="review mt-15">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="client-img">
                                <img src="assets/img/client4.jpg" alt="client-1" />
                            </div>
                            <div class="content">
                                <div class="client-info mb-30">
                                    <h3>Emma Watson</h3>
                                    <span>Actress & Model</span>
                                </div>
                                <div class="quote">
                                    <i class='bx bxs-quote-left'></i>
                                </div>
                                <p>
                                    The Personal Travel Agents Academy is a 12-month training programme allowing anyone
                                    with no previous travel experience to start their own travel business. This is an
                                    advanced course to help build knowledge in travel and develop sales skills.
                                </p>
                                <div class="review mt-15">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="client-img">
                                <img src="assets/img/client5.jpg" alt="client-1" />
                            </div>
                            <div class="content">
                                <div class="client-info mb-30">
                                    <h3>Jordan Alin</h3>
                                    <span>Bloger & Youtuber</span>
                                </div>
                                <div class="quote">
                                    <i class='bx bxs-quote-left'></i>
                                </div>
                                <p>
                                    The Personal Travel Agents Academy is a 12-month training programme allowing anyone
                                    with no previous travel experience to start their own travel business. This is an
                                    advanced course to help build knowledge in travel and develop sales skills.
                                </p>
                                <div class="review mt-15">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='clients-img'>
                <img class="image image-1" src="assets/img/client1.jpg" alt="Demo Image">
                <img class="image image-2" src="assets/img/client2.jpg" alt="Demo Image">
                <img class="image image-3" src="assets/img/client3.jpg" alt="Demo Image">
                <img class="image image-4" src="assets/img/client4.jpg" alt="Demo Image">
                <img class="image image-5" src="assets/img/client5.jpg" alt="Demo Image">
            </div>
        </div>
        <div class="shape">
            <img src="assets/img/shape1.png" alt="Background Shape">
        </div>
    </section>
@endsection