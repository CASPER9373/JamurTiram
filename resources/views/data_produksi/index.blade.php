@extends('template_back.layout')
@section('title', 'Data produksi')
@section('content')

    <!-- /breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Tabel</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Data produksi</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- /breadcrumb -->
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @if (session('catch'))
        <div class="alert alert-warning" role="alert">
            {{ session('catch') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $$error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!-- row opened -->
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0 mt-2">DATA PRODUKSI</h4>
                        {{-- awal button modal --}}
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                            data-bs-whatever="@mdo">Tambah Data</button>
                        {{-- akhir button modal --}}
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-md-nowrap">
                            <thead>
                                <tr>
                                    <th class="wd-1p border-bottom-0">Id</th>
                                    <th class="wd-15p border-bottom-0">Stok Bibit</th>
                                    <th class="wd-15p border-bottom-0">Tanggal produksi</th>
                                    <th class="wd-15p border-bottom-0">jumlah produksi</th>
                                    <th class="wd-15p border-bottom-0">hasil produksi</th>
                                    <th class="wd-25p border-bottom-0">keterangan</th>
                                    <th class="wd-25p border-bottom-0">Aksi</th>
                                </tr>
                            </thead>
                            {{-- <tbody>
                                @foreach ($dataproduksi as $dp)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $dp->stok_bibit }}</td>
                                        <td>{{ $dp->tgl_produksi }}</td>
                                        <td>{{ $dp->jml_produksi }}</td>
                                        <td>{{ $dp->hasil_produksi }}</td>
                                        <td>{{ $dp->keterangan }}</td>
                                        <td>aksi</td>
                                    </tr>
                                @endforeach
                            </tbody> --}}
                        </table>
                        <!-- awal modal tambah -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Produksi</h1>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('dataproduksi.store') }}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" name="stok_bibit" class="form-control"
                                                    placeholder="stok bibit">
                                            </div>

                                            <div class="form-group">
                                                <input type="date" name="tgl_produksi" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <input type="text" name="jml_produksi" class="form-control"
                                                    placeholder="jumlah produksi">
                                            </div>

                                            <div class="form-group">
                                                <input type="text" name="hasil_produksi" class="form-control"
                                                    placeholder="hasil produksi">
                                            </div>

                                            <div class="form-group">
                                                <input type="text" name="keterangan" class="form-control"
                                                    placeholder="keterangan">
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- akhir modal tambah -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
@endsection
