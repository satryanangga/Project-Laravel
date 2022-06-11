@extends('layout_kia.app', ['title' => 'data anak'])

@section('content')
@include('alert')
<!-- Page Heading -->
<!-- <h1 class="h3 mb-2 text-gray-800"></h1> -->
<!-- DataTales Example -->
<div class="card-header py-3">
<div class="page-header float-right">
    <div class="page-title">
        @can('add_data_anak')
        <a href="{{ route('pemeriksaan-anak.index') }}" class="btn btn-danger btn-sm">
            Pemeriksaan Anak
        </a>
        <a href="{{ route('data-anak.create') }}" class="btn btn-success btn-sm">
            <i class="fa fa-plus"></i> Tambah Data
        </a>
        @endcan
    </div>                
</div>
    <h6 class="m-0 font-weight-bold text-primary">Data Anak</h6>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nama Ibu</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Berat Lahir(Gram)</th>
                    <th>Panjang Lahir(Cm)</th>
                    <th>Lingkar kepala(Cm)</th>
                    @can('edit_data_anak')
                    <th>Aksi</th>
                    @endcan
                </tr>
            </thead>
            <tbody>
                @foreach($dataAnaks as $dataAnak)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><a href="{{ Route('data-anak.history-pemeriksaan', $dataAnak->id) }}">{{ $dataAnak->nama }}</a></td>
                    <td>{{ $dataAnak->dataOrtu->nama_ibu }}</td>
                    <td>{{ $dataAnak->jk }}</td>
                    <td>{{ $dataAnak->tempat_lahir }}</td>
                    <td>{{ $dataAnak->tgl_lahir }}</td>
                    <td>{{ $dataAnak->berat_lahir }}</td>
                    <td>{{ $dataAnak->panjang_lahir }}</td>
                    <td>{{ $dataAnak->lingkar_kepala }}</td>
                    @can('edit_data_anak')
                    <td>
                        <div class="flex mt-3">
                            @can('edit_data_anak')
                            <a href="/data-anak/{{ $dataAnak->id }}/edit" class="btn btn-primary btn-sm">
                                <small>
                                    <i class="fas fa-edit"></i>
                                </small>
                            </a>
                            @endcan
                            @can('delete_data_anak')
                            <form action="/data-anak/{{ $dataAnak->id }}/delete" method="post" onsubmit="return confirm('Apakah anda yakin ingin menghapusnya?')">
                                @csrf
                                @method("delete")
                                <button class="btn btn-danger btn-sm">
                                    <small><i class="fas fa-trash-alt"></i></small>
                                </button>
                            </form>
                            @endcan
                        </div>
                    </td>
                    @endcan
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection