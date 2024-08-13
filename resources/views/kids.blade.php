@extends('layout.front')

@section('title', 'Menu')

<link rel="stylesheet" href="../css/news.css">
<link rel="stylesheet" href="../css/kids.css">

@section('content')
    <div class="wrap-news">
        <div class="banner-news">

        </div>
        <div class="wrap-title-news">
            <div class="title-news">
                <h1>BIRTHDAY THEMATIC</h1>

            </div>
        </div>
        <div class="container">
            <div class="row mt-5">
                <div class="col-4">
                    <div class="link-kids active-link">
                        <a href="">Birthday Thematic</a>
                    </div>
                    <div class="link-kids">
                        <a href="">Birthday Thematic</a>
                    </div>
                </div>

                <div class="col-8">
                    <div class="img-kids-right">

                    </div>
                </div>
            </div>
        </div>

    </div>
    @include('layout.footer')

@endsection
