@extends('layout.front')

@section('title', 'Menu')

<link rel="stylesheet" href="../css/news.css">

@section('content')
    <div class="wrap-news">
        <div class="banner-news">

        </div>
        <div class="wrap-title-news">
            <div class="title-news">
                <h1>NEWS</h1>

            </div>
        </div>

        <div class="wrap-content-news mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-9" style="padding-right: 3rem">
                        <h5 class="m-4">Latest Update</h5>
                        @foreach ($news as $item)
                            <div class="row mb-4 pb-4" style="border-bottom: 1px solid rgb(141, 141, 141)">
                                <div class="col-5">
                                    <div
                                        class="bg-image-news"style="background-image: url('{{ asset('images/' . $item->image) }}')">

                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="title-news-content">
                                        <a href="">
                                            {{ $item->title }}</a>
                                    </div>
                                    <div class="date-news">
                                        <p>{{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y') }}</p>

                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                    <div class="col-3 wrap-popular">
                        <div class="title-popular mt-4 mb-3">
                            <h5>Most Popular</h5>
                        </div>

                        <div class="row p-2">
                            <div class="bg-img-popular-news">

                            </div>
                            <div class="title-news-popular mt-2" style="border-bottom: 1px solid rgb(192, 192, 192)">
                                <h5>KFC dan DBL Play Basket 3x3</h5>
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="bg-img-popular-news">

                            </div>
                            <div class="title-news-popular mt-2" style="border-bottom: 1px solid rgb(192, 192, 192)">
                                <h5>KFC dan DBL Play Basket 3x3</h5>
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="bg-img-popular-news">

                            </div>
                            <div class="title-news-popular mt-2" style="border-bottom: 1px solid rgb(192, 192, 192)">
                                <h5>KFC dan DBL Play Basket 3x3</h5>
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="bg-img-popular-news">

                            </div>
                            <div class="title-news-popular mt-2" style="border-bottom: 1px solid rgb(192, 192, 192)">
                                <h5>KFC dan DBL Play Basket 3x3</h5>
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="bg-img-popular-news">

                            </div>
                            <div class="title-news-popular mt-2" style="border-bottom: 1px solid rgb(192, 192, 192)">
                                <h5>KFC dan DBL Play Basket 3x3</h5>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layout.footer')

@endsection
