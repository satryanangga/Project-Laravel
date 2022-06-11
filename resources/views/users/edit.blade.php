@extends('layout_kia.app', ['title' => 'Edit user'])

@section('content')
@include('.alert')

<!-- Page Heading -->
<!-- <h1 class="h3 mb-2 text-gray-800"></h1> -->
<!-- DataTales Example -->
<div class="card-header py-3">
<div class="page-header float-right">
                 
</div>
    <h6 class="m-0 font-weight-bold text-primary">Ubah Pengguna User</h6>
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
            {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
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
            <label for="email" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
            <div class="col-sm-10">
                {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control form-control-sm')) !!}
                @error('email')
                    <div class="mt-2 text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group row ">
            <label for="password" class="col-sm-2 col-form-label col-form-label-sm">Password</label>
            <div class="col-sm-10">
                {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control form-control-sm')) !!}
                @error('password')
                    <div class="mt-2 text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group row ">
            <label for="confirm-password" class="col-sm-2 col-form-label col-form-label-sm">Konfirmasi Password</label>
            <div class="col-sm-10">
                {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control form-control-sm')) !!}
                @error('confirm-password')
                    <div class="mt-2 text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group row ">
            <label for="role" class="col-sm-2 col-form-label col-form-label-sm">Role</label>
            <div class="col-sm-10">
                    {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control form-control-sm','multiple')) !!}
                @error('role')
                    <div class="mt-2 text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="mb-2">
        <button type="submit" class="btn btn-primary btn-sm">Ubah</button>
            <a href="{{ route('users.index') }}" class="btn btn-info btn-sm">Kembali</a>
        </div>
        
        <!-- <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Name:</strong>
                    {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Email:</strong>
                    {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Password:</strong>
                    {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Confirm Password:</strong>
                    {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Role:</strong>
                    {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div> -->
        {!! Form::close() !!}
    </div>
</div>
@endsection