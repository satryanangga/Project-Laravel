@extends('layout_kia.app')

@section('title', 'dashboard')

@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Kunjungan Pasien</h1>

                    
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <a href="kunjungans/create" class="btn btn-success btn-sm">
                                    <i class="fa fa-plus"></i> Tambah Data
                                </a>
                                
                            </div>                
                        </div>
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Kunjungan</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>email</th>
                                            <th>role</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    @foreach( $users as $user)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td></td>
                                            <td>
                                                <a href="" class="badge badge-success">Ubah</a>
                                                <form action="" method="post" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                    <button type="submit" class="badge badge-danger">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
@endsection