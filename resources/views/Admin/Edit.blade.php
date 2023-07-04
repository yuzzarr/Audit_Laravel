@extends('dashboard.Sidebar-nav')
@section('title', 'Edit Akun User')
@section('sidebar-heading', 'Admin')
@section('profile-id', 'Admin')
@section('subtitle-page', 'User')
@section('subtitle-page2', 'Data Akun / Edit Akun')
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
            @foreach($model as $p)
            <form action="/Store" method="post">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="chart-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                        <input type="text" name="name" required="required" value="{{ $p->nama }}" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                                        <input type="email" name="email" required="required" value="{{ $p->email }}" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Username</label>
                                        <input type="text" name="username" required="required" value="{{ $p->username }}" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                                        <input type="password" name="password" required="required" value="{{ $p->password }}" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nomor Telepon</label>
                                        <input type="text" name="no_telp" required="required" value="{{ $p->no_telp }}" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">NIP</label>
                                        <input type="text" name="nip" required="required" value="{{ $p->nip }}" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" style="border-radius: 10px; font-size: 1.2vw; width: 6vw; margin-top: 0px; padding: 5px;">Edit</button>
                        </div>
                    </div>
                </div>
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection


<!-- Logout Modal-->

<!-- Bootstrap core JavaScript -->
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
    <form action="/Update/{{$p->id}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        
        Nama <input type="text" name="name" required="required" value="{{ $p->nama }}"><br/>
        Username <input type="text" name="username" required="required" value="{{ $p->username }}"><br/>
        Email <input type="text" name="email" required="required" value="{{ $p->email }}"><br/>
        Password <input type="text" name="password" required="required" value="{{ $p->password }}"><br/>
        NIP <input type="text" name="nip" required="required" value="{{ $p->nip }}"><br/>
        Nomor Telepon <input type="text" name="no_telp" required="required" value="{{ $p->no_telp }}"><br/>
        <input type="submit" value="Simpan Data">
    </form>
    @endforeach

</body>
</html-->