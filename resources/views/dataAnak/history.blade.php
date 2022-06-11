@extends('layout_kia.app', ['title' => 'history pemeriksaan'])

@section('content')
@include('alert')
<!-- DataTales Example -->
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">History Pemeriksaan anak</h6>
</div>
<div class="card-body">
    <div class="table-responsive">
        
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama anak</th>
                    <th>Tanggal pemeriksaan</th>
                    <th>Keluhan anak</th>
                    <th>Berat badan(kg)</th>
                    <th>Panjang badan(cm)</th>
                    <th>Suhu(C)</th>
                    <th>Frekuensi nadi(kali/menit)</th>
                    <th>Frekuensi denyut jantung(kali/menit)</th>
                    <th>Aksi</th>
                    {{-- <th>Resep obat</th>
                    <th>Pesan</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($pemeriksaanAnak as $pA)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pA->dataAnak->nama }}</td>
                    <td>{{ $pA->tanggal_pemeriksaan }}</td>
                    <td>{{ $pA->keluhan_anak }}</td>
                    <td>{{ $pA->berat_badan }}</td>
                    <td>{{ $pA->panjang_lahir }}</td>
                    <td>{{ $pA->suhu }}</td>
                    <td>{{ $pA->frekuensi_nadi }}</td>
                    <td>{{ $pA->frekuensi_detak_jantung }}</td>
                    {{-- <td>{{ $pA->resep_obat }}</td>
                    <td>{{ $pA->pesan }}</td> --}}
                    {{-- <td>
                        <a href="{{ route('data-ortu.show', $dataOrtu->id) }}" class="btn btn-info btn-sm">
                            <small>
                                <i class="fas fa-file-alt"></i>
                            </small>
                        </a>
                    </td> --}}
                    <td>
                        <a id="set_dtl" class="btn btn-info btn-sm show" 
                        data-toggle="modal" data-target="#modal-detail"
                        data-nama="{{$pA->dataAnak->nama}}"
                        data-tanggalpemeriksaan="{{$pA->tanggal_pemeriksaan}}"
                        data-keluhananak="{{$pA->keluhan_anak}}"
                        data-beratbadan="{{$pA->berat_badan}}"
                        data-panjanglahir="{{$pA->panjang_lahir}}"
                        data-suhu="{{$pA->suhu}}"
                        data-frekuensinadi="{{$pA->frekuensi_nadi}}"
                        data-frekuensidetakjantung="{{$pA->frekuensi_detak_jantung}}"
                        data-resepobat="{{$pA->resep_obat}}"
                        data-pesan="{{$pA->pesan}}">
                        <small>
                            <i class="fas fa-file-alt"> Detail</i>
                        </small>
                    </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection

<div class="modal fade" id="modal-detail" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Detail History Pemeriksaan anak</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body table-responsive">
                <table class="table table-bordered no-margin">
                    <tbody>
                        <tr>
                            <th>Nama</th>
                            <td><span id="nama"></span></td>
                        </tr>
                        <tr>
                            <th>Tanggal pemeriksaan</th>
                            <td><span id="tanggal_pemeriksaan"></span></td>
                        </tr>
                        <tr>
                            <th>Keluhan anak</th>
                            <td><span id="keluhan_anak"></span></td>
                        </tr>
                        <tr>
                            <th>Berat badan(kg)</th>
                            <td><span id="berat_badan"></span></td>
                        </tr>
                        <tr>
                            <th>Panjang lahir(cm)</th>
                            <td><span id="panjang_lahir"></span></td>
                        </tr>
                        <tr>
                            <th>Suhu(c)</th>
                            <td><span id="suhu"></span></td>
                        </tr>
                        <tr>
                            <th>Frekuensi nadi(kali/menit)</th>
                            <td><span id="frekuensi_nadi"></span></td>
                        </tr>
                        <tr>
                            <th>Frekuensi detak jantung(kali/menit)</th>
                            <td><span id="frekuensi_detak_jantung"></span></td>
                        </tr>
                        <tr>
                            <th>Resep obat</th>
                            <td><span id="resep_obat"></span></td>
                        </tr>
                        <tr>
                            <th>Pesan</th>
                            <td><span id="pesan"></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


