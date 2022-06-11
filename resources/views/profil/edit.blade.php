@extends('layout_kia.app', ['title' => 'Edit user'])

@section('content')
@include('.alert')

<!-- Page Heading -->
<!-- <h1 class="h3 mb-2 text-gray-800"></h1> -->
<!-- DataTales Example -->
<div class="card-header py-3">
<div class="page-header float-right">
                 
</div>
    <h6 class="m-0 font-weight-bold text-primary">Ubah Profil</h6>
</div>
<div class="card-body">
    <div class="row justify-content-center">

        <div class="card o-hidden border-0">
            <div class="card-body p-2">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    {{-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> --}}
                    <div class="col-lg-12">
                        <div class="p-3">
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
                                {!! Form::model($user, ['method' => 'PATCH','route' => ['profil.update', $user->id]]) !!}
                            <div class="form-group row ">
                                <label for="name">Name</label>
                                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control form-control-sm')) !!}
                                @error('name')
                                    <div class="mt-2 text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group row ">
                                <label for="email">Email</label>
                                {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control form-control-sm')) !!}
                                @error('email')
                                    <div class="mt-2 text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group row ">
                                <label for="password">Password</label>
                                {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control form-control-sm')) !!}
                                @error('password')
                                    <div class="mt-2 text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group row ">
                                <label for="confirm-password">Konfirmasi Password</label>
                                {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control form-control-sm')) !!}
                                @error('confirm-password')
                                    <div class="mt-2 text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary btn-sm">Ubah</button>
                                <a href="{{ route('profil') }}" class="btn btn-info btn-sm">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection