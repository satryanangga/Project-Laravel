@extends('layout_kia.app', ['title' => 'data anak'])

@section('content')
@include('alert')
{{-- <div id="flash" data-flash="{{ session('success') }}"></div> --}}
<!-- Page Heading -->
<!-- <h1 class="h3 mb-2 text-gray-800"></h1> -->
<!-- DataTales Example -->
<div class="card-header py-3">
<div class="page-header float-right">
    <div class="page-title">
        @can('add_data_anak')
        <a href="{{ route('pemeriksaan-anak.create') }}" class="btn btn-success btn-sm">
            <i class="fa fa-plus"></i> Tambah Data
        </a>
        @endcan
    </div>                
</div>
    <h6 class="m-0 font-weight-bold text-primary">Pemeriksaan Anak</h6>
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
                    {{-- <th>Resep obat</th> --}}
                    {{-- <th>Pesan</th> --}}
                    @can('edit_data_anak')
                    <th>Aksi</th>
                    @endcan
                </tr>
            </thead>
            <tbody>
                @foreach ($pemeriksaanAnak as $pAnak)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pAnak->dataAnak->nama }}</td>
                    <td>{{ $pAnak->tanggal_pemeriksaan }}</td>
                    <td>{{ $pAnak->keluhan_anak }}</td>
                    <td>{{ $pAnak->berat_badan }}</td>
                    <td>{{ $pAnak->panjang_lahir }}</td>
                    <td>{{ $pAnak->suhu }}</td>
                    <td>{{ $pAnak->frekuensi_nadi }}</td>
                    <td>{{ $pAnak->frekuensi_detak_jantung }}</td>
                    {{-- <td>{{ $pAnak->resep_obat }}</td> --}}
                    {{-- <td>{{ $pAnak->pesan }}</td> --}}
                    <td>
                        <div class="flex mt-3">
                            @can('edit_data_anak')
                            {{-- <a href="#" value="{{ action('PemeriksaanAnakController@show',['id'=>$pAnak->id]) }}" class="btn btn-xs btn-info modalMd" title="Show Data" data-toggle="modal" data-target="#modalMd"><span class="glyphicon glyphicon-eye-open"></span>
                                <small>
                                    <i class="fas fa-file-alt"></i>
                                </small>
                            </a> --}}
                            <a id="set_dtl" class="btn btn-info btn-sm show" 
                                data-toggle="modal" data-target="#modal-detail"
                                data-nama="{{$pAnak->dataAnak->nama}}"
                                data-tanggalpemeriksaan="{{$pAnak->tanggal_pemeriksaan}}"
                                data-keluhananak="{{$pAnak->keluhan_anak}}"
                                data-beratbadan="{{$pAnak->berat_badan}}"
                                data-panjanglahir="{{$pAnak->panjang_lahir}}"
                                data-suhu="{{$pAnak->suhu}}"
                                data-frekuensinadi="{{$pAnak->frekuensi_nadi}}"
                                data-frekuensidetakjantung="{{$pAnak->frekuensi_detak_jantung}}"
                                data-resepobat="{{$pAnak->resep_obat}}"
                                data-pesan="{{$pAnak->pesan}}">
                                <small>
                                    <i class="fas fa-file-alt"></i>
                                </small>
                            </a>
                            {{-- <button class="btn btn-info btn-sm edit"
                                data-toggle="modal" data-target="#modal-detail"
                                data-nama="{{$pAnak->dataAnak->nama}}"
                                data-tanggalpemeriksaan="{{$pAnak->tanggal_pemeriksaan}}"
                                data-keluhananak="{{$pAnak->keluhan_anak}}"
                                data-beratbadan="{{$pAnak->berat_badan}}"
                                data-panjanglahir="{{$pAnak->panjang_lahir}}"
                                data-suhu="{{$pAnak->suhu}}"
                                data-frekuensinadi="{{$pAnak->frekuensi_nadi}}"
                                data-frekuensidetakjantung="{{$pAnak->frekuensi_detak_jantung}}"
                                data-resepobat="{{$pAnak->resep_obat}}"
                                data-pesan="{{$pAnak->pesan}}">
                                <small>
                                    <i class="fas fa-file-alt"></i>
                                </small>
                            </button> --}}
                            <a href="{{ route('pemeriksaan-anak.edit', $pAnak->id) }}" class="btn btn-primary btn-sm">
                                <small>
                                    <i class="fas fa-edit"></i>
                                </small>
                            </a>
                            @endcan
                            @can('delete_data_anak')
                            <form action="{{ route('pemeriksaan-anak.destroy', $pAnak->id) }}" method="post">
                                @csrf
                                @method("delete")
                                <button class="btn btn-danger btn-sm" >
                                    <small><i class="fas fa-trash-alt"></i></small>
                                </button>
                            </form>
                            {{-- <a href="/data-anak/pemeriksaan-anak/{{ $pAnak->id }}" class="btn btn-danger btn-sm" id="btn-hapus"><small><i class="fas fa-trash-alt"></i></small></a> --}}
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
{{-- <div class="modal fade" id="modalMd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalMdTitle"></h4>
            </div>
            <div class="modal-body">
                <div class="modalError"></div>
                <div id="modalMdContent"></div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).on('ajaxComplete ready', function () {
        $('.modalMd').off('click').on('click', function () {
            $('#modalMdContent').load($(this).attr('value'));
            $('#modalMdTitle').html($(this).attr('title'));
        });
    });
</script> --}}
<div class="modal fade" id="modal-detail" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Detail Pemeriksaan anak</h4>
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

{{-- <script>
    $('#set_dtl').ready(function){
        $('#modal_detail').click(function(){
            var nama = $(this).attr('data-nama');
            var tanggalpemeriksaan = $(this).attr('data-tanggalpemeriksaan');
            var keluhananak = $(this).attr('data-keluhananak');
            var beratbadan = $(this).attr('data-beratbadan');
            var panjanglahir = $(this).attr('data-panjanglahir');
            var suhu = $(this).attr('data-suhu');
            var frekuensinadi = $(this).attr('data-frekuensinadi');
            var frekuensidetakjantung = $(this).attr('data-frekuensidetakjantung');
            var resepobat = $(this).attr('data-resepobat');
            var pesan = $(this).attr('data-pesan');
            $('#nama').text(nama);
            $('#tanggal_pemeriksaan').text(tanggalpemeriksaan);
            $('#keluhan_anak').text(keluhananak);
            $('#berat_badan').text(beratbadan);
            $('#panjang_lahir').text(panjanglahir);
            $('#suhu').text(suhu);
            $('#frekuensi_nadi').text(frekuensinadi);
            $('#frekuensi_detak_jantung').text(frekuensidetakjantung);
            $('#resep_obat').text(resepobat);
            $('#pesan').text(pesan);
        })
    })
</script> --}}




