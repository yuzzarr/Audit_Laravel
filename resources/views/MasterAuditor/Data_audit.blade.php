@extends('dashboard.Sidebar-nav-Mauditor')
@section('title-Mauditor', 'SMAS | Proses Audit')
@section('sidebar-Mauditor-heading', 'Master Auditor')
@section('Maudit-profile-id', 'Master Auditor')
@section('Maudit-subtitle-page', 'Setup')
@section('Maudit-subtitle-page2', 'Setup Proses Audit')
@section('Maudit-table-title', 'Data Audit')
<!-- Main Content -->      
@section('content-Maudit')

@php
    $allFeedbackExist = true;
@endphp
@foreach($setupfile as $row)
    @if (!$row->file_feedback)
        @php
            $allFeedbackExist = false;
            break;
        @endphp
    @endif
@endforeach

<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><b>@yield('Maudit-subtitle-page')</b> / @yield('Maudit-subtitle-page2')</h1>
        </div>
        <!-- Nama Unit >
        <div class="judul">
            <h1 class="h2 text-gray-800 left-text">Nama Unit : <span id="unit-name">Fatisda</span></h1>
        </div-->
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">@yield('Maudit-table-title')</h6>
                @if ($allFeedbackExist)
                <form action="/ClosingAudit" method="GET">
                    <button type="submit" class="btn btn-primary" style="border-radius: 10px; font-size: 1.2vw; width: 11vw; margin-top: 0px; padding: 5px;">
                    Closing Audit
                    </button>
                </form>
                @endif
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
                    @foreach($setupfile as $p)
                    <tr>
                        <td>{{ $p->nama_unit }}</td>
                        <td>{{ $p->nama_ruang_lingkup }}</td>
                        <td>
                            <div class="button-container">
                            @if ($p->file_audit)
                            <a href="FileAudit/{{ $p->file_audit }}"><button  class="btn btn-primary download-button" style="border-radius: 10px; font-size: 1vw; width: 6vw; padding: 5px; background-color: #22be96; border-color: #22be96;" type="button">Download</button></a>
                            @else
                                File belum tersedia
                            @endif
                            </div>
                        </td>
                        <td>{{ $p->nama_jenis_ruang_lingkup }}</td>
                        <td>{{ $p->nama }}</td>
                        <td>
                            <div class="button-container">
                            <!--@if ($p->file_audit)--> @if ($p->file_audit && $p->status == 'Open')
                                <a href="/Tambah-file_kta2/{{ $p->id_File_setup }}"><button class="btn btn-primary" style="border-radius: 10px; font-size: 1vw; width: 6vw; margin-top: 0vh;" type="button">Unggah</button></a>
                            @endif
                            @if ($p->file_kta)
                                <a href="FileKTA/{{ $p->file_kta }}"><button class="btn btn-primary download-button" style="border-radius: 10px; font-size: 1vw; width: 6vw; padding: 5px; background-color: #22be96; border-color: #22be96;" type="button">Download</button></a>
                            @endif
                            <!--@else
                                File belum tersedia
                            @endif-->
                            </div>
                        </td>
                        <td>
                            <div class="button-container">
                            @if ($p->file_feedback)
                                <a href="FileFeedback/{{ $p->file_feedback }}"><button class="btn btn-primary download-button" style="border-radius: 10px; font-size: 1vw; width: 6vw; padding: 5px; background-color: #22be96; border-color: #22be96;" type="button">Download</button></a>
                            @else
                                File belum tersedia
                            @endif
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
                    @php
                        $allFeedbackExist = true;
                    @endphp
                    @foreach($setupfile as $row)
                        @if (!$row->file_feedback)
                            @php
                                $allFeedbackExist = false;
                                break;
                            @endphp
                        @endif
                    @endforeach
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
    <title>Data Audit</title>
</head>
<body>
@php
    $allFeedbackExist = true;
@endphp
@foreach($setupfile as $row)
    @if (!$row->file_feedback)
        @php
            $allFeedbackExist = false;
            break;
        @endphp
    @endif
@endforeach

    <h2>Data Audit</h2>
    <br/>
    <br/>
    <a href="/HomeMasterAuditor">Home</a>
    <br/>
    <br/>
    @if ($allFeedbackExist)
    <form action="/ClosingAudit" method="GET">
        <button type="submit" class="btn btn-primary">Closing Audit</button>
    </form>
    
    <br/>
    <br/>
    
@endif





<table class="table" border="1">
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
    <tbody>
        @foreach($setupfile as $p)
        <tr>
            <td>{{ $p->nama_unit }}</td>
            <td>{{ $p->nama_ruang_lingkup }}</td>
            <td>
                @if ($p->file_audit)
                    <a href="FileAudit/{{ $p->file_audit }}"><button class="btn btn-success" type="button">Download</button></a>
                @else
                    File belum tersedia
                @endif
            </td>
            <td>{{ $p->nama_jenis_ruang_lingkup }}</td>
            <td>{{ $p->nama }}</td>
            <td>
                @if ($p->file_audit && $p->status == 'Open')
                    <a href="/Tambah-file_kta/{{ $p->id_File_setup }}"><button class="btn btn-success" type="button">Unggah</button></a>
                @endif
                @if ($p->file_kta)
                    <a href="FileKTA/{{ $p->file_kta }}"><button class="btn btn-success" type="button">Download</button></a>
                @endif
            </td>
            <td>
                @if ($p->file_feedback)
                    <a href="FileFeedback/{{ $p->file_feedback }}"><button class="btn btn-success" type="button">Download</button></a>
                @else
                    File belum tersedia
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@php
    $allFeedbackExist = true;
@endphp
@foreach($setupfile as $row)
    @if (!$row->file_feedback)
        @php
            $allFeedbackExist = false;
            break;
        @endphp
    @endif
@endforeach

</body>
</html>