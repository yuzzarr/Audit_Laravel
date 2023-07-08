@extends('dashboard.Sidebar-nav')
@section('title', 'Data User')
@section('sidebar-heading', 'Admin')
@section('profile-id', 'Admin')
@section('subtitle-page', 'User')
@section('subtitle-page2', 'Data Akun / Tambah Akun')
@section('table-title', 'Data User')

<!-- Main Content -->
@section('content')

<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"> <b>@yield('subtitle-page') </b> / @yield('subtitle-page2')</h1>
        </div>
        <!-- Content Row -->
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">@yield('table-title')</h6>
            </div>
            <!-- Card Body -->
            <form action="/Store" method="post">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="chart-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                        <input type="text" name="name" required="required" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan nama">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                                        <input type="email" name="email" required="required" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Username</label>
                                        <input type="text" name="username" required="required" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Username">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                                        <input type="password" name="password" required="required" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Password">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nomor Telepon</label>
                                        <input type="text" name="no_telp" required="required" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan nomor telepon">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">NIP</label>
                                        <input type="text" name="nip" required="required" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan NIP">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" style="border-radius: 10px; font-size: 1.2vw; width: 6vw; margin-top: 0px; padding: 5px;">Tambah</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
<!-- End of Footer -->
</div>
    <!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->


<!-- Bootstrap core JavaScript-->
@include('dashboard.Sidebar-plugins')

</body>

</html>

<!--DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah User</title>
</head>
<body>
    <h3>Data User</h3>

    <a href="/Home">Kembali</a>

    <br/>
    <br/>

    <form action="/Store" method="post">
        {{ csrf_field() }}
        
        Nama <input type="text" name="name" required="required"><br/>
        Username <input type="text" name="username" required="required"><br/>
        Email <input type="text" name="email" required="required"><br/>
        Password <input type="text" name="password" required="required"><br/>
        NIP <input type="text" name="nip" required="required"><br/>
        Nomor Telepon <input type="text" name="no_telp" required="required"><br/>
        <input type="submit" value="Simpan Data">
    </form>

    


</body>
</html-->