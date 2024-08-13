@extends('layout.front')
@section('title', 'Menu Detail')
<link rel="stylesheet" href="../css/menu.css">

@section('content')
    <div class="wrap-menu-detail">
        <div class="container">
            <div class="title-halaman mt-4">
                <p>{{ $menu->type->name }} > {{ $menu->name }} </p>
            </div>
            <div class="row">
                <div class="col-7">
                    <div class="image-menu-detail" style="background-image: url('{{ asset('images/' . $menu->image) }}')">
                    </div>

                </div>
                <div class="col-5">
                    <div class="wrap-card-menudetail">
                        <div class="title-card-menudetail">
                            <h2>{{ $menu->name }}</h2>
                        </div>
                        <div class="harga-card-menudetail mt-2">
                            <h5>Rp.{{ number_format($menu->harga, 0, ',', '.') }}</h5>
                        </div>
                        <div class="des-card-menudetail mt-1">
                            <p>{{ $menu->description }}</p>
                        </div>
                        <div class="button-order mt-5 text-center">
                            <a href="" class="fw-bold">Tambahkan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
