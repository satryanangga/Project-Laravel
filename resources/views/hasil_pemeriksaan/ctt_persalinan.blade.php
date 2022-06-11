@extends('layout_kia.app', ['title' => 'hasil catatan persalinan'])

@section('content')
@include('.alert')

<!-- Page Heading -->
<!-- <h1 class="h3 mb-2 text-gray-800"></h1> -->
<!-- DataTales Example -->
<div class="card-header py-3">
<div class="page-header float-right">
    <div class="page-title">
        <a href="{{ route('hasil-catatan-persalinan.print') }}" class="btn btn-danger btn-sm">
            <i class="fas fa-file-archive"></i> Cetak
        </a>
    </div>                
</div>
    <h6 class="m-0 font-weight-bold text-primary">Hasil Catatan Persalinan</h6>
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
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection