@extends('dashboard.Sidebar-nav-Auditor')
@section('title-auditor', 'SMAS | Standar Ruang Lingkup')
@section('sidebar-auditor-heading', 'Auditor')
@section('audit-profile-id', 'Auditor')
@section('audit-subtitle-page', 'Setup')
@section('audit-subtitle-page2', 'Standar / Edit Standar')
@section('audit-table-title', 'Standar Ruang Lingkup')
<!-- Main Content -->      
@section('content-audit')

<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><b>@yield('audit-subtitle-page')</b> / @yield('audit-subtitle-page2')</h1>
        </div>
        <div class="card shadow mb-4" style="height: 380px;">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"> @yield('audit-table-title')</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-area" >
                    <div class="row-contain" style="margin-left: -2vw;"> 
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <!--div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nama Unit</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" style="width: 100%;" placeholder="Masukkan nama unit">
                                    </div-->
                                    <div class="mb-3">
                                        <label class="visually-hidden" for="specificSizeSelect">Jenis Ruang Lingkup</label> <br>
                                        <select class="form-control" id="specificSizeSelect" style="width: 100%; margin-bottom: 1.5vh;">
                                            <option selected>-- Pilih jenis ruang lingkup --</option>
                                            <option value="1">Keuangan</option>
                                            <option value="2">SDM</option>
                                            <option value="3">Asset</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nama Ruang Lingkup</label>
                                        <input type="text" value="" name="ruang_lingkup" required="required" class="form-control" id="exampleFormControlInput1" style="width: 45vw;">
                                        <!--label class="visually-hidden" for="specificSizeSelect">Nama Ruang Lingkup</label> <br>
                                        <select class="form-control" id="specificSizeSelect" style="width: 100%; margin-bottom: 1.5vh;">
                                            <option selected>-- Pilih Ruang Lingkup --</option>
                                            <option value="1">File Laporan LPJ</option>
                                            <option value="2">File LPJ</option>
                                            <option value="3">File Presensi</option>
                                            <option value="3">File Rekrutmen</option>
                                            <option value="3">File Pengadaan Barang</option>
                                            <option value="3">File Evaluasi</option>
                                        </select-->
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="visually-hidden" for="specificSizeSelect">File Audit</label> <br>
                                        <input class="form-control" type="file" id="formFileMultiple" multiple style="width: 100%; padding: 0%;">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nama PIC Auditee Unit</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" style="width: 100%;" placeholder="Masukkan PIC Auditee">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <a href="#"><button type="button" class="btn btn-primary" style="border-radius: 12px; font-size: 1.2vw; width: 6vw; margin-top: 0px; padding: 5px; margin-left: 3vw;">Edit</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@include('dashboard.Sidebar-plugins')