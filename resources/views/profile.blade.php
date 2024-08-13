@extends('layout.front')

@section('title', 'Menu')

<link rel="stylesheet" href="../css/news.css">
<link rel="stylesheet" href="../css/kids.css">

@section('content')
    <div class="wrap-news">
        <div class="banner-news">

        </div>
        <div class="wrap-title-news">
            <div class="title-news2">
                <h1>Profile Perusahaan</h1>

            </div>
        </div>
        <div class="container">
            <div class="row mt-5">
                <div class="col-4">
                    @foreach ($profile as $item)
                        <div class="link-kids ">
                            <a href="detailProfile/{{ $item->id }}">
                                {{ $item->title }}</a>
                        </div>
                    @endforeach


                </div>

                <div class="col-8">
                    <div class="fill-profile">
                        <p></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @include('layout.footer')

@endsection
