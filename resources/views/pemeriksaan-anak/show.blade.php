@extends('layout_kia.app', ['title' => 'Tambah Pemeriksaan Anak'])

@section('content')
<div class="row">
    <div class="col-lg-12">
        <table class="table table-bordered table-hover">
            <tbody>
                <tr>
                    <th>nama</th>
                    <td>{{ $pAnak->dataAnak->nama }}</td>
                </tr>
                <tr>
                    <th>tanggal pemeriksaan</th>
                    <td>{{ $pAnak->tanggal_pemeriksaan }}</td>
                </tr>
                <tr>
                    <th>keluhan anak</th>
                    <td>{{ $pAnak->keluhan_anak }}</td>
                </tr>
                <tr>
                    <th>berat badan</th>
                    <td>{{ $pAnak->berat_badan }}</td>
                </tr>
                <tr>
                    <th>panjang lahir</th>
                    <td>{{ $pAnak->panjang_lahir }}</td>
                </tr>
                <tr>
                    <th>suhu</th>
                    <td>{{ $pAnak->suhu }}</td>
                </tr>
                <tr>
                    <th>frekuensi nadi</th>
                    <td>{{ $pAnak->frekuensi_nadi }}</td>
                </tr>
                <tr>
                    <th>frekuensi detak jantung</th>
                    <td>{{ $pAnak->frekuensi_detak_jantung }}</td>
                </tr>
                <tr>
                    <th>resep obat</th>
                    <td><span id="resep_obat"></span></td>
                </tr>
                <tr>
                    <th>pesan</th>
                    <td><span id="pesan"></span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection