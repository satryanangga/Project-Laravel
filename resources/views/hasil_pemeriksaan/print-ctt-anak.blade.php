@extends('print.app')
@section('content')
    <div class="row">
        <div class="table-responsive">

            <div class="mx-auto mb-4" style="width: 300px;">
                <h3 class="text-center">Laporan Hasil Catatan Anak</h3>
            </div>
            <table class="table table-bordered mx-auto" style="width: 700px; font-size: 14px;" width="100%" cellspacing="0">
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
                    {{-- @foreach($catatanAnaks as $catatanAnak)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $catatanAnak->dataAnak->nama }}</td>
                        <td>{{ $catatanAnak->tgl_pemeriksaan }}</td>
                        <td>{{ $catatanAnak->berat_badan }}</td>
                        <td>{{ $catatanAnak->panjang_badan }}</td>
                        <td>{{ $catatanAnak->indeks_massa_tubuh }}</td>
                    </tr>
                    @endforeach --}}
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
                        <p>asv</p>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@stop