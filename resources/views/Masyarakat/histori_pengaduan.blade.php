@extends('Templates.index')
@section('content')

<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Menu Masyarakat</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Pengaduan</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <h6 class="mb-0 text-uppercase">Histori Pengaduan</h6>
        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Pengaduan</th>
                                <th>Alamat Pengaduan</th>
                                <th>Tanggal Pengaduan</th>
                                <th>Foto</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($historiPengaduan as $histori)
                            <tr>
                                <td>{{ $histori->id }}</td>
                                <td>{{ $histori->masyarakat_id }}</td>
                                <td>{{ $histori->tgl_pengaduan }}</td>
                                <td>{{ $histori->deskripsi }}</td>
                                <td>{{ $histori->lokasi_pengaduan }}</td>
                                <td>{{ $histori->foto_pengaduan }}</td>
                                <td>{{ $histori->status }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection