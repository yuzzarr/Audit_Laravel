@extends('dashboard.Sidebar-nav')
@section('title', 'SMAS | Data Unit')
@section('sidebar-heading', 'Admin')
@section('profile-id', 'Admin')
@section('subtitle-page', 'Setup')
@section('subtitle-page2', 'Setup Unit')
@section('table-title', 'Data Unit')

<!-- Main Content -->
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
                    <a href="/Tambah-unit"><button type="button" class="btn btn-primary" style="border-radius: 10px; font-size: 1.2vw; width: 6vw; margin-top: 0px; padding: 5px;">Tambah</button></a>
                </div>
                <!-- Card Body -->
                <div class="card-body" style="height: 500px;">
                    <div class="chart-area">
                    <table class="table">
                        <thead>
                            <th scope="col">Id Unit</th>
                            <th scope="col">Nama Unit</th>
                            <th scope="col">Actions</th>
                        </thead>
                        <tbody>
                            @foreach($unit as $p)
                            <tr>
                                <td>{{ $p->id_Unit }}</td>
                                <td>{{ $p->nama_unit }}</td>
                                <td class="action">
                                    <a href="EditUnit/{{ $p->id_Unit }}"><button type="button" class="btn btn-primary" style="border-radius: 10px; font-size: 1.2vw; width: 6vw; margin-top: 0vh;">Edit</button> </a>
                                    <a href="HapusUnit/{{ $p->id_Unit }}"><button type="button" class="btn btn-danger" style="border-radius:10px; font-size: 1.2vw; width: 7vw;  margin-top: 0vh;">Hapus</button>
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
@endsection
   
@include('dashboard.Sidebar-plugins')