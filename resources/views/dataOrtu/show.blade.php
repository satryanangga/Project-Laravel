@extends('layout_kia.app', ['title' => 'Detail Data Ortu'])

@section('content')
@include('alert')
<!-- Page Heading -->
<!-- <h1 class="h3 mb-2 text-gray-800">Detail Data Orang Tua</h1> -->


<!-- DataTales Example -->
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Detail Data Orang Tua</h6>
</div>
<div class="card-body">
    <div class="card p-3 mb-3">
        <div class="container">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label col-form-label-sm">Nik</label>
                <div class="col-sm-10">
                    <input class="form-control form-control-sm" value="{{ $dataOrtu->nik }}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label col-form-label-sm">Tanggal Kunjungan</label>
                <div class="col-sm-10">
                    <input class="form-control form-control-sm" value="{{ $dataOrtu->tgl_penerima_kia }}" readonly>
                </div>
            </div>
        </div>
    </div>
    <div class="card p-3 mb-3">
        <div class="container">
            <div class="d-flex justify-content-center">
                <h4>Identitas Keluarga</h4>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label col-form-label-sm">Nama Ibu</label>
                <div class="col-sm-10">
                    <input class="form-control form-control-sm" value="{{ $dataOrtu->nama_ibu }}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label col-form-label-sm">Tanggal Lahir</label>
                <div class="col-sm-10">
                    <input class="form-control form-control-sm" value="{{ $dataOrtu->tgl_lahir_ibu }}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label col-form-label-sm">Agama</label>
                <div class="col-sm-10">
                    <input class="form-control form-control-sm" value="{{ $dataOrtu->agama_ibu }}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label col-form-label-sm">Pendidikan</label>
                <div class="col-sm-10">
                    <input class="form-control form-control-sm" value="{{ $dataOrtu->pendidikan_ibu }}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label col-form-label-sm">Golongan darah</label>
                <div class="col-sm-10">
                    <input class="form-control form-control-sm" value="{{ $dataOrtu->golongan_darah_ibu }}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label col-form-label-sm">Pekerjaan</label>
                <div class="col-sm-10">
                    <input class="form-control form-control-sm" value="{{ $dataOrtu->pekerjaan_ibu }}" readonly>
                </div>
            </div>
        </div>
    </div>
    <div class="card p-3 mb-3">
        <div class="container">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label col-form-label-sm">Nama Ayah</label>
                <div class="col-sm-10">
                    <input class="form-control form-control-sm" value="{{ $dataOrtu->nama_ayah }}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label col-form-label-sm">Tanggal Lahir</label>
                <div class="col-sm-10">
                    <input class="form-control form-control-sm" value="{{ $dataOrtu->tgl_lahir_ayah }}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label col-form-label-sm">Agama</label>
                <div class="col-sm-10">
                    <input class="form-control form-control-sm" value="{{ $dataOrtu->agama_ayah }}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label col-form-label-sm">Pendidikan</label>
                <div class="col-sm-10">
                    <input class="form-control form-control-sm" value="{{ $dataOrtu->pendidikan_ayah }}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label col-form-label-sm">Golongan darah</label>
                <div class="col-sm-10">
                    <input class="form-control form-control-sm" value="{{ $dataOrtu->golongan_darah_ayah }}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label col-form-label-sm">Pekerjaan</label>
                <div class="col-sm-10">
                    <input class="form-control form-control-sm" value="{{ $dataOrtu->pekerjaan_ayah }}" readonly>
                </div>
            </div>
        </div>
    </div>
    <div class="card p-3">
        <div class="container">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label col-form-label-sm">Alamat</label>
                <div class="col-sm-10">
                    <textarea class="form-control form-control-sm" readonly>{{ $dataOrtu->alamat }}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label col-form-label-sm">Kecamatan</label>
                <div class="col-sm-10">
                    <input class="form-control form-control-sm" value="{{ $dataOrtu->kecamatan }}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label col-form-label-sm">Kabupaten</label>
                <div class="col-sm-10">
                    <input class="form-control form-control-sm" value="{{ $dataOrtu->kabupaten }}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label col-form-label-sm">No Telepon</label>
                <div class="col-sm-10">
                    <input class="form-control form-control-sm" value="{{ $dataOrtu->no_tlp }}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label col-form-label-sm">Email</label>
                <div class="col-sm-10">
                    <input class="form-control form-control-sm" value="{{ $dataOrtu->user->email }}" readonly>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mb-3">
    <a href="{{ route('data-ortu') }}" class="btn btn-info">Kembali</a>
</div>
@endsection