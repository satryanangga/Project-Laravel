@extends('layout_kia.app', ['title' => 'catatan Persalinan'])

@section('content')
@include('.alert')

<!-- Page Heading -->
<!-- <h1 class="h3 mb-2 text-gray-800"></h1> -->
<!-- DataTales Example -->
<div class="card-header py-3">
<div class="page-header float-right">
    <div class="page-title">
        @can('add_catatan_persalinan')
        <a href="{{ url('/Catatan-persalinan/create') }}" class="btn btn-success btn-sm">
            <i class="fa fa-plus"></i> Tambah Data
        </a>
        @endcan
    </div>                
</div>
    <h6 class="m-0 font-weight-bold text-primary">Catatan Persalinan</h6>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Ibu</th>
                    <th>Tanggal Persalinan</th>
                    <th>Penolong Persalinan</th>
                    <th>Cara Persalinan</th>
                    <th>Keadaan Ibu</th>
                    <th>Kondisi lahir</th>
                    <th>Asupan Lahir</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($catatanPersalinans as $catatanPersalinan)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $catatanPersalinan->dataOrtu->nama_ibu}}</td>
                    <td>{{ $catatanPersalinan->tanggal_persalinan }}</td>
                    <td>{{ $catatanPersalinan->penolong_persalinan }}</td>
                    <td>{{ $catatanPersalinan->cara_persalinan }}</td>
                    <td>{{ $catatanPersalinan->keadaan_ibu }}</td>
                    <td>{{ $catatanPersalinan->kondisi_lahir }}</td>
                    <td>{{ $catatanPersalinan->asupan_lahir }}</td>
                    <td>
                        <div class="flex mt-3">
                            @can('edit_catatan_persalinan')
                            <a href="/Catatan-persalinan/{{$catatanPersalinan->id}}/edit" class="btn btn-primary btn-sm">
                                <small>
                                    <i class="fas fa-edit"></i>
                                </small>
                            </a>
                            @endcan
                            @can('delete_catatan_persalinan')
                            <form action="/Catatan-persalinan/{{$catatanPersalinan->id}}/delete" method="post" id="btn1-hapus">
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