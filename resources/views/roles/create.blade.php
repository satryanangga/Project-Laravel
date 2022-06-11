@extends('layout_kia.app', ['title' => 'Tambah role'])

@section('content')
@include('.alert')

<!-- Page Heading -->
<!-- <h1 class="h3 mb-2 text-gray-800"></h1> -->
<!-- DataTales Example -->
<div class="card-header py-3">
<div class="page-header float-right">
                 
</div>
    <h6 class="m-0 font-weight-bold text-primary">Role</h6>
</div>
<div class="card-body">
    <div class="table-responsive">
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Ada beberapa masalah dengan masukan Anda.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
        <div class="form-group row ">
            <label for="name" class="col-sm-2 col-form-label col-form-label-sm">Name</label>
            <div class="col-sm-10">
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control form-control-sm')) !!}
                @error('name')
                    <div class="mt-2 text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group row ">
            <label for="email" class="col-sm-2 col-form-label col-form-label-sm">Permission</label>
            <div class="col-sm-10">
                @foreach($permission as $value)
                    <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                    {{ $value->name }}</label>
                    <br/>
                @endforeach
                @error('email')
                    <div class="mt-2 text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="mb-2">
        <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
            <a href="{{ route('roles.index') }}" class="btn btn-info btn-sm">Kembali</a>
        </div>
        
        {!! Form::close() !!}
    </div>
</div>
@endsection