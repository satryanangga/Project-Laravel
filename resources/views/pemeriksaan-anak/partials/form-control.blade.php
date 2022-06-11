<div class="container" required>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label col-form-label-sm">Nama Anak</label>
        <div class="col-sm-10">
            <select class="form-control form-control-sm" name="nama_anak">
            <option disabled selected>---Pilih nama anak---</option>
            @foreach($dataAnak as $dAnak)
                <option {{ $dAnak->id == $pemeriksaanAnak->anak_id ? 'selected' : '' }} value="{{ $dAnak->id }}">{{ $dAnak->nama }}</option>
            @endforeach
            </select>
            @error('nama_anak')
                <div class="mt-2 text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="tanggal_pemeriksaan" class="col-sm-2 col-form-label col-form-label-sm">Tanggal pemeriksaan</label>
        <div class="col-sm-4">
            <input type="date" class="form-control form-control-sm" id="tanggal_pemeriksaan" name="tanggal_pemeriksaan" value="{{ old('tanggal_pemeriksaan') ?? $pemeriksaanAnak->tanggal_pemeriksaan }}">
            @error('tanggal_pemeriksaan')
                <div class="mt-2 text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="keluhan_anak" class="col-sm-2 col-form-label col-form-label-sm">Keluhan anak</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="keluhan_anak" name="keluhan_anak" value="{{ old('keluhan_anak') ?? $pemeriksaanAnak->keluhan_anak }}">
            @error('keluhan_anak')
                <div class="mt-2 text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="berat_badan" class="col-sm-2 col-form-label col-form-label-sm">Berat badan</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="berat_badan" name="berat_badan" value="{{ old('berat_badan') ?? $pemeriksaanAnak->berat_badan }}">
            @error('berat_badan')
                <div class="mt-2 text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="panjang_lahir" class="col-sm-2 col-form-label col-form-label-sm">Panjang badan</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="panjang_lahir" name="panjang_lahir" value="{{ old('panjang_lahir') ?? $pemeriksaanAnak->panjang_lahir }}">
            @error('panjang_lahir')
                <div class="mt-2 text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="suhu" class="col-sm-2 col-form-label col-form-label-sm">Suhu</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="suhu" name="suhu" value="{{ old('suhu') ?? $pemeriksaanAnak->suhu }}">
            @error('suhu')
                <div class="mt-2 text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="frekuensi_nadi" class="col-sm-2 col-form-label col-form-label-sm">Frekuensi nadi</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="frekuensi_nadi" name="frekuensi_nadi" value="{{ old('frekuensi_nadi') ?? $pemeriksaanAnak->frekuensi_nadi }}">
            @error('frekuensi_nadi')
                <div class="mt-2 text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="frekuensi_detak_jantung" class="col-sm-2 col-form-label col-form-label-sm">Frekuensi detak jantung</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="frekuensi_detak_jantung" name="frekuensi_detak_jantung" value="{{ old('frekuensi_detak_jantung') ?? $pemeriksaanAnak->frekuensi_detak_jantung }}">
            @error('frekuensi_detak_jantung')
                <div class="mt-2 text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="resep_obat" class="col-sm-2 col-form-label col-form-label-sm">Resep obat</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="resep_obat" name="resep_obat" value="{{ old('resep_obat') ?? $pemeriksaanAnak->resep_obat }}">
            @error('resep_obat')
                <div class="mt-2 text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="pesan" class="col-sm-2 col-form-label col-form-label-sm">Pesan</label>
        <div class="col-sm-10">
            <textarea type="text" class="form-control form-control-sm" id="pesan" name="pesan">{{ old('pesan') ?? $pemeriksaanAnak->pesan }}</textarea>
            @error('pesan')
                <div class="mt-2 text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="mb-2">
        <button type="submit" class="btn btn-primary btn-sm">{{ $submit ?? 'Ubah' }}</button>
        <a href="/data-anak/pemeriksaan-anak " class="btn btn-info btn-sm">Kembali</a>
    </div>
</div>