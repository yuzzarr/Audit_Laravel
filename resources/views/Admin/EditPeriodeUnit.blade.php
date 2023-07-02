@extends('dashboard.Sidebar-nav')
@section('title', 'Data Unit')
@section('sidebar-heading', 'Admin')
@section('profile-id', 'Admin')
@section('subtitle-page', 'Setup')
@section('subtitle-page2', 'Data Unit/Edit Unit')
@section('table-title', 'Data Unit')
@section('content')

    @foreach($model as $p)
    <form action="/UpdatePeriodeUnit/{{ $p->id_Periode_unit }}" method="post">
        {{ csrf_field() }}
        <div class="card-body">
        <div class="chart-area">
            <div class="row-contain" style="margin-left: 10px;"> 
                <div class="row">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tanggal Audit Unit</label>
                        <input type="date" name="tanggal_audit" value="{{ $p->tanggal_audit }}" required="required" class="form-control" id="exampleFormControlInput1" style="width: 45vw;" placeholder="Masukkan Tanggal Audit">
                    </div> 
                </div>
                <div class="row">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Kepala Auditor</label>
                        <input type="text" name="master_auditor" value="{{ $p->master_auditor }}" required="required" class="form-control" id="exampleFormControlInput1" style="width: 45vw;" placeholder="Masukkan Nama Kepala Auditor">
                    </div> 
                </div>
                <div class="row">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Unit</label>
                        <select name="id_Unit" id="id_Unit">
                            @foreach($unit as $q)
                            x<option value="{{ $q->id_Unit }}">{{ $q->nama_unit }}</option>
                            @endforeach
                        </select>
                    </div> 
                </div>
                <div class="row">
                    
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">No SK</label>
                        <select name="id_Periode" id="id_Periode">
                            @foreach($periode as $q)
                            <option value="{{ $q->id_Periode }}">{{ $q->no_sk }}</option>
                            @endforeach
                        </select>
                    </div> 
                    
                </div>
                <button type="submit" class="btn btn-primary" style="border-radius: 10px; font-size: 1.2vw; width: 6vw; margin-top: 0px; padding: 5px;">Tambah</button></a>
            </div>
        </div>
    </div>
    </form>
    @endforeach

@endsection
@include('layouts.Logout-Modal')    
@include('dashboard.Sidebar-plugins')