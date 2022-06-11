@extends('layout_kia.app', ['title' => 'Data Ortu'])

@section('content')
@include('alert')
<!-- Page Heading -->
<!-- <h1 class="h3 mb-2 text-gray-800"></h1> -->
<!-- DataTales Example -->
<div class="card-header py-3">
    <div class="page-header float-right">
        <div class="page-title">
            <a href="{{ route('data-ortu.create') }}" class="btn btn-success btn-sm">
                <i class="fa fa-plus"></i> Tambah Data
            </a>
        </div>                
    </div>
    <h6 class="m-0 font-weight-bold text-primary">Data Orang Tua</h6>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nik</th>
                    <th>Nama Ibu</th>
                    <th>Alamat</th>
                    <th>Tanggal Kunjungan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dataOrtus as $dataOrtu)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $dataOrtu->nik }}</td>
                    <td>{{ $dataOrtu->nama_ibu }}</td>
                    <td>{{ $dataOrtu->alamat }}</td>
                    <td>{{ $dataOrtu->tgl_penerima_kia }}</td>
                    <td>
                        {{-- @if(auth()->user()->is($dataOrtu->user))
                        @endif --}}
                        <div class="flex mt-3">
                            @can('show', $dataOrtu)
                            <a href="{{ route('data-ortu.show', $dataOrtu->id) }}" class="btn btn-info btn-sm">
                                <small>
                                    <i class="fas fa-file-alt"></i>
                                </small>
                            </a>
                            @endcan
                            @can('edit', $dataOrtu)
                            <a href="/data-ortu/{{ $dataOrtu->id }}/edit" class="btn btn-primary btn-sm">
                                <small>
                                    <i class="fas fa-edit"></i>
                                </small>
                            </a>
                            @endcan
                            @can('delete', $dataOrtu)
                            <form action="/data-ortu/{{ $dataOrtu->id }}/delete" method="post">
                                @csrf
                                @method("delete")
                                <button class="btn btn-danger btn-sm">
                                    <small>
                                        <i class="fas fa-trash-alt"></i>
                                    </small>
                                </button>
                            </form>
                            {{-- <a href="/data-ortu/{{ $dataOrtu->id }}/delete" class="btn btn-danger btn-sm" id="btn-hapus"><small><i class="fas fa-trash-alt"></i></small></a> --}}
                            @endcan
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection