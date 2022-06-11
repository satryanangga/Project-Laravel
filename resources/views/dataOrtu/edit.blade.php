@extends('layout_kia.app', ['title' => 'Ubah Data Ortu'])

@section('content')
@include('alert')
<!-- Page Heading -->
<!-- <h1 class="h3 mb-2 text-gray-800">Tambah Data Orang Tua</h1> -->

<!-- DataTales Example -->
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Ubah Data Orang Tua</h6>
</div>
<div class="card-body">
<form method="post" action="/data-ortu/{{ $dataOrtu->id }}/edit">
    @method('patch')
    @csrf
    @include('dataOrtu.partials.form-control')
</form>
</div>  
@endsection