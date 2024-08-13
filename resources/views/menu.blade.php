@extends('layout.front')

@section('title', 'Menu')
<link rel="stylesheet" href="../css/menu.css">

@section('content')
    <div class="wrap-section-menu">
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
            <div class="wrap-link-type">
                <a href="spesial" class="active-menu">SPESIAL</a>
                <a href="#combo">COMBO</a>
                <a href="">ALACARATE</a>
                <a href="">DRINKS</a>
                <a href="">KIDS MEAL</a>
                <a href="">BREAKFAST</a>
                <a href="">COFFE</a>
                <a href="">DESSERT</a>
            </div>
            <div class="title-type mt-4">
                <h2 id="spesial">SPESIAL</h2>
            </div>
            <div class="wrap-card " style="margin-top: 2rem">
                <div class="row">
                    @foreach ($spesial as $item)
                        <div class="col-3">

                            <div class="card-menu">
                                <a href="menu/{{ $item->id }}">
                                    <div class="image-menu"
                                        style="background-image: url('{{ asset('images/' . $item->image) }}')">

                                    </div>
                                </a>

                                <div class="title-menu">
                                    <h4>{{ $item->name }}</h4>
                                </div>
                                <div class="harga-menu mt-1 mb-3">
                                    <h5>Rp.{{ number_format($item->harga, 0, ',', '.') }}</h5>
                                </div>
                                <div class="des-menu mb-4">
                                    <p>1 Cream Soup + 1 Fanta Float</p>
                                </div>
                                <div class="button-order mt-4 text-center">
                                    <a href="">Tambahkan</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="title-type mt-5">
                <h2 id="combo">COMBO</h2>
            </div>
            <div class="wrap-card " style="margin-top: 2rem">
                <div class="row">
                    @foreach ($spesialCombo as $item)
                        <div class="col-3">

                            <div class="card-menu">
                                <a href="menu/{{ $item->id }}">
                                    <div class="image-menu"
                                        style="background-image: url('{{ asset('images/' . $item->image) }}')">

                                    </div>
                                </a>

                                <div class="title-menu">
                                    <h4>{{ $item->name }}</h4>
                                </div>
                                <div class="harga-menu mt-1 mb-3">
                                    <h5>Rp.{{ number_format($item->harga, 0, ',', '.') }}</h5>
                                </div>
                                <div class="des-menu mb-4">
                                    <p>1 Cream Soup + 1 Fanta Float</p>
                                </div>
                                <div class="button-order mt-4 text-center">
                                    <a href="">Tambahkan</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="title-type mt-5">
                <h2>ALACARATE</h2>
            </div>
            <div class="wrap-card " style="margin-top: 2rem">
                <div class="row">
                    @foreach ($spesialAlacarate as $item)
                        <div class="col-3">

                            <div class="card-menu">
                                <a href="menu/{{ $item->id }}">
                                    <div class="image-menu"
                                        style="background-image: url('{{ asset('images/' . $item->image) }}')">

                                    </div>
                                </a>

                                <div class="title-menu">
                                    <h4>{{ $item->name }}</h4>
                                </div>
                                <div class="harga-menu mt-1 mb-3">
                                    <h5>Rp.{{ number_format($item->harga, 0, ',', '.') }}</h5>
                                </div>
                                <div class="des-menu mb-4">
                                    <p>1 Cream Soup + 1 Fanta Float</p>
                                </div>
                                <div class="button-order mt-4 text-center">
                                    <a href="">Tambahkan</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        @include('layout.footer')
    </div>
@endsection
