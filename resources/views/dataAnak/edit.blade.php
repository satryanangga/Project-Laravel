@extends('layout_kia.app', ['title' => 'Ubah Data Anak'])

@section('content')
@include('alert')
<!-- Page Heading -->
<!-- <h1 class="h3 mb-2 text-gray-800">Tambah Data Orang Tua</h1> -->

<!-- DataTales Example -->
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Ubah Data Anak</h6>
</div>
<div class="card-body">
    <form method="POST" action="/data-anak/{{ $dataAnak->id }}/edit">
    @csrf
    @method('patch')
    @include('dataAnak.partials.form-control')
    </form>
</div>  
@endsection