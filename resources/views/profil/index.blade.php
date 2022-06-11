@extends('layout_kia.app', ['title' => 'User'])

@section('content')
@include('.alert')

<!-- Page Heading -->
<!-- <h1 class="h3 mb-2 text-gray-800"></h1> -->
<!-- DataTales Example -->
<div class="card-header py-3">
    <div class="page-header float-right">
        <div class="page-title">
            
        </div>                
    </div>
    <h6 class="m-0 font-weight-bold text-primary">Profil</h6>
</div>
<div class="card-body">
    <div class="continer">
        <div class="row justify-content-center">

              <div class="card o-hidden border-0">
                  <div class="card-body p-4">
                      <!-- Nested Row within Card Body -->
                      <div class="row">
                          {{-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> --}}
                          <div class="col-lg-12">
                              <div class="p-2">
                                  <div class="text-center m-2">
                                      <img width="80" class="img-profile rounded-circle"
                                    src="{{ asset('dashboard/img/undraw_profile.svg') }}">
                                  </div>
                                  <div class="text-center">
                                    <div class="form-group">
                                      <h5>{{ $user->name }}</h4>
                                      {{ $user->email }}
                                    </div>
                                  </div>
                                  <div class="text-center">
                                    <a class="btn btn-primary btn-sm" href="{{ route('profil.edit',$user->id) }}">Edit</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

      </div>

    </div>
</div>
@endsection