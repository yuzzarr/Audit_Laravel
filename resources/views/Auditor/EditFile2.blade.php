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
            @foreach($setupfile as $p)
            <form action="/UpdateFile2/{{ $p->id_Ruang_lingkup }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
            <div class="card-body">
                <div class="chart-area" >
                    <div class="row-contain" style="margin-left: -2vw;"> 
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="visually-hidden" for="specificSizeSelect">Jenis Ruang Lingkup</label> <br>
                                        <select class="form-control" name="id_Jenis_ruang_lingkup" id="specificSizeSelect" style="width: 100%; margin-bottom: 1.5vh;">
                                            <option selected>-- Pilih jenis ruang lingkup --</option>
                                            <option value="{{ $p->id_Jenis_ruang_lingkup }}">{{ $p->nama_jenis_ruang_lingkup }}</option>
                                            @foreach($jenis_ruang_lingkup as $j)
                                                @if($p->nama_jenis_ruang_lingkup !== $j->nama_jenis_ruang_lingkup)
                                                    <option value="{{ $j->id_Jenis_ruang_lingkup }}">{{ $j->nama_jenis_ruang_lingkup }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nama Ruang Lingkup</label>
                                        <input type="text" name="nama_ruang_lingkup" required="required" value="{{ $p->nama_ruang_lingkup }}" class="form-control" id="exampleFormControlInput1" style="width: 100%;">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="visually-hidden" for="specificSizeSelect">File Audit</label> <br>
                                        <input class="form-control" type="file" name="file_ruang_lingkup" id="formFileMultiple" multiple style="width: 100%; padding: 0%;">
                                        @if($p->file_ruang_lingkup)
                                                <p>{{ $p->file_ruang_lingkup }}</p>
                                            @else
                                                <p>Tidak ada file terlampir</p>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">NIP PIC Auditee</label>
                                        <input type="text" class="form-control" name="nip" required="required" value="{{ $p->nip }}" id="exampleFormControlInput1" style="width: 100%;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary" style="border-radius: 12px; font-size: 1.2vw; width: 6vw; margin-top: 0px; padding: 5px; margin-left: 3vw;">Edit</button>
                    </div>
                </div>
            </div>
            </form>
            @endforeach
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
    <title>Tambah File</title>
</head>
<body>
    <h5>Auditor</h5>
    <h2>Tambah File</h2>
    <br/>
    <br/>
    <a href="/Setup_file2">Kembali</a>
    <br/>
    <br/>
    @foreach($setupfile as $p)
    <form action="/UpdateFile2/{{ $p->id_Ruang_lingkup }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        
        Jenis Ruang Lingkup 
        <select name="id_Jenis_ruang_lingkup" id="id_Jenis_ruang_lingkup">
            <option value="{{ $p->id_Jenis_ruang_lingkup }}">{{ $p->nama_jenis_ruang_lingkup }}</option>
            @foreach($jenis_ruang_lingkup as $j)
                @if($p->nama_jenis_ruang_lingkup !== $j->nama_jenis_ruang_lingkup)
                    <option value="{{ $j->id_Jenis_ruang_lingkup }}">{{ $j->nama_jenis_ruang_lingkup }}</option>
                @endif
            @endforeach
        </select>

        Nama Ruang Lingkup
        <input type="text" name="nama_ruang_lingkup" required="required" value="{{ $p->nama_ruang_lingkup }}">
        File Audit
        <input type="file" name="file_ruang_lingkup">
                                            @if($p->file_ruang_lingkup)
                                                <p>{{ $p->file_ruang_lingkup }}</p>
                                            @else
                                                <p>Tidak ada file terlampir</p>
                                            @endif
                                            <br/>
        NIP PIC Auditee
        <input type="input" name="nip" required="required" value="{{ $p->nip }}">
        <br/>
        <input type="submit" value="Simpan Data">
    </form>
    @endforeach
</body>
</html-->