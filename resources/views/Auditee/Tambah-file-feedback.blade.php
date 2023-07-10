@extends('dashboard.Sidebar-nav-Auditee')
@section('title-auditee', 'SMAS | Proses Audit')
@section('sidebar-auditee-heading', 'Auditee')
@section('auditee-profile-id', 'Auditee')
@section('auditee-subtitle-page', 'Ajuan Audit')
@section('auditee-subtitle-page2', 'Proses Audit / Unggah File Feedback')
@section('auditee-table-title', 'Unggah File Feedback')
<!-- Main Content -->      
@section('content-auditee')

<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><b>@yield('auditee-subtitle-page')</b> / @yield('auditee-subtitle-page2')</h1>
        </div>
        <div class="card shadow mb-4" style="height: 300px;">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"> @yield('auditee-table-title')</h6>
            </div>
            <!-- Card Body -->
            @foreach($setupfile as $p)
            <form action="/StoreFileFeedback/{{ $p->id_File_setup }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
            <div class="card-body">
                <div class="chart-area" >
                    <div class="row-contain" style="margin-left: -3vw;"> 
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="visually-hidden" for="specificSizeSelect">File Feedback</label> <br>
                                        <input class="form-control" name="file_feedback" type="file" id="formFileMultiple" required="required" multiple style="width: 100%; padding: 0%; margin-bottom: 3vh;">
                                        <p>{{ $p->file_feedback }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary" style="border-radius: 12px; font-size: 1.2vw; width: 6vw; margin-top: 0px; padding: 5px; margin-left: 3vw;">Unggah</button>
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
    <h2>Tambah File Feedback</h2>
    <br/>
    <br/>
    <a href="/Proses_audit">Kembali</a>
    <br/>
    <br/>
    @foreach($setupfile as $p)
    <form action="/StoreFileFeedback/{{ $p->id_File_setup }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        
        File Feedback
        <input type="file" name="file_feedback" required="required">
        <p>{{ $p->file_feedback }}</p>
        <br/>
        <input type="submit" value="Simpan Data">
    </form>
    @endforeach
</body>
</html-->