@extends('dashboard.Sidebar-nav')
@section('title', 'Data Unit')
@section('sidebar-heading', 'Admin')
@section('profile-id', 'Admin')
@section('subtitle-page', 'Setup')
@section('subtitle-page2', 'Data Unit/Tambah Unit')
@section('table-title', 'Data Unit')
@section('content')
<form action="/StoreUnit" method="post">
    {{ csrf_field() }}
    <div class="card-body">
        <div class="chart-area">
            <div class="row-contain" style="margin-left: 10px;"> 
                <div class="row">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Unit</label>
                        <input type="text" name="nama_unit" required="required" class="form-control" id="exampleFormControlInput1" style="width: 45vw;" placeholder="Masukkan Nama Unit">
                    </div> 
                </div>
                <button type="submit" class="btn btn-primary" style="border-radius: 10px; font-size: 1.2vw; width: 6vw; margin-top: 0px; padding: 5px;">Tambah</button></a>
            </div>
        </div>
    </div>
</form>
@endsection
@include('layouts.Logout-Modal')    
@include('dashboard.Sidebar-plugins')