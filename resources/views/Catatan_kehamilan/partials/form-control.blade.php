<div class="container" required>
    <div class="form-group row">
        <label for="nama_ibu" class="col-sm-2 col-form-label col-form-label-sm">Nama Anak</label>
        <div class="col-sm-10">
            <select class="form-control form-control-sm" id="nama_ibu" name="nama_ibu">
            <option disabled selected>---Pilih nama ibu---</option>
            @foreach($dataOrtu as $dataO)
                <option {{ $dataO->id == $catatanKehamilan->ortu_id ? 'selected' : '' }} value="{{ $dataO->id }}">{{ $dataO->nama_ibu }}</option>
            @endforeach
            </select>
            @error('nama_ibu')
                <div class="mt-2 text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="form-group row ">
        <label for="hamil_ke" class="col-sm-2 col-form-label col-form-label-sm">Hamil ke</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="hamil_ke" name="hamil_ke" value="{{ old('hamil_ke') ?? $catatanKehamilan->hamil_ke }}">
            @error('hamil_ke')
                <div class="mt-2 text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="hpht" class="col-sm-2 col-form-label col-form-label-sm">Hari Pertama Haid Terakhir (HPHT)</label>
        <div class="col-sm-4">
            <input type="date" class="form-control form-control-sm" id="hpht" name="hpht" value="{{ old('hpht') ?? $catatanKehamilan->hpht }}">
            @error('hpht')
                <div class="mt-2 text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="htp" class="col-sm-2 col-form-label col-form-label-sm">Hari Terakhir Persalinan (HTP)</label>
        <div class="col-sm-4">
            <input type="date" class="form-control form-control-sm" id="htp" name="htp" value="{{ old('htp') ?? $catatanKehamilan->htp }}">
            @error('htp')
                <div class="mt-2 text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="riwayat_penyakit" class="col-sm-2 col-form-label col-form-label-sm">Riwayat Penyakit</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="riwayat_penyakit" name="riwayat_penyakit" value="{{ old('riwayat_penyakit') ?? $catatanKehamilan->riwayat_penyakit }}">
            @error('riwayat_penyakit')
                <div class="mt-2 text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="riwayat_alergi" class="col-sm-2 col-form-label col-form-label-sm">Riwayat Alergi</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="riwayat_alergi" name="riwayat_alergi" value="{{ old('riwayat_alergi') ?? $catatanKehamilan->riwayat_alergi }}">
            @error('riwayat_alergi')
                <div class="mt-2 text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="mb-2">
        <button type="submit" class="btn btn-primary btn-sm">{{ $submit ?? 'Ubah' }}</button>
        <a href="/Catatan-kehamilan" class="btn btn-info btn-sm">Kembali</a>
    </div>
</div>