@extends('print.app')
@section('content')
<div class="row">
    <div class="table-responsive">
            <div class="mx-auto mb-4" style="width: 300px;">
                <h3 class="text-center">Laporan Hasil Catatan Kehamilan</h3>
            </div>
        <table class="table table-bordered mx-auto" style="width: 700px; font-size: 14px;" width="100%" cellspacing="0">
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
@stop