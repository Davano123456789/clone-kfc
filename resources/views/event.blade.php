@extends('layout.front')

@section('title', 'Menu')

<link rel="stylesheet" href="../css/news.css">

@section('content')
    <div class="wrap-news">
        <div class="banner-news">

        </div>
        <div class="wrap-title-news">
            <div class="title-news">
                <h1>EVENT</h1>

            </div>
        </div>
        <div class="container">
            <div class="row mt-5">
                @foreach ($event as $item)
                    <div class="col-3 mb-4">
                        <div class="wrap-card-event">
                            <div class="img-event" style="background-image: url('{{ asset('images/' . $item->image) }}')">

                            </div>
                            <div class="title-event mt-4 text-center">
                                <h6>{{ $item->title }}</h6>
                            </div>
                            <div class="date-event">
                                <p>{{ $item->created_at->format('d-m-Y') }}</p>

                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
    @include('layout.footer')

@endsection
