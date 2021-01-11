@extends('layouts.app')

@section('title', 'Trip Offers')



@section('content')
     <div class="page-title-area ptb-100">
        <div class="container">
            <div class="page-title-content">
                <h1>Offers & Discount</h1>
                <ul>
                    <li class="item"><a href="/">Home</a></li>
                    <li class="item"><a href="/tripoffers"><i class='bx bx-chevrons-right'></i>Special
                            Offers</a></li>
                </ul>
            </div>
        </div>
        <div class="bg-image">
            <img src="assets/img/page-title-area/offer.jpg" alt="Demo Image">
        </div>
    </div>


    <section id="lastOffer" class="last-offer-section pt-100 pb-70 bg-light">
        <div class="container">
            <div class="section-title">
                <h2>Last Minute Offer</h2>
                <p>Travel has helped us to understand the meaning of life and it has helped us become better people.
                    Each time we travel, we see the world with new eyes.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 filtr-item">
                    <div class="item-single mb-30">
                        <div class="image">
                            <img src="assets/img/destination1.jpg" alt="Demo Image">
                        </div>
                        <div class="content">
                            <span class="location"><i class='bx bx-map'></i>Hvar, Croatia</span>
                            <h3>
                                <a href="destination-details.html">Piazza Castello</a>
                            </h3>
                            <div class="review">
                                <i class='bx bx-smile'></i>
                                <span>8.5</span>
                                <span>Superb</span>
                            </div>
                            <p>
                                A wonderful little cottage right on the seashore - perfect for exploring.
                            </p>
                            <hr>
                            <ul class="list">
                                <li><i class='bx bx-time'></i>3 Days</li>
                                <li><i class='bx bx-group'></i>160+</li>
                                <li>$500</li>
                            </ul>
                            <div class="discount">
                                <span>Discount</span>
                                <span>10%</span>
                            </div>
                        </div>
                        <div class="spacer"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 filtr-item">
                    <div class="item-single mb-30">
                        <div class="image">
                            <img src="assets/img/destination2.jpg" alt="Demo Image">
                        </div>
                        <div class="content">
                            <span class="location"><i class='bx bx-map'></i>Santorini, Oia ,Greece</span>
                            <h3>
                                <a href="destination-details.html"> Oia ,Greece</a>
                            </h3>
                            <div class="review">
                                <i class='bx bx-smile'></i>
                                <span>9</span>
                                <span>Superb</span>
                            </div>
                            <p>
                                A wonderful little cottage right on the seashore - perfect for exploring.
                            </p>
                            <hr>
                            <ul class="list">
                                <li><i class='bx bx-time'></i>7 Days</li>
                                <li><i class='bx bx-group'></i>65+</li>
                                <li>$2000</li>
                            </ul>
                            <div class="discount">
                                <span>Discount</span>
                                <span>30%</span>
                            </div>
                        </div>
                        <div class="spacer"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 m-auto">
                    <div class="item-single mb-30">
                        <div class="image">
                            <img src="assets/img/destination3.jpg" alt="Demo Image">
                        </div>
                        <div class="content">
                            <span class="location"><i class='bx bx-map'></i>Rialto Bridge, Italy</span>
                            <h3>
                                <a href="destination-details.html">Rialto Bridge</a>
                            </h3>
                            <div class="review">
                                <i class='bx bx-smile'></i>
                                <span>7.5</span>
                                <span>Superb</span>
                            </div>
                            <p>
                                A wonderful little cottage right on the seashore - perfect for exploring.
                            </p>
                            <hr>
                            <ul class="list">
                                <li><i class='bx bx-time'></i>5 Days</li>
                                <li><i class='bx bx-group'></i>96+</li>
                                <li>$2100</li>
                            </ul>
                            <div class="discount">
                                <span>Discount</span>
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="spacer"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="features-section pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="item-single mb-30">
                        <i class='bx bx-calendar'></i>
                        <h3><a href="#">Reservation</a></h3>
                        <p>As compared with earlier times where a reservation personnel has to update its inventory
                            every time.</p>
                        <div class="cta-btn">
                            <a href="#" class="btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item-single mb-30">
                        <i class='bx bxs-plane-take-off'></i>
                        <h3><a href="#">Tour Pack</a></h3>
                        <p>You can dream, create, design, and build the most wonder ful place in the world. But it
                            requires people.</p>
                        <div class="cta-btn">
                            <a href="#" class="btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 m-auto">
                    <div class="item-single mb-30">
                        <i class='bx bx-money'></i>
                        <h3><a href="#">Payment</a></h3>
                        <p>As compared with earlier times where a reservation personnel has to update its inventory
                            every time.</p>
                        <div class="cta-btn">
                            <a href="#" class="btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="offers" class="offers-section ptb-100 bg-light">
        <div class="container">
            <div class="section-title">
                <h2>Special Offers & Discount</h2>
                <p>Travel has helped us to understand the meaning of life and it has helped us become better people.
                    Each time we travel, we see the world with new eyes.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="item-single mb-30">
                        <div class="image">
                            <img src="assets/img/offer1.jpg" alt="Demo Image">
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
                                    <a href="tours.html">Asia Tour</a>
                                </h3>
                                <span>$2000</span>
                            </div>
                            <ul class="list">
                                <li><i class='bx bx-time'></i>7 Days</li>
                                <li><i class='bx bx-group'></i>60+</li>
                                <li>$1500</li>
                            </ul>
                        </div>
                        <div class="discount">
                            <span>Discount</span>
                            <span>30%</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item-single mb-30">
                        <div class="image">
                            <img src="assets/img/offer2.jpg" alt="Demo Image">
                        </div>
                        <div class="content">
                            <div class="review">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <span>19 Review</span>
                            </div>
                            <div class="title">
                                <h3>
                                    <a href="tours.html">Russia Tour of Couple</a>
                                </h3>
                                <span>$1600</span>
                            </div>
                            <ul class="list">
                                <li><i class='bx bx-time'></i>5 Days</li>
                                <li><i class='bx bx-group'></i>130+</li>
                                <li>$1200</li>
                            </ul>
                        </div>
                        <div class="discount">
                            <span>Discount</span>
                            <span>29%</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item-single mb-30">
                        <div class="image">
                            <img src="assets/img/offer3.jpg" alt="Demo Image">
                        </div>
                        <div class="content">
                            <div class="review">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <span>35 Review</span>
                            </div>
                            <div class="title">
                                <h3>
                                    <a href="tours.html">Campfire In Australia</a>
                                </h3>
                                <span>$2600</span>
                            </div>
                            <ul class="list">
                                <li><i class='bx bx-time'></i>3 Days</li>
                                <li><i class='bx bx-group'></i>91+</li>
                                <li>$2200</li>
                            </ul>
                        </div>
                        <div class="discount">
                            <span>Discount</span>
                            <span>16%</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item-single mb-30">
                        <div class="image">
                            <img src="assets/img/offer4.jpg" alt="Demo Image">
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
                                    <a href="tours.html">Tôrres, Brazil</a>
                                </h3>
                                <span>$2000</span>
                            </div>
                            <ul class="list">
                                <li><i class='bx bx-time'></i>7 Days</li>
                                <li><i class='bx bx-group'></i>60+</li>
                                <li>$1500</li>
                            </ul>
                        </div>
                        <div class="discount">
                            <span>Discount</span>
                            <span>30%</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item-single mb-30">
                        <div class="image">
                            <img src="assets/img/offer5.jpg" alt="Demo Image">
                        </div>
                        <div class="content">
                            <div class="review">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <span>19 Review</span>
                            </div>
                            <div class="title">
                                <h3>
                                    <a href="tours.html">Ao Nang, Thailand</a>
                                </h3>
                                <span>$1600</span>
                            </div>
                            <ul class="list">
                                <li><i class='bx bx-time'></i>5 Days</li>
                                <li><i class='bx bx-group'></i>130+</li>
                                <li>$1200</li>
                            </ul>
                        </div>
                        <div class="discount">
                            <span>Discount</span>
                            <span>29%</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item-single mb-30">
                        <div class="image">
                            <img src="assets/img/offer6.jpg" alt="Demo Image">
                        </div>
                        <div class="content">
                            <div class="review">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <span>35 Review</span>
                            </div>
                            <div class="title">
                                <h3>
                                    <a href="tours.html">Kendhoo, Maldives</a>
                                </h3>
                                <span>$2600</span>
                            </div>
                            <ul class="list">
                                <li><i class='bx bx-time'></i>3 Days</li>
                                <li><i class='bx bx-group'></i>91+</li>
                                <li>$2200</li>
                            </ul>
                        </div>
                        <div class="discount">
                            <span>Discount</span>
                            <span>16%</span>
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