@extends('layout_kia.app', ['title' => 'catatan anak'])

@section('content')
@include('.alert')

<!-- Page Heading -->
<!-- <h1 class="h3 mb-2 text-gray-800"></h1> -->
<!-- DataTales Example -->
<div class="card-header py-3">
<div class="page-header float-right">
    <div class="page-title">
        @can('add_catatan_anak')
        <a href="{{ url('/catatan-anak/create') }}" class="btn btn-success btn-sm">
            <i class="fa fa-plus"></i> Tambah Data
        </a>
        @endcan
    </div>                
</div>
    <h6 class="m-0 font-weight-bold text-primary">Catatan Anak</h6>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Anak</th>
                    <th>Tanggal Pemeriksaan</th>
                    <th>Berat Badan (Gram)</th>
                    <th>Panjang Badan (Cm)</th>
                    <th>Indeks Massa Tubuh</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($catatanAnaks as $catatanAnak)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $catatanAnak->dataAnak->nama}}</td>
                    <td>{{ $catatanAnak->tgl_pemeriksaan }}</td>
                    <td>{{ $catatanAnak->berat_badan }}</td>
                    <td>{{ $catatanAnak->panjang_badan }}</td>
                    <td>{{ $catatanAnak->indeks_massa_tubuh }}</td>
                    <td>
                        <div class="flex mt-3">
                            @can('edit_catatan_anak')
                            <a href="/catatan-anak/{{ $catatanAnak->id }}/edit" class="btn btn-primary btn-sm">
                                <small>
                                    <i class="fas fa-edit"></i>
                                </small>
                            </a>
                            @endcan
                            @can('delete_catatan_anak')
                            <form action="/catatan-anak/{{ $catatanAnak->id }}/delete" method="post">
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