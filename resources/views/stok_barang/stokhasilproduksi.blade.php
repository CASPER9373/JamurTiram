@extends('template_back.layout')
@section('title', 'stok hasil produksi')
@section('content')

    <!-- /breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Tabel</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> stok hasil produksi</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- /breadcrumb -->

    <!-- row opened -->
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0 mt-2">Stok hasil produksi</h4>
                        <a href="#" class="btn btn-success">Tambah Data</a>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-md-nowrap" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-1p border-bottom-0">Id</th>
                                    <th class="wd-20p border-bottom-0">stok hasil produksi</th>
                                    <th class="wd-20p border-bottom-0">jumlah produksi bersih</th>
                                    <th class="wd-20p border-bottom-0">jumlah produksi kotor</th>
                                    <th class="wd-25p border-bottom-0">keterangan</th>
                                    <th class="wd-25p border-bottom-0">Aksi</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
	</div>
        <!-- /row -->
    		@endsection
