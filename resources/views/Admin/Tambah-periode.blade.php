@extends('dashboard.Sidebar-nav')
@section('title', 'Data Periode')
@section('sidebar-heading', 'Admin')
@section('profile-id', 'Admin')
@section('subtitle-page', 'Setup')
@section('subtitle-page2', 'Setup Periode Audit / Tambah Periode')
@section('table-title', 'Data Periode Audit')

<!-- Main Content -->
@section('content')
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"> <b>@yield('subtitle-page') </b> / @yield('subtitle-page2')</h1>
        </div>

        <div class="card shadow mb-4" style="height: 38rem;">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">@yield('table-title')</h6>
            </div>
            <!-- Card Body -->
            <form action="/Store1" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="chart-area">
                        <div class="row-contain" style="margin-left: 10px;"> 
                            <div class="row">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Tanggal Audit</label>
                                    <input type="date" name="tanggal_periode" required="required" class="form-control" id="exampleFormControlInput1" style="width: 45vw;" >
                                </div> 
                            </div>
                            <div class="row">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">No SK Audit</label>
                                    <input type="text" name="no_sk" required="required" class="form-control" id="exampleFormControlInput1" style="width: 45vw;" placeholder="Masukkan No SK Audit">
                                </div> 
                            </div>
                            <div class="row">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">File SK</label>
                                    <input type="file" name="file_sk" required="required" class="form-control" id="form-file" style="width: 45vw; padding: 0; height: fit-content;" placeholder="Pilih file">
                                </div> 
                            </div>
                            <!--div class="row">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Tanggal SK</label>
                                    <input type="date" class="form-control" id="exampleFormControlInput1" style="width: 45vw;" placeholder="Masukkan nama">
                                </div> 
                            </div-->
                            <div class="row">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Ketua SPI</label>
                                    <input type="text" name="ketua_spi" required="required" class="form-control" id="exampleFormControlInput1" style="width: 45vw;" placeholder="Masukkan Nama Ketua">
                                </div> 
                            </div>
                            <div class="row">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">NIP Ketua SPI</label>
                                    <input type="text" name="nip_ketua_spi" required="required" class="form-control" id="exampleFormControlInput1" style="width: 45vw; margin-bottom: 3vh;" placeholder="Masukkan NIP Ketua">
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
<!-- Bootstrap core JavaScript-->
@include('dashboard.Sidebar-plugins')

</body>

</html>
