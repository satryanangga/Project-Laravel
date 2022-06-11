@extends('layout_kia.app', ['title' => 'hasil catatan anak'])

@section('content')
@include('.alert')

<!-- Page Heading -->
<!-- <h1 class="h3 mb-2 text-gray-800"></h1> -->
<!-- DataTales Example -->
<div class="card-header py-3">
<div class="page-header float-right">
    <div class="page-title">
        <a href="{{ route('hasil-catatan-anak.print') }}" class="btn btn-danger btn-sm">
            <i class="fas fa-file-archive"></i> Cetak
        </a>
    </div>                
</div>
    <h6 class="m-0 font-weight-bold text-primary">Hasil Catatan Anak</h6>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Anak</th>
                    <th>Tanggal Pemeriksaan</th>
                    <th>Berat Badan (Gram)</th>
                    <th>Panjang Badan (Cm)</th>
                    <th>Indeks Massa Tubuh</th>
                </tr>
            </thead>
            <tbody>
                @forelse($catatanAnaks as $catatanAnak)
                <tr>
                    @if (Auth::user()->hasRole('User'))
                        @if ($catatanAnak->catatanAnak)
                            <td>{{ $loop->iteration }}</td>
                            {{-- @dump($catatanAnak) --}}
                            <td>{{ $catatanAnak->nama }}</td>
                            <td>{{ $catatanAnak->catatanAnak->tgl_pemeriksaan }}</td>
                            <td>{{ $catatanAnak->catatanAnak->berat_badan }}</td>
                            <td>{{ $catatanAnak->catatanAnak->panjang_badan }}</td>
                            <td>{{ $catatanAnak->catatanAnak->indeks_massa_tubuh }}</td>
                        @endif
                    @else
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $catatanAnak->dataAnak->nama }}</td>
                        <td>{{ $catatanAnak->tgl_pemeriksaan }}</td>
                        <td>{{ $catatanAnak->berat_badan }}</td>
                        <td>{{ $catatanAnak->panjang_badan }}</td>
                        <td>{{ $catatanAnak->indeks_massa_tubuh }}</td>
                    @endif
                </tr>
                @empty
                @endforelse
            </tbody>
        </table>

    </div>
</div>
@endsection