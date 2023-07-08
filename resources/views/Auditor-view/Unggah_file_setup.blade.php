@extends('dashboard.Sidebar-nav-Auditor')
@section('title-auditor', 'SMAS | Unggah KTA')
@section('sidebar-auditor-heading', 'Auditor')
@section('audit-profile-id', 'Auditor')
@section('audit-subtitle-page', 'Dashboard')
@section('audit-subtitle-page2', 'Audit / Unggah File KTA')
@section('audit-table-title', 'Data Audit')
<!-- Main Content -->      
@section('content-audit')

<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><b>@yield('audit-subtitle-page')</b> / @yield('audit-subtitle-page2')</h1>
        </div>
        <div class="card shadow mb-4" style="height: 300px;">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"> @yield('audit-table-title')</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-area" >
                    <div class="row-contain" style="margin-left: -3vw;"> 
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="visually-hidden" for="specificSizeSelect">Jenis Ruang Lingkup</label> <br>
                                        <select class="form-control" id="specificSizeSelect" style="width: 100%; margin-bottom: 1.5vh;">
                                            <option selected>-- Pilih Jenis Ruang Lingkup --</option>
                                            <option value="1">Keuangan</option>
                                            <option value="2">SDM</option>
                                            <option value="3">Asset</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="visually-hidden" for="specificSizeSelect">File KTA</label> <br>
                                        <input class="form-control" type="file" id="formFileMultiple" multiple style="width: 100%; padding: 0%; margin-bottom: 3vh;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <a href="#"><button type="button" class="btn btn-primary" style="border-radius: 12px; font-size: 1.2vw; width: 6vw; margin-top: 0px; padding: 5px; margin-left: 3vw;">Unggah</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@include('dashboard.Sidebar-plugins')