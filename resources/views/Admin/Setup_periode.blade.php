@extends('dashboard.Sidebar-nav')
@section('title', 'Data Periode')
<!--DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data User</title-->

    <!-- Custom fonts for this template-->
    <!--link href="{{asset('assets/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet"-->

    <!-- Custom styles for this template-->
    <!--link href="{{asset('assets/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top"-->

    <!-- Page Wrapper -->
    <!--div id="wrapper"-->

        <!-- Sidebar -->
        <!--ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar"-->

            <!-- Sidebar - Brand -->
            <!--a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin -index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-smile"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SM Audit System <sup></sup></div>
            </a-->

            <!-- Divider -->
            <!--hr class="sidebar-divider my-0"-->

            <!-- Nav Item - Dashboard -->
            <!--li class="nav-item active">
                <a class="nav-link" href="admin -index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li-->

            <!-- Divider -->
            <!--hr class="sidebar-divider"-->

            <!-- Heading -->
            <!--div class="sidebar-heading">
                Admin
            </div-->

            <!-- Nav Item - Pages Collapse Menu -->
            <!--li class="nav-item">
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
            </li-->

            <!-- Nav Item - Data User Menu -->
            <!--li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser"
                    aria-expanded="true" aria-controls="collapseUser">
                    <i class="fas fa-fw fa-chart-area"></i> 
                    <span>User</span>
                </a>
                <div id="collapseUser" class="collapse" aria-labelledby="headingUser"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/Home">Data Akun</a>
                    </div>
                </div>
            </li-->

            <!-- Nav Item - Data Setup Menu-->
            <!--li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSetup"
                    aria-expanded="true" aria-controls="collapseSetup">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Setup</span>
                </a>
                <div id="collapseSetup" class="collapse" aria-labelledby="headingSetup"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/Setup_periode">Setup Periode Audit</a>
                        <a class="collapse-item" href="admin - setup unit.html">Setup Unit</a>
                    </div>
                </div>
            </li>
            <div class="sidebar-heading">
                
            </div-->

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Halaman</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="login.html">Login</a>
                    </div>
                </div>
            </li> -->

            <!-- Divider -->
            <!--hr class="sidebar-divider d-none d-md-block"-->

            <!-- Sidebar Toggler (Sidebar) -->
            <!--div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul-->
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <!--div id="content-wrapper" class="d-flex flex-column"-->

            <!--nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"-->

                <!-- Sidebar Toggle (Topbar) -->
                <!--button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button-->

                <!-- Topbar Navbar -->
                <!--ul class="navbar-nav ml-auto"-->

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <!--li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a-->
                        <!-- Dropdown - Messages -->
                        <!--div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
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
                    </li-->

                    <div class="topbar-divider d-none d-sm-block"></div>
                    <!-- Nav Item - User Information -->
                    <!--li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                            <img class="img-profile rounded-circle"
                                src="{{'assets/img/undraw_profile.svg'}}">
                        </a-->
                        <!-- Dropdown - User Information -->
                        <!--div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown"-->
                            <!-- <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a> -->
                            <!--div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav-->
            @section('sidebar-heading', 'Admin')
            @section('profile-id', 'Admin')
            <!-- Main Content -->
            @section('subtitle-page', 'Setup')
            @section('subtitle-page2', 'Setup Periode Audit')
            @section('table-title', 'Data Periode')          
            @section('content')
            <div id="content">
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><b> @yield('subtitle-page')</b> / @yield('subtitle-page2')</h1>
                    </div>
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div
                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary"> @yield('table-title')</h6>
                            <a href="/Tambah-periode"><button type="button" class="btn btn-primary" style="border-radius: 10px; font-size: 1.2vw; width: 6vw; margin-top: 0px; padding: 5px;">Tambah</button></a>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-area">

                            <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Tanggal Audit</th>
                                    <th scope="col">No SK Audit</th>
                                    <th scope="col">File SK</th>
                                    <th scope="col">Ketua SPI</th>
                                    <th scope="col">NIP Ketua SPI</th>
                                    <th scope="col">Aksi</th>
                                  </tr>
                            </thead>
                            <tbody>
                                <tr>
                                @foreach($periode as $pr)

                                <tr>
                                    <td>{{ $pr->tanggal_periode }}</td>
                                    <td>{{ $pr->no_sk }}</td>
                                    <td align="center">
                                        <a href="FileSK/{{$pr->file_sk}}"><button class="btn btn-success" type="button">Download</button></a>
                                    </td>
                                    <td>{{ $pr->ketua_spi }}</td>
                                    <td>{{ $pr->nip_ketua_spi }}</td>
                                    <td class="action" >
                                        <a href="Edit1/{{ $pr->id_Periode }}"><button type="button" class="btn btn-primary" style="border-radius: 10px; font-size: 1.2vw; width: 6vw; margin-top: 0vh;">Edit</button> </a>
                                        <a href="Hapus1/{{ $pr->id_Periode }}"><button type="button" class="btn btn-danger" style="border-radius:10px; font-size: 1.2vw; width: 7vw;  margin-top: 0vh;">Hapus</button>
                                    </td>
                                    
                                </tr>
                                @endforeach
                                    
                            </tbody>
                            </table>
            
                            </div>
                        </div>
                    </div>
                    
                    <!-- End of Footer -->
                </div>
                <!-- End of Content Wrapper -->
            </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    @endsection
    
    <!-- Logout Modal-->
    
    

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
    <h3>Data Periode</h3>

    <a href="/Home">Kembali</a>

    <br/>
    <br/>

    <form action="/Store1" method="post">
        {{ csrf_field() }}
        
        Tanggal Periode <input type="date" name="tanggal_periode" required="required"><br/>
        No SK <input type="text" name="no_sk" required="required"><br/>
        File SK <input type="text" name="file_sk" required="required"><br/>
        Ketua SPI <input type="text" name="ketua_spi" required="required"><br/>
        NIP Ketua SPI <input type="text" name="nip_ketua_spi" required="required"><br/>
        <input type="submit" value="Simpan Data">
    </form>

</body>
</html-->