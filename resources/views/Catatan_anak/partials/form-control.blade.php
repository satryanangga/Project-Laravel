<div class="container" required>
    <div class="form-group row">
        <label for="nama_anak" class="col-sm-2 col-form-label col-form-label-sm">Nama Anak</label>
        <div class="col-sm-10">
            <select class="form-control form-control-sm" id="nama_anak" name="nama_anak">
            <option disabled selected>---Pilih nama anak---</option>
            @foreach($dataAnak as $data)
                <option {{ $data->id == $catatanAnak->anak_id ? 'selected' : '' }} value="{{ $data->id }}">{{ $data->nama }}</option>
            @endforeach
            </select>
            @error('nama_anak')
                <div class="mt-2 text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="form-group row ">
        <label for="tgl_pemeriksaan" class="col-sm-2 col-form-label col-form-label-sm">Tanggal Pemeriksaan</label>
        <div class="col-sm-4">
            <input type="date" class="form-control form-control-sm" id="tgl_pemeriksaan" name="tgl_pemeriksaan" value="{{ old('tgl_pemeriksaan') ?? $catatanAnak->tgl_pemeriksaan }}">
            @error('tgl_pemeriksaan')
                <div class="mt-2 text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="berat_badan" class="col-sm-2 col-form-label col-form-label-sm">Berat Badan</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="berat_badan" name="berat_badan" value="{{ old('berat_badan') ?? $catatanAnak->berat_badan }}">
            @error('berat_badan')
                <div class="mt-2 text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="panjang_badan" class="col-sm-2 col-form-label col-form-label-sm">Panjang Badan</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="panjang_badan" name="panjang_badan" value="{{ old('panjang_badan') ?? $catatanAnak->panjang_badan }}">
            @error('panjang_badan')
                <div class="mt-2 text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="indeks_massa_tubuh" class="col-sm-2 col-form-label col-form-label-sm">Indeks Massa Tubuh</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="indeks_massa_tubuh" name="indeks_massa_tubuh" value="{{ old('indeks_massa_tubuh') ?? $catatanAnak->indeks_massa_tubuh }}">
            @error('indeks_massa_tubuh')
                <div class="mt-2 text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="mb-2">
        <button type="submit" class="btn btn-primary btn-sm">{{ $submit ?? 'Ubah' }}</button>
        <a href="/catatan-anak" class="btn btn-info btn-sm">Kembali</a>
    </div>
</div>