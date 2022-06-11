@extends('layout_kia.app', ['title' => 'detail role'])

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
        <div class="form-group row ">
            <label for="name" class="col-sm-2 col-form-label col-form-label-sm">Name</label>
            <div class="col-sm-10">
                {{ $role->name }}
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
                @if(!empty($rolePermissions))
                @foreach($rolePermissions as $v)
                <label class="label label-success">{{ $v->name }},</label>
                @endforeach
                @endif
                @error('email')
                    <div class="mt-2 text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="mb-2">
            <a href="{{ route('roles.index') }}" class="btn btn-info btn-sm">Kembali</a>
        </div>
        
        {!! Form::close() !!}
    </div>
</div>
@endsection