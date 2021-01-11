@extends('layouts.app')

@section('title', 'Destination Details')


@section('content')

    <div class="page-title-area ptb-100">
        <div class="container">
            <div class="page-title-content">
                <h1>Our Destinations</h1>
                <ul>
                    <li class="item"><a href="/">Home</a></li>
                    <li class="item"><a href="/destinationdetails"><i class='bx bx-chevrons-right'></i>Destinations
                            Details</a></li>
                </ul>
            </div>
        </div>
        <div class="bg-image">
            <img src="assets/img/page-title-area/destination-details.jpg" alt="Demo Image">
        </div>
    </div>


    <section class="destinations-details-section pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Oia, Greece</h2>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="destination-details-desc mb-30">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-sm-12">
                                <div class="image mb-30">
                                    <img src="assets/img/destination13.jpg" alt="Demo Image" />
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="image mb-30">
                                    <img src="assets/img/destination14.jpg" alt="Demo Image" />
                                </div>
                            </div>
                        </div>
                        <div class="content mb-20">
                            <h3>Greek Cottage, Greece.</h3>
                            <p>
                                I have personally participated in many of the programs mentioned on this site. One of
                                the programs is Save Our I have personally participated in many of the programs
                                mentioned on this site. One of Save Our I have personally in many of the programs
                                mentioned on this site.I have personally in many of the programs mentioned on this site.
                                One of the programs is Save.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus
                                commodo
                            </p>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-4 col-sm-12">
                                <div class="image mb-30">
                                    <img src="assets/img/destination5.jpg" alt="Demo Image" />
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <p class="mb-30">
                                    I have personally participated in many of the programs mentioned on this site. One
                                    of the programs is Save Our I have personally participated in many of the programs
                                    mentioned on this site. One of Save Our I have personally in many of the programs
                                    mentioned on this site.
                                </p>
                            </div>
                        </div>
                        <p class="mb-20">
                            Lorem ipsum dolor sit amet, participated consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus
                            commodo viverra maecenas accumsan lacus
                            vel facilisis consectetur adipiscing.
                        </p>
                        <div class="info-content">
                            <h3 class="sub-title">Some Information</h3>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="content-list">
                                        <i class='bx bx-map-alt'></i>
                                        <h6><span>Country :</span> Oia, Greece</h6>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="content-list">
                                        <i class='bx bx-book-reader'></i>
                                        <h6><span>Language Spoken :</span> English</h6>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="content-list">
                                        <i class='bx bx-notepad'></i>
                                        <h6><span>Visa Requirments :</span> Yes</h6>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="content-list">
                                        <i class='bx bx-area'></i>
                                        <h6><span>Area (km2) :</span> 1770.80 km2</h6>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="content-list">
                                        <i class='bx bx-user'></i>
                                        <h6><span>Per Person :</span> $1200</h6>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="content-list">
                                        <i class='bx bx-group'></i>
                                        <h6><span>Guide :</span> Local Guide Available</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="mb-20">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
                            maecenas accumsan lacus
                            vel facilisis consectetur adipiscing.
                        </p>
                        <hr>
                        <div class="comments-area mb-30">
                            <h3 class="sub-title">Comments</h3>
                            <ol class="comment-list">
                                <li class="comment">
                                    <div class="comment-body">
                                        <div class="comment-author">
                                            <img src="assets/img/blog/author1.jpg" alt="image" />
                                        </div>
                                        <div class="comment-content">
                                            <div class="comment-metadata">
                                                <h4 class="name">Emma Watson</h4>
                                            </div>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A laudantium
                                                distinctio ea reprehenderit est laborum!
                                            </p>
                                            <ul class="list">
                                                <li><i class='bx bx-heart'></i>Likes</li>
                                                <li><i class='bx bx-reply'></i>Reply</li>
                                                <li>15 days</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ol class="children">
                                        <li class="comment">
                                            <div class="comment-body">
                                                <div class="comment-author">
                                                    <img src="assets/img/blog/author2.jpg" alt="image" />
                                                </div>
                                                <form>
                                                    <div class="form-group form-inline">
                                                        <input name="message" class="form-control"
                                                            placeholder="Write a reply" required="required">
                                                        <button type="submit" class="btn-primary">
                                                            Send
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                    </ol>
                                </li>
                            </ol>
                        </div>
                        <div class="comment-reply">
                            <form id="commentForm" class="comment-form">
                                <h3 class="sub-title">Post comment</h3>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-xs-12">
                                        <div class="input-group">
                                            <div class="input-icon"><i class='bx bx-user'></i></div>
                                            <input type="text" class="form-control" name="name" placeholder="Name"
                                                required="required" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-xs-12">
                                        <div class="input-group">
                                            <div class="input-icon"><i class='bx bx-at'></i></div>
                                            <input type="email" class="form-control" name="email" placeholder="Email"
                                                required="required" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-xs-12">
                                        <div class="input-group">
                                            <div class="input-icon textarea"><i class='bx bx-envelope'></i></div>
                                            <textarea name="message" class="form-control" placeholder="Write Comment"
                                                required="required" rows="6"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn-primary">
                                    Post comment
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <aside class="widget-area">
                        <div class="widget widget-search mb-30">
                            <form class="search-form search-top">
                                <input type="search" class="form-control" placeholder="Search..." />
                                <button type="submit" class="btn-text-only">
                                    <i class='bx bx-search-alt'></i>
                                </button>
                            </form>
                        </div>
                        <div class="widget widget-video mb-30">
                            <div class="video-image">
                                <img src="assets/img/video-bg3.jpg" alt="video" />
                            </div>
                            <a href="https://www.youtube.com/watch?v=QSwvg9Rv2EI" class="youtube-popup video-btn">
                                <i class='bx bx-right-arrow'></i>
                            </a>
                        </div>
                        <div class="widget widget-article mb-30">
                            <h3 class="sub-title">Popular Places</h3>
                            <article class="article-item">
                                <div class="image">
                                    <img src="assets/img/destination6.jpg" alt="Demo Image" />
                                </div>
                                <div class="content">
                                    <span class="location"><i class='bx bx-map'></i>95 Fleet, London</span>
                                    <h3>
                                        <a href="destination-details.html">Venice The Dream Place.</a>
                                    </h3>
                                    <ul class="list">
                                        <li><i class='bx bx-time'></i>3 Days</li>
                                        <li>$1500</li>
                                    </ul>
                                </div>
                            </article>
                            <article class="article-item">
                                <div class="image">
                                    <img src="assets/img/destination7.jpg" alt="Demo Image" />
                                </div>
                                <div class="content">
                                    <span class="location"><i class='bx bx-map'></i>Venice, Italy</span>
                                    <h3>
                                        <a href="destination-details.html">Inca Trail Machu Picchu.</a>
                                    </h3>
                                    <ul class="list">
                                        <li><i class='bx bx-time'></i>5 Days</li>
                                        <li>$1200</li>
                                    </ul>
                                </div>
                            </article>
                            <article class="article-item">
                                <div class="image">
                                    <img src="assets/img/destination8.jpg" alt="Demo Image" />
                                </div>
                                <div class="content">
                                    <span class="location"><i class='bx bx-map'></i>Oia, Greece</span>
                                    <h3>
                                        <a href="destination-details.html">The Palace of Versailles.</a>
                                    </h3>
                                    <ul class="list">
                                        <li><i class='bx bx-time'></i>7 Days</li>
                                        <li>$2000</li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                        <div class="widget widget-gallery mb-30">
                            <h3 class="sub-title">Instagram Post</h3>
                            <ul class="instagram-post">
                                <li>
                                    <img src="assets/img/instagram1.jpg" alt="Demo Image">
                                    <i class='bx bxl-instagram'></i>
                                </li>
                                <li>
                                    <img src="assets/img/instagram2.jpg" alt="Demo Image">
                                    <i class='bx bxl-instagram'></i>
                                </li>
                                <li>
                                    <img src="assets/img/instagram3.jpg" alt="Demo Image">
                                    <i class='bx bxl-instagram'></i>
                                </li>
                                <li>
                                    <img src="assets/img/instagram4.jpg" alt="Demo Image">
                                    <i class='bx bxl-instagram'></i>
                                </li>
                                <li>
                                    <img src="assets/img/instagram5.jpg" alt="Demo Image">
                                    <i class='bx bxl-instagram'></i>
                                </li>
                                <li>
                                    <img src="assets/img/instagram6.jpg" alt="Demo Image">
                                    <i class='bx bxl-instagram'></i>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    
@endsection