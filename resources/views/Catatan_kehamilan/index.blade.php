@extends('layout_kia.app', ['title' => 'catatan kehamilan'])

@section('content')
@include('.alert')

<!-- Page Heading -->
<!-- <h1 class="h3 mb-2 text-gray-800"></h1> -->
<!-- DataTales Example -->
<div class="card-header py-3">
<div class="page-header float-right">
    <div class="page-title">
        @can('add_catatan_kehamilan')
        <a href="/Catatan-kehamilan/create" class="btn btn-success btn-sm">
            <i class="fa fa-plus"></i> Tambah Data
        </a>
        @endcan
    </div>                
</div>
    <h6 class="m-0 font-weight-bold text-primary">Catatan Kehamilan</h6>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama ibu</th>
                    <th>Hamil Ke</th>
                    <th>Hari Pertama Haid Terakhir (HPHT)</th>
                    <th>Hari Terakhir Persalinan (HTP)</th>
                    <th>Riwayat Penyakit</th>
                    <th>Riwayat Alergi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($catatanKehamilans as $catatanKehamilan)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $catatanKehamilan->dataOrtu->nama_ibu}}</td>
                    <td>{{ $catatanKehamilan->hamil_ke }}</td>
                    <td>{{ $catatanKehamilan->hpht }}</td>
                    <td>{{ $catatanKehamilan->htp }}</td>
                    <td>{{ $catatanKehamilan->riwayat_penyakit }}</td>
                    <td>{{ $catatanKehamilan->riwayat_alergi }}</td>
                    <td>
                        <div class="flex mt-3">
                            @can('edit_catatan_kehamilan')
                            <a href="/Catatan-kehamilan/{{ $catatanKehamilan->id }}/edit" class="btn btn-primary btn-sm">
                                <small>
                                    <i class="fas fa-edit"></i>
                                </small>
                            </a>
                            @endcan
                            @can('delete_catatan_kehamilan')
                            <form action="/Catatan-kehamilan/{{ $catatanKehamilan->id }}/delete" method="post">
                                @csrf
                                @method("delete")
                                <button class="btn btn-danger btn-sm">
                                    <small><i class="fas fa-trash-alt"></i></small>
                                </button>
                            </form> 
                            @endcan
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection