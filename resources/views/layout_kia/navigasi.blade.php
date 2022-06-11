<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-clinic-medical" style="font-size: 25px;"></i>
        </div>
        <div class="sidebar-brand-text mx-2" style="font-size: 9px;">SISTEM INFORMASI PRAKTEK MANDIRI BIDAN BERBASIS WEB PADA BIDAN Manuela Mendes Ribeiro A.Md.Keb</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
{{-- 
    @can('view kunjungan')
    <!-- Nav Item - Dashboard -->
    <li class="nav-item{{ request()->is('/kunjungan') ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('kunjungan') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Kunjungan</span>
        </a>
    </li>
    @endcan --}}
    <!-- Nav Item - Dashboard -->
    <li class="nav-item{{ request()->is('/') ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-tachometer-alt"></i>
            <span>dashboard</span>
        </a>
    </li>
    <hr class="sidebar-divider my-0">
    

    @can('view_users')
    <!-- Nav Item - Dashboard -->
    <li class="nav-item{{ request()->is('users') ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('users.index') }}">
            <i class="fas fa-user-friends"></i>
            <span>User</span>
        </a>
    </li>
    @endcan

    {{-- <!-- Nav Item - Pages Collapse Menu -->
    <!-- @can('view_users')
    <li class="nav-item">
        <a class="nav-link collapsed{{ request()->is('#') ? ' active' : '' }}" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-user-friends"></i>
            <span>Admin & Role</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pengguna</h6>
                <a class="collapse-item{{ request()->is('users.index') ? ' active' : '' }}" href="{{ route('users.index') }}">User</a>
                @can('view_roles')
                <a class="collapse-item{{ request()->is('roles.index') ? ' active' : '' }}" href="">Role</a>
                @endcan
            </div>
        </div>
    </li>
    @endcan --> --}}

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Data
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
            aria-expanded="true" aria-controls="collapseThree">
            <i class="fas fa-wheelchair"></i>
            <span>Data Pasien</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Pasien:</h6>
                <a class="collapse-item{{ request()->is('data-ortu') ? ' active' : '' }}" href="{{ route('data-ortu') }}">Data Orang Tua</a>
                <a class="collapse-item{{ request()->is('data-anak') ? ' active' : '' }}" href="{{ route('data-anak') }}">Data Anak</a>
            </div>
        </div>
    </li>

    @can('view_data_pemeriksaan')
    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link collapsed{{ request()->is('#') ? ' active' : '' }}" href="#" data-toggle="collapse" data-target="#collapseTwo1"
            aria-expanded="true" aria-controls="collapseTwo1">
            <i class="fas fa-user-md"></i>
            <span>Data Pemeriksaan</span>
        </a>
        <div id="collapseTwo1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Pemeriksaan:</h6>
                @can('view_catatan_anak')
                <a class="collapse-item{{ request()->is('catatan-anak') ? ' active' : '' }}" href="{{ route('catatan-anak') }}">Catatan Anak</a>
                @endcan
                @can('view_catatan_kehamilan')
                <a class="collapse-item{{ request()->is('Catatan-kehamilan') ? ' active' : '' }}" href="{{ route('Catatan-kehamilan') }}">Catatan Kehamilan</a>
                @endcan
                @can('view_catatan_persalinan')
                <a class="collapse-item{{ request()->is('Catatan-persalinan') ? ' active' : '' }}" href="{{ route('Catatan-persalinan.index') }}">Catatan Persalinan</a>
                @endcan
            </div>
        </div>
    </li>
    @endcan

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Hasil
    </div>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link collapsed{{ request()->is('#') ? ' active' : '' }}" href="#" data-toggle="collapse" data-target="#collapseTwo2"
            aria-expanded="true" aria-controls="collapseTwo2">
            <i class="fas fa-id-badge"></i>
            <span>Hasil Pemeriksaan</span>
        </a>
        <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Hasil Pemeriksaan:</h6>
                <a class="collapse-item{{ request()->is('hasil-catatan-anak') ? ' active' : '' }}" href="{{ route('hasil-catatan-anak') }}"> Hasil Catatan Anak</a>
                <a class="collapse-item{{ request()->is('hasil-catatan-kehamilan') ? ' active' : '' }}" href="{{ route('hasil-catatan-kehamilan') }}">Hasil Catatan Kehamilan</a>
                <a class="collapse-item{{ request()->is('hasil-catatan-persalinan') ? ' active' : '' }}" href="{{ route('hasil-catatan-persalinan') }}">Hasil Catatan Persalinan</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->