@extends('layout.main')
@section('content_main')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>List Menu Kfc</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Simple Tables</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- /.row -->
                <div class="row">
                    <div class="col-3">
                        <form method="GET" action="{{ route('listMenu') }}">
                            <div class="input-group input-group-sm mb-3" style="width: 300px;">
                                <select class="form-control" id="menuType" name="menuType" onchange="this.form.submit()">
                                    <option value="all">All</option>
                                    @foreach ($type as $type)
                                        <option value="{{ $type->id }}"
                                            {{ request('menuType') == $type->id ? 'selected' : '' }}>
                                            {{ $type->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="addData" class="btn btn-primary">Tambah Data Menu</a>

                                <div class="card-tools">
                                    <form method="GET">
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                            <input type="text" name="table_search" class="form-control float-right"
                                                placeholder="Search" value="{{ request('table_search') }}">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Nama</th>
                                            <th>Harga</th>
                                            <th>Jenis</th>
                                            <th>Deskripsi</th>
                                            <th>Gambar</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($menu as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>Rp.{{ number_format($item->harga, 0, ',', '.') }}</td>
                                                <td>{{ $item->type->name }}</td>
                                                <td>{{ $item->description }}
                                                </td>
                                                <td><img src="{{ asset('images/' . $item->image) }}"
                                                        alt="Image of {{ $item->name }}" width="40"></td>

                                                <td>
                                                    <a href="listDetailMenu/{{ $item->id }}"
                                                        class="btn btn-outline-primary">Detail</a>
                                                    <a href="editMenu/{{ $item->id }}"
                                                        class="btn btn-outline-success">Edit</a>
                                                    <a
                                                        href="deleteMenu/{{ $item->id }}"class="btn btn-outline-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>

                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
