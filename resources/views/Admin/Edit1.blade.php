@extends('dashboard.Sidebar-nav')
@section('title', 'Edit Periode Audit')
@section('sidebar-heading', 'Admin')
@section('profile-id', 'Admin')
@section('subtitle-page', 'Setup')
@section('subtitle-page2', 'Setup Periode Audit / Edit Periode')
@section('table-title', 'Data Periode Audit')

<!-- Main Content -->
@section('content')
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"> <b> @yield('subtitle-page')</b> / @yield('subtitle-page2')</h1>
        </div>

        <div class="card shadow mb-4" style="height: 38rem;">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"> @yield('table-title')</h6>
                <!--a href="admin - setup periode.html"-->
            </div>
            <!-- Card Body -->

                        @foreach($model as $p)
                        <form action="/Update1/{{ $p->id_Periode }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                        <div class="card-body">
                            <div class="chart-area">
                                <div class="row-contain" style="margin-left: 10px;"> 
                                    <div class="row">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Tanggal Audit</label>
                                        <input type="date" name="tanggal_periode" required="required" value="{{ $p->tanggal_periode }}" class="form-control" id="exampleFormControlInput1" style="width: 45vw;" >
                                    </div> 
                                    </div>
                                    <div class="row">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">No SK Audit</label>
                                            <input type="text" name="no_sk" required="required" value="{{ $p->no_sk }}" class="form-control" id="exampleFormControlInput1" style="width: 45vw;">
                                        </div> 
                                    </div>
                                    <div class="row">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">File SK</label>
                                            <input type="file" name="file_sk" value="{{$p->file_sk}}" class="form-control" id="form-file" style="width: 45vw; padding: 0; height: fit-content;" >
                                            @if($p->file_sk)
                                                <p>{{ $p->file_sk }}</p>
                                            @else
                                                <p>Tidak ada file terlampir</p>
                                            @endif
                                        </div> 
                                    </div>
                                    <!--div class="row">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Tanggal SK</label>
                                            <input type="date" class="form-control" id="exampleFormControlInput1" style="width: 45vw;" >
                                        </div> 
                                    </div-->
                                    <div class="row">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Ketua SPI</label>
                                            <input type="text" name="ketua_spi" required="required" value="{{ $p->ketua_spi }}" class="form-control" id="exampleFormControlInput1" style="width: 45vw;" >
                                        </div> 
                                    </div>
                                    <div class="row">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">NIP Ketua SPI</label>
                                            <input type="text" name="nip_ketua_spi" required="required" value="{{ $p->nip_ketua_spi }}" class="form-control" id="exampleFormControlInput1" style="width: 45vw; margin-bottom: 3vh;" >
                                        </div> 
                                    </div>
                                    <button type="submit" class="btn btn-primary" style="border-radius: 10px; font-size: 1.2vw; width: 6vw; margin-top: 0px; padding: 5px;">Edit</button></a>
                                </div>
                            </div>
                        </div>
                        </form>
                        @endforeach
                    </div>
                    
                    <!-- End of Footer -->
                    </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
@endsection
<!-- Bootstrap core JavaScript-->
@include('dashboard.Sidebar-plugins')


</body>

</html>
<!--DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
</head>
<body>
    <h3>Data User</h3>

    <a href="/Home">Kembali</a>

    <br/>
    <br/>

    @foreach($model as $p)
    <form action="/Update1/{{$p->id_Periode}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        
        <h3>{{ $p->id_Periode }}</h3>
        Tanggal Periode <input type="date" name="tanggal_periode" required="required" value="{{ $p->tanggal_periode }}"><br/>
        No SK <input type="text" name="no_sk" required="required" value="{{ $p->no_sk }}"><br/>
        File SK <input type="text" name="file_sk" required="required" value="{{ $p->file_sk }}"><br/>
        Ketua SPI <input type="text" name="ketua_spi" required="required" value="{{ $p->ketua_spi }}"><br/>
        NIP Ketua SPI <input type="text" name="nip_ketua_spi" required="required" value="{{ $p->nip_ketua_spi }}"><br/>
        <input type="submit" value="Simpan Data">
    </form>
    @endforeach

</body>
</html-->