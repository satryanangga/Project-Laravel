@extends('layout_kia.app', ['title' => 'hasil catatan Kehamilan'])

@section('content')
@include('.alert')

<!-- Page Heading -->
<!-- <h1 class="h3 mb-2 text-gray-800"></h1> -->
<!-- DataTales Example -->
<div class="card-header py-3">
<div class="page-header float-right">
    <div class="page-title">
        <a href="{{ route('hasil-catatan-kehamilan.print') }}" class="btn btn-danger btn-sm">
            <i class="fas fa-file-archive"></i> Cetak
        </a>
    </div>                
</div>
    <h6 class="m-0 font-weight-bold text-primary">Hasil Catatan Kehamilan</h6>
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
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection