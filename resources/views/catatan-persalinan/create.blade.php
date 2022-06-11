@extends('layout_kia.app', ['title' => 'Tambah Catatan Persalinan'])

@section('content')
@include('alert')

<!-- Page Heading -->
<!-- <h1 class="h3 mb-2 text-gray-800">Tambah Data Orang Tua</h1> -->

<!-- DataTales Example -->
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tambah Catatan Persalinan</h6>
</div>
<div class="card-body">
  <form method="post" action="/Catatan-persalinan/create">
    @csrf
    <div class="container" required>
        <div class="form-group row">
            <label for="nama_ibu" class="col-sm-2 col-form-label col-form-label-sm">Nama Ibu</label>
            <div class="col-sm-10">
                <select class="form-control form-control-sm" id="nama_ibu" name="nama_ibu" value="{{ old('nama_ibu') }}">
                <option disabled selected>---Pilih nama ibu---</option>
                @foreach($dataOrtu as $dataOr)
                    <option value="{{ $dataOr->id }}">{{ $dataOr->nama_ibu }}</option>
                @endforeach
                </select>
                @error('nama_ibu')
                    <div class="mt-2 text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="persalinan" class="col-sm-2 col-form-label col-form-label-sm">Tanggal Persalinan</label>
            <div class="col-sm-4">
                <input class="form-control" type="datetime-local" id="persalinan" name="tanggal_persalinan" value="{{ old('tanggal_persalinan') }}">
                @error('tanggal_persalinan')
                    <div class="mt-2 text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="pp" class="col-sm-2 col-form-label col-form-label-sm">Penolong Persalinan</label>
            <div class="col-sm-10">
                <select class="form-control form-control-sm" id="pp" name="penolong_persalinan" value="{{ old('penolong_persalinan') }}">
                    <option disabled selected>---Pilih Penolong persalinan---</option>
                    <option>Bidan</option>
                    <option>Dokter</option>
                    <option>Lainnya</option>
                </select>
                @error('penolong_persalinan')
                    <div class="mt-2 text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="cara_persalinan" class="col-sm-2 col-form-label col-form-label-sm">Cara Persalinan</label>
            <div class="col-sm-10">
                <select class="form-control form-control-sm" id="cara_persalinan" name="cara_persalinan" value="{{ old('cara_persalinan') }}">
                    <option disabled selected>---Pilih cara persalinan---</option>
                    <option>Normal</option>
                    <option>Tindakan</option>
                </select>
                @error('cara_persalinan')
                    <div class="mt-2 text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="keadaan_ibu" class="col-sm-2 col-form-label col-form-label-sm">Kedaan Ibu</label>
            <div class="col-sm-10">
                <select class="form-control form-control-sm" id="keadaan_ibu" name="keadaan_ibu" value="{{ old('keadaan_ibu') }}">
                    <option disabled selected>---Pilih Keadaan ibu---</option>
                    <option>Sakit</option>
                    <option>Sehat</option>
                    <option>Lainnya</option>
                </select>
                @error('keadaan_ibu')
                    <div class="mt-2 text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="kondisi_lahir" class="col-sm-2 col-form-label col-form-label-sm">Kondisi Lahir</label>
            <div class="col-sm-10">
                <select name="kondisi_lahir[]" class="form-control form-control-sm kondisi_lahir" id="kondisi_lahir" multiple>
                    <option >Segera menangis</option> 
                    <option >Menangis beberapa saat</option>
                    <option >Seluruh tubuh kemerahan</option>
                    <option >Tidak Menangis</option>
                    <option >Anggota gerak kebiruan</option>
                    <option >Seluruh tubuh biru</option>
                    <option >Kelainan bawaan</option>
                    <option >Meninggal</option> 
                </select>
                @error('kondisi_lahir')
                    <div class="mt-2 text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="asupan_lahir" class="col-sm-2 col-form-label col-form-label-sm">Asupan Lahir</label>
            <div class="col-sm-10">
                <select name="asupan_lahir[]" class="form-control form-control-sm asupan_lahir" id="asupan_lahir" multiple>
                    <option >IMD dalam 1 jam</option> 
                    <option >Suntikan Vitamin K1</option>
                    <option >Salep mata antibiotika profilaksis</option>
                    <option >Imunisasi Hb0</option>
                </select>
                @error('asupan_lahir')
                    <div class="mt-2 text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        <div class="mb-2">
            <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
            <a href="/Catatan-persalinan" class="btn btn-info btn-sm">Kembali</a>
        </div>
    </div>
  </form>
</div>  
@endsection