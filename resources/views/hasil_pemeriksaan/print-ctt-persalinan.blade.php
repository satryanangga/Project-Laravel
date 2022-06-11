@extends('print.app')
@section('content')
<div class="row">
    <div class="table-responsive">
            <div class="mx-auto mb-4" style="width: 300px;">
                <h3 class="text-center">Laporan Hasil Catatan Persalinan</h3>
            </div>
        <table class="table table-bordered mx-auto" style="width: 400px; font-size: 14px;" width="100%" cellspacing="0">
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
@stop