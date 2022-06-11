@extends('layout_kia.app', ['title' => 'Tambah Pemeriksaan Anak'])

@section('content')
@include('alert')

<!-- Page Heading -->
<!-- <h1 class="h3 mb-2 text-gray-800">Tambah Data Orang Tua</h1> -->

<!-- DataTales Example -->
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Ubah Pemeriksaan Anak</h6>
</div>
<div class="card-body">
    <form method="POST" action="{{ route('pemeriksaan-anak.update', $pemeriksaanAnak->id)}}">
    @csrf
    @method('patch')
    @include('pemeriksaan-anak.partials.form-control', ['submit'])
    </form>
</div>  
@endsection