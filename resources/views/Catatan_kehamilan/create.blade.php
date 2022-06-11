@extends('layout_kia.app', ['title' => 'Tambah Catatan Kehamilan'])

@section('content')
@include('alert')

<!-- Page Heading -->
<!-- <h1 class="h3 mb-2 text-gray-800">Tambah Data Orang Tua</h1> -->

<!-- DataTales Example -->
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tambah Catatan Kehamilan</h6>
</div>
<div class="card-body">
  <form method="post" action="/Catatan-kehamilan/create">
    @csrf
    @include('Catatan_kehamilan.partials.form-control', ['submit' => 'Tambah'])
  </form>
</div>  
@endsection