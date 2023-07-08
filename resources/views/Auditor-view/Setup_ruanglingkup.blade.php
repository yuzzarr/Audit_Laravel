@extends('dashboard.Sidebar-nav-Auditor')
@section('title-auditor', 'SMAS | Standar Ruang Lingkup')
@section('sidebar-auditor-heading', 'Auditor')
@section('audit-profile-id', 'Auditor')
@section('audit-subtitle-page', 'Setup')
@section('audit-subtitle-page2', 'Standar Ruang Lingkup')
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
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">@yield('audit-table-title')</h6>
                <a href="#"><button type="button" class="btn btn-primary" style="border-radius: 10px; font-size: 1vw; width: 9vw; margin-top: 0px; padding: 5px;">Tambah Standar</button></a>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-area">
                    <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nama Unit</th>
                        <th scope="col">Nama Ruang Lingkup</th>
                        <th scope="col">Jenis Ruang Lingkup</th>
                        <th scope="col">File</th>
                        <th scope="col">Nama PIC Auditee</th>
                        <th scope="col">Aksi</th>
                        </tr>
                </thead>
                <tbody>
                    @foreach()
                    <tr>
                        <td rowspan="4">
                            Fatisda
                        </td>
                        <tr>
                            <td>Laporan Keuangan </td>
                            <td>Keuangan</td>
                            <td></td>
                            <td>Tatang</td>
                            <td class="action" >
                                <a href="#"><button type="button" class="btn btn-primary" style="border-radius: 10px; font-size: 1vw; width: 5vw; margin-top: 0vh;">Edit</button> </a>
                                <button type="button" class="btn btn-danger" style="border-radius:10px; font-size: 1vw; width: 6vw;  margin-top: 0vh;">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Laporan Rekrutmen</td>
                            <td>SDM</td>
                            <td></td>
                            <td>Iwan</td>
                            <td class="action" >
                                <a href="#"><button type="button" class="btn btn-primary" style="border-radius: 10px; font-size: 1vw; width: 5vw; margin-top: 0vh;">Edit</button> </a>
                                <button type="button" class="btn btn-danger" style="border-radius:10px; font-size: 1vw; width: 6vw;  margin-top: 0vh;">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Laporan Pengadaan Barang </td>
                            <td>Asset</td>
                            <td></td>
                            <td>Agus</td>
                            <td class="action" >
                                <a href="#"><button type="button" class="btn btn-primary" style="border-radius: 10px; font-size: 1vw; width: 5vw; margin-top: 0vh;">Edit</button> </a>
                                <button type="button" class="btn btn-danger" style="border-radius:10px; font-size: 1vw; width: 6vw;  margin-top: 0vh;">Hapus</button>
                            </td>
                        </tr>
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