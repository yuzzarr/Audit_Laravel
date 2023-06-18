<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data User</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('assets/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('assets/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin -index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-smile"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SM Audit System <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="admin -index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Admin
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Standar</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="admin -index.html">Standar</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Data User Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser"
                    aria-expanded="true" aria-controls="collapseUser">
                    <i class="fas fa-fw fa-chart-area"></i> 
                    <span>User</span>
                </a>
                <div id="collapseUser" class="collapse" aria-labelledby="headingUser"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="admin - data akun.html">Data Akun</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Data Setup Menu-->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSetup"
                    aria-expanded="true" aria-controls="collapseSetup">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Setup</span>
                </a>
                <div id="collapseSetup" class="collapse" aria-labelledby="headingSetup"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="admin - setup periode.html">Setup Periode Audit</a>
                        <a class="collapse-item" href="admin - setup unit.html">Setup Unit</a>
                    </div>
                </div>
            </li>
            <div class="sidebar-heading">
            </div>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                            aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                        placeholder="Search for..." aria-label="Search"
                                        aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>
                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                            <img class="img-profile rounded-circle"
                                src="{{'assets/img/undraw_profile.svg'}}">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            <!-- <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a> -->
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>

            </nav>
            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"> <b>Setup Periode</b> / Edit Periode</h1>
                    </div>

                    <div class="card shadow mb-4" style="height: 38rem;">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Periode</h6>
                            <!--a href="admin - setup periode.html"--><button type="submit" class="btn btn-primary" style="border-radius: 10px; font-size: 1.2vw; width: 6vw; margin-top: 0px; padding: 5px;">Edit</button></a>
                        </div>
                        <!-- Card Body -->
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
                                            <input type="file" name="file_sk" required="required" value="{{ $p->file_sk }}" class="form-control" id="form-file" style="width: 45vw; padding: 0; height: fit-content;" >
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; Pemweb 2023</span>
                            </div>
                        </div>
                    </footer>
                    <!-- End of Footer -->
                    </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
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

    <!-- Page level custom scripts -->
    <script src="{{asset('assets/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('assets/demo/chart-pie-demo.js')}}"></script>

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