@extends('dashboard.Sidebar-nav-Mauditor')
@section('title-Mauditor', 'SMAS | Master Auditor - PIC Auditee')
@section('sidebar-Mauditor-heading', 'Master Auditor')
@section('Maudit-profile-id', 'Master Auditor')
@section('Maudit-subtitle-page', 'User')
@section('Maudit-subtitle-page2', 'Anggota Auditor / Edit Anggota Auditor')
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
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-area">
                    <div class="row-contain" style="margin-left: 10px;"> 
                        <div class="row">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" style="width: 45vw;" placeholder="Masukkan nama">
                        </div> 
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" style="width: 45vw;" placeholder="Masukkan email">
                            </div> 
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nomor Telepon</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" style="width: 45vw;" placeholder="Masukkan nomor telepon">
                            </div> 
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">NIP</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" style="width: 45vw; margin-bottom: 1vh;" placeholder="Masukkan NIP">
                            </div> 
                        </div>
                        <a href="#"><button type="button" class="btn btn-primary" style="border-radius: 10px; font-size: 1.2vw; width: 6vw; margin-top: 0px; padding: 5px; margin-left: -1vw;">Edit</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div>
@endsection
@include('dashboard.Sidebar-plugins')
