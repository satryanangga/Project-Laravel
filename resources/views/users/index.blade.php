@extends('layout_kia.app', ['title' => 'User'])

@section('content')
@include('.alert')

<!-- Page Heading -->
<!-- <h1 class="h3 mb-2 text-gray-800"></h1> -->
<!-- DataTales Example -->
<div class="card-header py-3">
    <div class="page-header float-right">
        <div class="page-title">
            <a href="{{ route('users.create') }}" class="btn btn-success btn-sm">
                <i class="fa fa-plus"></i> Tambah Data
            </a>
            
        </div>                
    </div>
    <h6 class="m-0 font-weight-bold text-primary">Pengguna User</h6>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Roles</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $key => $user)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                @if(!empty($user->getRoleNames()))
                @foreach($user->getRoleNames() as $v)
                    <label class="badge badge-success">{{ $v }}</label>
                @endforeach
                @endif
            </td>
            <td>
                <!-- <a class="btn btn-info btn-sm" href="{{ route('users.show',$user->id) }}">Show</a> -->
                <a class="btn btn-primary btn-sm" href="{{ route('users.edit',$user->id) }}">Edit</a>
                {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
        </table>
        {!! $data->render() !!}
    </div>
</div>
@endsection