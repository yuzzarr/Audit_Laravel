@extends('dashboard.Sidebar-nav-Auditor')
@section('title-auditor', 'SMAS | Setup File Standar Ruang Lingkup')
@section('sidebar-auditor-heading', 'Auditor')
@section('audit-profile-id', 'Auditor')
@section('audit-subtitle-page', 'Setup')
@section('audit-subtitle-page2', 'Setup File') 
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
        <!-- Nama Unit >
        @foreach($setupfile as $p)
        <div class="judul">
            <h1 class="h2 text-gray-800 left-text">Nama Unit : <span id="unit-name">{{ $p->nama_unit }}</span></h1>
        </div>
        @endforeach-->
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">@yield('audit-table-title')</h6>
                <a href="/Tambah-file2"><button type="button" class="btn btn-primary" style="border-radius: 10px; font-size: 1vw; width: 9vw; margin-top: 0px; padding: 5px;">Tambah Standar</button></a>
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
                @foreach($setupfile as $p)
                <tr>
                    <td>{{ $p->nama_unit }}</td>
                    <td>{{ $p->nama_ruang_lingkup }}</td>
                    <td>{{ $p->nama_jenis_ruang_lingkup }}</td>
                    <td>
                        <a href="FileRuangLingkup/{{$p->file_ruang_lingkup}}"><button class="btn btn-primary download-button" style="border-radius: 10px; font-size: 1vw; width: 6vw; padding: 5px; background-color: #22be96; border-color: #22be96; type="button">Download</button></a>
                    </td>
                    <td>{{ $p->nama }}</td>
                    <td class="action" >
                        <a href="/EditFile2/{{ $p->id_Ruang_lingkup }}"><button type="button" class="btn btn-danger" style="border-radius:10px; font-size: 1.2vw; width: 7vw;  margin-top: 0vh;">Edit</button>
                        <a href="/HapusFile2/{{ $p->id_Ruang_lingkup }}"><button type="button" class="btn btn-danger" style="border-radius:10px; font-size: 1.2vw; width: 7vw;  margin-top: 0vh;">Hapus</button>
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

<!--DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setup File</title>
</head>
<body>
    <h5>Auditor</h5>
    <h2>Setup File</h2>
    <br/>
    <br/>
    <a href="/Tambah-file2">Tambah Setup File</a>
    <br/>
    <br/>
    <a href="/Data_audit2">Data Audit</a>
    <br/>
    <br/>


    <table class="table" border="1">
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
                                    @foreach($setupfile as $p)

                                    <tr>
                                        <td>{{ $p->nama_unit }}</td>
                                        <td>{{ $p->nama_ruang_lingkup }}</td>
                                        <td>{{ $p->nama_jenis_ruang_lingkup }}</td>
                                        <td>
                                            <a href="FileRuangLingkup/{{$p->file_ruang_lingkup}}"><button class="btn btn-success" type="button">Download</button></a>
                                        </td>
                                        <td>{{ $p->nama }}</td>
                                        <td class="action" >
                                            <a href="/EditFile2/{{ $p->id_Ruang_lingkup }}"><button type="button" class="btn btn-danger" style="border-radius:10px; font-size: 1.2vw; width: 7vw;  margin-top: 0vh;">Edit</button>
                                            <a href="/HapusFile2/{{ $p->id_Ruang_lingkup }}"><button type="button" class="btn btn-danger" style="border-radius:10px; font-size: 1.2vw; width: 7vw;  margin-top: 0vh;">Hapus</button>
                                        </td>
                                        
                                    </tr>
                                    @endforeach
                                        
                                </tbody>
                                </table>
</body>
</html-->