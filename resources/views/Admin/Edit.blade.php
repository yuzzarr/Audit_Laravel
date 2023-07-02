@extends('dashboard.Sidebar-nav')
@section('title', 'Tambah Akun User')

            <!-- Main Content -->
            @section('content')
            <div id="content">
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"> <b>Data Akun </b> / Edit Akun</h1>
                    </div>

                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Akun</h6>
                            
                        </div>
                        <!-- Card Body -->
                        @foreach($model as $p)
                        <form action="/Update/{{$p->id}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                        <div class="card-body">
                            <div class="chart-area">
                                <div class="row-contain" style="margin-left: 10px;"> 
                                    <div class="row">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                        <input type="text" name="name" required="required" value="{{ $p->nama }}" class="form-control" id="exampleFormControlInput1" style="width: 45vw;" >
                                    </div> 
                                <!-- Content Row -->
                                <!-- Footer -->
                                    </div>
                                    <div class="row">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                                            <input type="email" name="email" required="required" value="{{ $p->email }}" class="form-control" id="exampleFormControlInput1" style="width: 45vw;" >
                                        </div> 
                                    </div>
                                    <div class="row">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Username</label>
                                            <input type="text" name="username" required="required" value="{{ $p->username }}" class="form-control" id="exampleFormControlInput1" style="width: 45vw;" >
                                        </div> 
                                    </div>
                                    <div class="row">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Password</label>
                                            <input type="password" name="password" required="required" value="{{ $p->password }}" class="form-control" id="exampleFormControlInput1" style="width: 45vw;" >
                                        </div> 
                                    </div>
                                    <div class="row">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Nomor Telepon</label>
                                            <input type="text" name="no_telp" required="required" value="{{ $p->no_telp }}" class="form-control" id="exampleFormControlInput1" style="width: 45vw;" >
                                        </div> 
                                    </div>
                                    <div class="row">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">NIP</label>
                                            <input type="text" name="nip" required="required" value="{{ $p->nip }}" class="form-control" id="exampleFormControlInput1" style="width: 45vw; margin-bottom: 3vh;" >
                                        </div> 
                                    </div>
                                    <!--a href="admin - data akun.html"--><button type="submit" class="btn btn-primary" style="border-radius: 10px; font-size: 1.2vw; width: 6vw; margin-top: 0px; padding: 5px;">Edit</button></a>
                                </div>
                            </div>
                        </div>
                        </form>
                        @endforeach
                    </div>
                    
                    <footer class="sticky-footer bg-white" style="margin-top: 30vh;">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; Pemweb 2023</span>
                            </div>
                        </div>
                    </footer>
                    </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Keluar</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Apakah anda yakin ingin keluar ?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" href="logout">Keluar</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('assets/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('assets/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('aseets/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('assets/chart.js/Chart.min.js')}}"></script>

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