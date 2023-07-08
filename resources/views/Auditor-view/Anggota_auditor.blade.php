@extends('dashboard.Sidebar-nav-Mauditor')
@section('title-Mauditor', 'SMAS | Master Auditor - PIC Auditee')
@section('sidebar-Mauditor-heading', 'Master Auditor')
@section('Maudit-profile-id', 'Master Auditor')
@section('Maudit-subtitle-page', 'User')
@section('Maudit-subtitle-page2', 'Anggota Auditor')
@section('Maudit-table-title', 'Data Anggota Auditor')
<!-- Main Content -->      
@section('content-Maudit')

<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><b>@yield('Maudit-subtitle-page')</b> / @yield('Maudit-subtitle-page2')</h1>
        </div>
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">@yield('Maudit-table-title')</h6>
                <a href="#"><button type="button" class="btn btn-primary" style="border-radius: 10px; font-size: 1.2vw; width: 6vw; margin-top: 0px; padding: 5px;">Tambah</button></a>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-area">
                    <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Nomor Telepon</th>
                            <th scope="col">NIP</th>
                            <th scope="col">Aksi</th>
                            </tr>
                    </thead>
                    <tbody>
                        @foreach()
                        <tr>
                            <td>Mark</td>
                            <td>tatang123@gmail.com</td>
                            <td>082123456</td>
                            <td>S123456</td>
                            <td class="action" >
                                <a href="#"><button type="button" class="btn btn-primary" style="border-radius: 10px; font-size: 1.2vw; width: 6vw; margin-top: 0vh;">Edit</button> </a>
                                <button type="button" class="btn btn-danger" style="border-radius:10px; font-size: 1.2vw; width: 7vw;  margin-top: 0vh;">Hapus</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@include('dashboard.Sidebar-plugins')
