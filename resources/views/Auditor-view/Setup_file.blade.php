@extends('dashboard.Sidebar-nav-Auditor')
@section('title-auditor', 'SMAS | Proses Audit')
@section('sidebar-auditor-heading', 'Auditor')
@section('audit-profile-id', 'Auditor')
@section('audit-subtitle-page', 'Setup')
@section('audit-subtitle-page2', 'Setup File')
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
        <!-- Nama Unit -->
        <div class="judul">
            <h1 class="h2 text-gray-800 left-text">Nama Unit : <span id="unit-name">Fatisda</span></h1>
        </div>
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">@yield('audit-table-title')</h6>
                <a href="#"><button type="button" class="btn btn-primary" style="border-radius: 10px; font-size: 1.2vw; width: 11vw; margin-top: 0px; padding: 5px;">
                Closing Periode
                </button></a>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-area">
                    <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nama Unit</th>
                        <th scope="col">Nama Ruang Lingkup</th>
                        <th scope="col">File Ruang Lingkup Auditee</th>
                        <th scope="col">Jenis Ruang Lingkup</th>
                        <th scope="col">Nama PIC Auditee</th>
                        <th scope="col">File KTA</th>
                        <th scope="col">File Feedback</th>
                        </tr>
                </thead>
                <tbody style="font-size: 1vw;">
                    @foreach()
                    <tr>
                        <td rowspan="4">
                            Fatisda
                        </td>
                        <tr>
                            <td>Laporan Keuangan</td>
                            <td>File belum tersedia<div class="button-container">
                                <a href="#">
                                    <button type="button" class="btn btn-primary download-button" style="border-radius: 10px; font-size: 1vw; width: 6vw; padding: 5px; background-color: #22be96; border-color: #22be96;">
                                        Download
                                    </button>
                                </a>
                            </div></td>
                            <td>Keuangan</td>
                            <td>Tatang</td>
                            <td class="action" >
                                <a href="#"><button type="button" class="btn btn-primary" style="border-radius: 10px; font-size: 1vw; width: 6vw; margin-top: 0vh;">Unggah</button> </a>
                                <button type="button" class="btn btn-danger" style="border-radius:10px; font-size: 1vw; width: 6vw;  margin-top: 0vh;">Hapus</button>
                            </td>
                            <td class="action" >
                                <a href="#"><button type="button" class="btn btn-primary" style="border-radius: 10px; font-size: 1vw; width: 6vw; padding: 5px; background-color: #22be96; border-color: #22be96; margin-top: -0.22vh;">
                                Download
                                </button> </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Laporan Rekrutmen <div class="button-container">
                                <a href="#">
                                    <button type="button" class="btn btn-primary download-button" style="border-radius: 10px; font-size: 1vw; width: 6vw; padding: 5px; background-color: #22be96; border-color: #22be96;">
                                        Download
                                    </button>
                                </a>
                            </div></td>
                            <td>SDM</td>
                            <td>Iwan</td>
                            <td class="action" >
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Laporan Pengadaan <br> Barang <style>
                                .button-container {
                                    display: flex;
                                    justify-content: flex-end;
                                }
                            
                                .download-button {
                                    margin-left: 8vw;
                                    margin-top: -4.5vh;
                                    font-size: 0.75vw;
                                    width: 7vw;
                                }
                            </style>
                            
                            <div class="button-container">
                                <a href="#">
                                    <button type="button" class="btn btn-primary download-button" style="border-radius: 10px; font-size: 1vw; width: 6vw; padding: 5px; background-color: #22be96; border-color: #22be96;">
                                        Download
                                    </button>
                                </a>
                            </div></td>
                            <td>Asset</td>
                            <td>Agus</td>
                            <td class="action" >
                                
                            </td>
                            <td></td>
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