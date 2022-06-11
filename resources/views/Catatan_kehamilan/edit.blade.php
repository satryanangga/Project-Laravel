@extends('layout_kia.app', ['title' => 'Ubah Catatan Kehamilan'])

@section('content')
@include('alert')

<!-- Page Heading -->
<!-- <h1 class="h3 mb-2 text-gray-800">Tambah Data Orang Tua</h1> -->

<!-- DataTales Example -->
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Ubah Catatan Kehamilan</h6>
</div>
<div class="card-body">
  <form method="post" action="/Catatan-kehamilan/{{ $catatanKehamilan->id }}/edit">
    @method('patch')
    @csrf
    @include('Catatan_kehamilan.partials.form-control')
  </form>
</div>  
@endsection