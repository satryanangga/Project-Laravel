<div class="container" required>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label col-form-label-sm">Nama Ibu</label>
        <div class="col-sm-10">
            <select class="form-control form-control-sm" name="nama_ibu">
            <option disabled selected>---Pilih nama ibu---</option>
            @foreach($dataOrtu as $dO)
                <option {{ $dO->id == $dataAnak->ortu_id ? 'selected' : '' }} value="{{ $dO->id }}">{{ $dO->nama_ibu }}</option>
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
        <label for="nama" class="col-sm-2 col-form-label col-form-label-sm">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="nama" name="nama" value="{{ old('nama') ?? $dataAnak->nama }}">
            @error('nama')
                <div class="mt-2 text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="tl" class="col-sm-2 col-form-label col-form-label-sm">Tanggal Lahir</label>
        <div class="col-sm-4">
            <input type="date" class="form-control form-control-sm" id="tl" name="tgl_lahir" value="{{ old('tgl_lahir') ?? $dataAnak->tgl_lahir }}">
            @error('tgl_lahir')
                <div class="mt-2 text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="jk" class="col-sm-2 col-form-label col-form-label-sm">Jenis Kelamin</label>
        <div class="col-sm-10">
        <select class="form-control form-control-sm" id="jk" name="jk">
            <option disabled selected>---Pilih Jenis kelamin---</option>
            <option  {{ $dataAnak->jk ? 'selected' : '' }}>{{ $dataAnak->jk}}</option>
            <option>Laki-laki</option>
            <option>Perempuan</option>
        </select>
            @error('jk')
                <div class="mt-2 text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        
    </div>
    <div class="form-group row">
        <label for="Ibu" class="col-sm-2 col-form-label col-form-label-sm">Tempat Lahir</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="Ibu" name="tempat_lahir" value="{{ old('tempat_lahir') ?? $dataAnak->tempat_lahir }}">
            @error('tempat_lahir')
                <div class="mt-2 text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="Ibu" class="col-sm-2 col-form-label col-form-label-sm">Berat Lahir</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="Ibu" name="berat_lahir" value="{{ old('berat_lahir') ?? $dataAnak->berat_lahir }}">
            @error('berat_lahir')
                <div class="mt-2 text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="Ibu" class="col-sm-2 col-form-label col-form-label-sm">Panjang Lahir</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="Ibu" name="panjang_lahir" value="{{ old('panjang_lahir') ?? $dataAnak->panjang_lahir }}">
            @error('panjang_lahir')
                <div class="mt-2 text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="Ibu" class="col-sm-2 col-form-label col-form-label-sm">Lingkar Kepala</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="Ibu" name="lingkar_kepala" value="{{ old('lingkar_kepala') ?? $dataAnak->lingkar_kepala }}">
            @error('lingkar_kepala')
                <div class="mt-2 text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="mb-2">
        <button type="submit" class="btn btn-primary btn-sm">{{ $submit ?? 'Ubah' }}</button>
        <a href="/data-anak" class="btn btn-info btn-sm">Kembali</a>
    </div>
</div>