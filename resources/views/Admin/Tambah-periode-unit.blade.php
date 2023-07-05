@extends('dashboard.Sidebar-nav')
@section('title', 'Data Periode Unit')
@section('sidebar-heading', 'Admin')
@section('profile-id', 'Admin')
@section('subtitle-page', 'Setup')
@section('subtitle-page2', 'Setup Periode Unit / Tambah Periode')
@section('table-title', 'Data Periode Unit')
@section('content')
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"> <b> @yield('subtitle-page') </b> / @yield('subtitle-page2')</h1>
        </div>
        <!-- Content Row -->
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"> @yield('table-title')</h6>
                
                <!--a href="admin - data akun.html"-->
            </div>
            <!-- Card Body -->
            <form action="/StorePeriodeUnit" method="post">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="chart-area">
                        <div class="row-contain" style="margin-left: 10px;"> 
                            <div class="row">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Tanggal Audit Unit</label>
                                    <input type="date" name="tanggal_audit" required="required" class="form-control" id="exampleFormControlInput1" style="width: 45vw;" placeholder="Masukkan Tanggal Audit">
                                </div> 
                            </div>
                            <div class="row">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Kepala Auditor</label>
                                    <input type="text" name="master_auditor" required="required" class="form-control" id="exampleFormControlInput1" style="width: 45vw;" placeholder="Masukkan Nama Kepala Auditor">
                                </div> 
                            </div>
                            <div class="row">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nama Unit</label>
                                    <select name="id_Unit" id="id_Unit">
                                        @foreach($unit as $p)
                                        <option value="{{ $p->id_Unit }}">{{ $p->nama_unit }}</option>
                                        @endforeach
                                    </select>
                                </div> 
                            </div>
                            <div class="row">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">No SK</label>
                                    <select name="id_Periode" id="id_Periode">
                                        @foreach($periode as $p)
                                        <option value="{{ $p->id_Periode }}">{{ $p->no_sk }}</option>
                                        @endforeach
                                    </select>
                                </div> 
                            </div>
                            <button type="submit" class="btn btn-primary" style="border-radius: 10px; font-size: 1.2vw; width: 6vw; margin-top: 0px; padding: 5px;">Tambah</button></a>
                        </div>
                    </div>
                </div>
            </form>

        </div>
@endsection
    </div>
</div>
    
@include('dashboard.Sidebar-plugins-ver2')