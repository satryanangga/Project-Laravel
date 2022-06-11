@extends('layout_kia.app', ['title' => 'Ubah Catatan Persalinan'])

@section('content')
@include('alert')

<!-- Page Heading -->
<!-- <h1 class="h3 mb-2 text-gray-800">Tambah Data Orang Tua</h1> -->

<!-- DataTales Example -->
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Ubah Catatan Persalinan</h6>
</div>
<div class="card-body">
  <form method="post" action="/Catatan-persalinan/{{ $catatanPersalinan->id }}/edit">
    @method('patch')
    @csrf
    <div class="container" required>
        <div class="form-group row">
            <label for="nama_ibu" class="col-sm-2 col-form-label col-form-label-sm">Nama Ibu</label>
            <div class="col-sm-10">
                <select class="form-control form-control-sm" id="nama_ibu" name="nama_ibu">
                <option disabled selected>---Pilih nama ibu---</option>
                @foreach($dataOrtus as $item)
                    <option {{ $item->id == $catatanPersalinan->ortu_id ? 'selected' : '' }} value="{{ $item->id }}">{{ $item->nama_ibu }}</option>
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
                <input class="form-control" type="datetime-local" id="persalinan" name="tanggal_persalinan" value="{{ $catatanPersalinan->tanggal_persalinan }}">
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
                <select class="form-control form-control-sm" id="pp" name="penolong_persalinan">
                <option disabled selected>---Pilih penolong persalinan---</option>
                    <option  {{ $catatanPersalinan->penolong_persalinan ? 'selected' : '' }}>{{ $catatanPersalinan->penolong_persalinan}}</option>
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
                <select class="form-control form-control-sm" id="cara_persalinan" name="cara_persalinan">
                    <option disabled selected>---Pilih cara persalinan---</option>
                    <option  {{ $catatanPersalinan->cara_persalinan ? 'selected' : '' }}>{{ $catatanPersalinan->cara_persalinan}}</option>
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
                <select class="form-control form-control-sm" id="keadaan_ibu" name="keadaan_ibu">
                    <option disabled selected>---Pilih Keadaan ibu---</option>
                    <option  {{ $catatanPersalinan->keadaan_ibu ? 'selected' : '' }}>{{ $catatanPersalinan->keadaan_ibu}}</option>
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
                    {{-- <option  {{ $catatanPersalinan->kondisi_lahir ? 'selected' : '' }}>{{ $catatanPersalinan->kondisi_lahir}}</option> --}}
                    <option {{str_contains($kondisi_lahir, 'segera-menangis') ? 'selected' : ''}}>Segera menangis</option> 
                    <option {{str_contains($kondisi_lahir, 'menangis-beberapa-saat') ? 'selected' : ''}}>Menangis beberapa saat</option>
                    <option {{str_contains($kondisi_lahir, 'seluruh-tubuh-kemerahan') ? 'selected' : ''}}>Seluruh tubuh kemerahan</option>
                    <option {{str_contains($kondisi_lahir, 'tidak-menangis') ? 'selected' : ''}}>Tidak Menangis</option>
                    <option {{str_contains($kondisi_lahir, 'anggota-gerak-kebiruan') ? 'selected' : ''}}>Anggota gerak kebiruan</option>
                    <option {{str_contains($kondisi_lahir, 'seluruh-tubuh-biru') ? 'selected' : ''}}>Seluruh tubuh biru</option>
                    <option {{str_contains($kondisi_lahir, 'kelainan-bawaan') ? 'selected' : ''}}>Kelainan bawaan</option>
                    <option {{str_contains($kondisi_lahir, 'meninggal') ? 'selected' : ''}}>Meninggal</option> 
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
                    <option {{str_contains($asupan_lahir, 'imd-dalam-1-jam') ? 'selected' : ''}}>IMD dalam 1 jam</option> 
                    <option {{str_contains($asupan_lahir, 'suntikan-vitamin-k1') ? 'selected' : ''}}>Suntikan Vitamin K1</option>
                    <option {{str_contains($asupan_lahir, 'salep-mata-antibiotika-profilaksis') ? 'selected' : ''}}>Salep mata antibiotika profilaksis</option>
                    <option {{str_contains($asupan_lahir, 'imunisasi-hb0') ? 'selected' : ''}}>Imunisasi Hb0</option>
                </select>
                @error('asupan_lahir')
                    <div class="mt-2 text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        <div class="mb-2">
            <button type="submit" class="btn btn-primary btn-sm">Ubah</button>
            <a href="/Catatan-persalinan" class="btn btn-info btn-sm">Kembali</a>
        </div>
    </div>
  </form>
</div>  
@endsection