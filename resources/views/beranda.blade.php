@extends('layout.front')

@section('title', 'Beranda')
<link rel="stylesheet" href="css/beranda.css">

@section('content')
    <div class="wrap-beranda">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../image/carausel-kfc.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../image/carausel-kfc-2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../image/carausel-kfc-3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="container">

            <div class="row">
                <div class="col-7">
                    <div class="wrap-content">
                        <div class="title-video mb-3">
                            <h3>Video Commercial</h3>
                        </div>
                        <div class="video">
                            <iframe style="width: 100%" height="345"
                                src="https://www.youtube.com/embed/Y4MCAz14Ax4?si=hmos1Zip-kjDcZ18"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="wrap-content">
                        <div class="title-video mb-3 d-flex justify-content-between align-items-center">
                            <h3>News and Article</h3>
                            <a href="">See More</a>
                        </div>
                        <div class="row d-flex wrap-news mb-3" style="align-items: center">
                            <div class="col-4">
                                <div class="image-bg-article">

                                </div>
                            </div>
                            <div class="col-8">
                                <div class="title-img-article">
                                    <p>
                                        Finis P2, Sean Gelael Kembali Naik ..
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex wrap-news mb-3" style="align-items: center">
                            <div class="col-4">
                                <div class="image-bg-article">

                                </div>
                            </div>
                            <div class="col-8">
                                <div class="title-img-article">
                                    <p>
                                        Finis P2, Sean Gelael Kembali Naik ..
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex wrap-news mb-3" style="align-items: center">
                            <div class="col-4">
                                <div class="image-bg-article">

                                </div>
                            </div>
                            <div class="col-8">
                                <div class="title-img-article">
                                    <p>
                                        Finis P2, Sean Gelael Kembali Naik ..
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-5" style="margin-top: 3rem;">
                <div class="wrap-garis">
                    <div class="garis-1"></div>
                    <div class="img-garis">
                        <img src="image/garis-merah.png" alt="">
                    </div>
                    <div class="garis-1"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    <div class="wrap-card-icon">
                        <div class="icon text-center">
                            <img src="image/icon-deals.svg" alt="">
                        </div>
                        <div class="title-icon text-center">
                            <h5>EVERYDAY SAVER DEALS</h5>
                        </div>
                        <div class="des-icon text-center">
                            <p>Find interesting promos and vouchers only at KFC</p>
                        </div>
                        <div class="see mt-4">
                            <a href="">See more</a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="wrap-card-icon">
                        <div class="icon text-center">
                            <img src="https://kfcku.com/assets/theme/img/icon-menu.svg" alt="">
                        </div>
                        <div class="title-icon text-center">
                            <h5>SEE OUR VARIETY OF MENU</h5>
                        </div>
                        <div class="des-icon text-center">
                            <p>See our variety of menu and order to enjoy it</p>
                        </div>
                        <div class="see mt-4">
                            <a href="">See more</a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="wrap-card-icon">
                        <div class="icon text-center">
                            <img src="https://kfcku.com/assets/theme/img/icon-location.svg" alt="">
                        </div>
                        <div class="title-icon text-center">
                            <h5>FIND OUR OUTLET NEAR YOU</h5>
                        </div>
                        <div class="des-icon text-center">
                            <p>Find or nearest shop and outlet in your location</p>
                        </div>
                        <div class="see mt-4">
                            <a href="">See more</a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="wrap-card-icon">
                        <div class="icon text-center">
                            <img src="image/icon-deals.svg" alt="">
                        </div>
                        <div class="title-icon text-center">
                            <h5>KIDS CELEBERATION OFFERS</h5>
                        </div>
                        <div class="des-icon text-center">
                            <p>See our offers for kids celeberation</p>
                        </div>
                        <div class="see mt-4">
                            <a href="">See more</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        @include('layout.footer')
    </div>
@endsection
