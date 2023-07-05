@extends('dashboard.Sidebar-nav')
@section('title', 'Data Unit')
@section('sidebar-heading', 'Admin')
@section('profile-id', 'Admin')
@section('subtitle-page', 'Setup')
@section('subtitle-page2', 'Setup Unit / Edit Unit')
@section('table-title', 'Data Unit')

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
            <form action="/UpdateUnit/{{ $p->id_Unit }}" method="post">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="chart-area">
                        <div class="row-contain" style="margin-left: 10px;"> 
                            <div class="row">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nama Unit</label>
                                    <input type="text" name="nama_unit" value="{{ $p->nama_unit }}" required="required" class="form-control" id="exampleFormControlInput1" style="width: 45vw;" placeholder="Masukkan Nama Unit">
                                </div> 
                            </div>
                            <button type="submit" class="btn btn-primary" style="border-radius: 10px; font-size: 1.2vw; width: 6vw; margin-top: 0px; padding: 5px;">Edit</button></a>
                        </div>
                    </div>
                </div>
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection


@include('layouts.Logout-Modal')    
@include('dashboard.Sidebar-plugins')