@extends('layout.main')
@section('content_main')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Detail News</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Detail News</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            {{-- <div class="card-header">
                                <h3 class="card-title">Tambah Data Menu</h3>
                            </div> --}}
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Judul</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="{{ $news->title }}" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label for="description">Deskripsi</label>
                                        <textarea name="description" class="form-control" id="description" cols="30" rows="10" readonly>{{ $news->description }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="description" class="mb-3">Gambar</label>
                                        <ul>

                                            <img src="{{ asset('images/' . $news->image) }}" width="250" alt="">

                                        </ul>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <a href="/listNews" class="btn btn-danger w-25">Kembali</a>
                                </div>
                            </form>

                        </div>
                        <!-- /.card -->


                    </div>

                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
