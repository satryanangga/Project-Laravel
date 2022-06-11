@extends('layout_kia.app', ['title' => 'Role'])

@section('content')
@include('.alert')

<!-- Page Heading -->
<!-- <h1 class="h3 mb-2 text-gray-800"></h1> -->
<!-- DataTales Example -->
<div class="card-header py-3">
    <div class="page-header float-right">
        <div class="page-title">
            <a href="{{ route('roles.create') }}" class="btn btn-success btn-sm">
                <i class="fa fa-plus"></i> Tambah Data
            </a>
            
        </div>                
    </div>
    <h6 class="m-0 font-weight-bold text-primary">Tabel Role</h6>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($roles as $key => $role)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $role->name }}</td>
                <td>
                    <a class="btn btn-info btn-sm" href="{{ route('roles.show',$role->id) }}">Show</a>
                    @can('edit_roles')
                        <a class="btn btn-primary btn-sm" href="{{ route('roles.edit',$role->id) }}">Edit</a>
                    @endcan
                    @can('delete_roles')
                    {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                    @endcan
                </td>
            </tr>
            @endforeach
        </table>
        {!! $roles->render() !!}
    </div>
</div>
@endsection