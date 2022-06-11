<div class="card p-3 mb-3">
    <div class="container">
        <div class="form-group row">
            <label for="nik" class="col-sm-2 col-form-label col-form-label-sm">Nik</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm" id="nik" name="nik" value="{{ old('nik') ?? $dataOrtu->nik }}">
                @error('nik')
                    <div class="mt-2 text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="tgl_kunjungan" class="col-sm-2 col-form-label col-form-label-sm">Tanggal Kunjungan</label>
            <div class="col-sm-4">
                <input type="date" class="form-control form-control-sm" id="tgl_kunjungan" name="tgl_penerima_kia" value="{{ old('tgl_penerima_kia') ?? $dataOrtu->tgl_penerima_kia }}">
                @error('tgl_penerima_kia')
                    <div class="mt-2 text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
</div>
<div class="card p-3 mb-3">
    <div class="container">
        <div>
            <h6>Identitas Ibu :</h6>
        </div>
        <hr>
        <div class="form-group row">
            <label for="Ibu" class="col-sm-2 col-form-label col-form-label-sm">Nama Ibu</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm" id="Ibu" name="nama_ibu" value="{{ old('nama_ibu') ?? $dataOrtu->nama_ibu }}">
                @error('nama_ibu')
                    <div class="mt-2 text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="lahir_ibu" class="col-sm-2 col-form-label col-form-label-sm">Tanggal Lahir</label>
            <div class="col-sm-4">
                <input type="date" class="form-control form-control-sm" id="lahir_ibu" name="tgl_lahir_ibu" value="{{ old('tgl_lahir_ibu') ?? $dataOrtu->tgl_lahir_ibu }}">
                @error('tgl_lahir_ibu')
                    <div class="mt-2 text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label col-form-label-sm">Agama</label>
            <div class="col-sm-10">
            <select class="form-control form-control-sm" name="agama_ibu">
                <option selected disabled>---Pilih agama---</option>
                <option  {{ $dataOrtu->agama_ibu ? 'selected' : '' }}>{{ $dataOrtu->agama_ibu}}</option>
                <option>Hindu</option>
                <option>Islam</option>
                <option>Protestan</option>
                <option>Katolik</option>
                <option>Budha</option>
                <option>Konghucu</option>
            </select>
            @error('agama_ibu')
                <div class="mt-2 text-danger">
                    {{ $message }}
                </div>
            @enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label col-form-label-sm">Pendidikan</label>
            <div class="col-sm-10">
                <select class="form-control form-control-sm" name="pendidikan_ibu">
                    <option selected disabled>---Pilih pendidikan---</option>
                    <option  {{ $dataOrtu->pendidikan_ibu ? 'selected' : '' }}>{{ $dataOrtu->pendidikan_ibu}}</option>
                    <option>tidak_sekolah</option>
                    <option>Sd</option>
                    <option>Smp</option>
                    <option>Smu</option>
                    <option>Akademik</option>
                    <option>Perguruan_tinggi</option>
                </select>
                @error('pendidikan_ibu')
                    <div class="mt-2 text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label col-form-label-sm">Golongan Darah</label>
            <div class="col-sm-10">
                <select class="form-control form-control-sm" name="golongan_darah_ibu">
                    <option selected disabled>---Pilih Golongan darah---</option>
                    <option  {{ $dataOrtu->golongan_darah_ibu ? 'selected' : '' }}>{{ $dataOrtu->golongan_darah_ibu}}</option>
                    <option>a</option>
                    <option>ab</option>
                    <option>b</option>
                    <option>o</option>
                </select>
                @error('golongan_darah_ibu')
                    <div class="mt-2 text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="Pek1" class="col-sm-2 col-form-label col-form-label-sm">Pekerjaan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm" id="Pek1" name="pekerjaan_ibu" value="{{ old('pekerjaan_ibu') ?? $dataOrtu->pekerjaan_ibu }}">
                @error('pekerjaan_ibu')
                    <div class="mt-2 text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
</div>
<div class="card p-3 mb-3">
    <div class="container">
        <div>
            <h6>Identitas Ayah :</h6>
        </div>
        <hr>
        <div class="form-group row">
            <label for="Ayah" class="col-sm-2 col-form-label col-form-label-sm">Nama Ayah</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm" id="Ayah" name="nama_ayah" value="{{ old('nama_ayah') ?? $dataOrtu->nama_ayah }}">
                @error('nama_ayah')
                    <div class="mt-2 text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="lahir_Ayah" class="col-sm-2 col-form-label col-form-label-sm">Tanggal Lahir</label>
            <div class="col-sm-4">
                <input type="date" class="form-control form-control-sm" id="lahir_Ayah" name="tgl_lahir_ayah" value="{{ old('tgl_lahir_ayah') ?? $dataOrtu->tgl_lahir_ayah }}">
                @error('tgl_lahir_ayah')
                    <div class="mt-2 text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label col-form-label-sm">Agama</label>
            <div class="col-sm-10">
            <select class="form-control form-control-sm" name="agama_ayah">
                <option selected disabled>---Pilih Agama---</option>
                <option  {{ $dataOrtu->agama_ayah ? 'selected' : '' }}>{{ $dataOrtu->agama_ayah}}</option>
                <option>Hindu</option>
                <option>Islam</option>
                <option>Protestan</option>
                <option>Katolik</option>
                <option>Budha</option>
                <option>Konghucu</option>
            </select>
            @error('agama_ayah')
                <div class="mt-2 text-danger">
                    {{ $message }}
                </div>
            @enderror
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label col-form-label-sm">Pendidikan</label>
            <div class="col-sm-10">
                <select class="form-control form-control-sm" name="pendidikan_ayah">
                    <option selected disabled>---Pilih pendidikan---</option>
                    <option  {{ $dataOrtu->pendidikan_ayah ? 'selected' : '' }}>{{ $dataOrtu->pendidikan_ayah}}</option>
                    <option>tidak_sekolah</option>
                    <option>Sd</option>
                    <option>Smp</option>
                    <option>Smu</option>
                    <option>Akademik</option>
                    <option>Perguruan_tinggi</option>
                </select>
                @error('pendidikan_ayah')
                    <div class="mt-2 text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label col-form-label-sm">Golongan Darah</label>
            <div class="col-sm-10">
                <select class="form-control form-control-sm" name="golongan_darah_ayah">
                    <option selected disabled>---Pilih Golongan darah---</option>
                    <option  {{ $dataOrtu->golongan_darah_ayah ? 'selected' : '' }}>{{ $dataOrtu->golongan_darah_ayah}}</option>
                    <option>a</option>
                    <option>ab</option>
                    <option>b</option>
                    <option>o</option>
                </select>
                @error('golongan_darah_ayah')
                    <div class="mt-2 text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="Pek2" class="col-sm-2 col-form-label col-form-label-sm">Pekerjaan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm" id="Pek2" name="pekerjaan_ayah" value="{{ old('pekerjaan_ayah') ?? $dataOrtu->pekerjaan_ayah }}">
                @error('pekerjaan_ayah')
                    <div class="mt-2 text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="Pek3" class="col-sm-2 col-form-label col-form-label-sm">Penghasilan</label>
            <div class="col-sm-10">
                <input type="number" class="form-control form-control-sm" id="Pek3" name="penghasilan_ayah" value="{{ old('penghasilan_ayah') ?? $dataOrtu->penghasilan_ayah }}">
                @error('penghasilan_ayah')
                    <div class="mt-2 text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
</div>
<div class="card p-3 mb-3">
    <div class="container">
        <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label col-form-label-sm">Alamat</label>
            <div class="col-sm-10">
                <textarea type="text" class="form-control form-control-sm" id="alamat" name="alamat">{{ old('alamat') ?? $dataOrtu->alamat }}</textarea>
                @error('alamat')
                    <div class="mt-2 text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="kec" class="col-sm-2 col-form-label col-form-label-sm">Kecamatan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm" id="kec" name="kecamatan" value="{{ old('kecamatan') ?? $dataOrtu->kecamatan }}">
                @error('kecamatan')
                    <div class="mt-2 text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="kab" class="col-sm-2 col-form-label col-form-label-sm">Kabupaten</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm" id="kab" name="kabupaten" value="{{ old('kabupaten') ?? $dataOrtu->kabupaten }}">
                @error('kabupaten')
                    <div class="mt-2 text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="twl" class="col-sm-2 col-form-label col-form-label-sm">No Telepon</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm" id="twl" name="no_tlp" value="{{ old('no_tlp') ?? $dataOrtu->no_tlp }}">
                @error('no_tlp')
                    <div class="mt-2 text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
</div>
<div class="container mb-2">
    <button type="submit" class="btn btn-primary btn-sm">{{ $submit ?? 'Ubah' }}</button>
    <a href="{{ route('data-ortu') }}" class="btn btn-info btn-sm">Kembali</a>
</div>