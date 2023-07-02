@extends('dashboard.Sidebar-nav')
@section('title', 'Data Periode Unit')
@section('sidebar-heading', 'Admin')
@section('profile-id', 'Admin')
@section('subtitle-page', 'Setup')
@section('subtitle-page2', 'Data Periode Unit')
@section('table-title', 'Data Periode Unit')
@section('content')
<table class="table">
    <thead>
        <th scope="col">Id Periode Unit</th>
        <th scope="col">Tanggal Audit</th>
        <th scope="col">Master Audit</th>
        <th scope="col">Nama Unit</th>
        <th scope="col">No SK</th>
        <th scope="col">Actions</th>
    </thead>
    <tbody>
        @foreach($periode_unit as $p)
        <tr>
            <td>{{ $p->id_Periode_unit }}</td>
            <td>{{ $p->tanggal_audit }}</td>
            <td>{{ $p->master_auditor }}</td>
            <td>{{ $p->nama_unit }}</td>
            <td>{{ $p->no_sk }}</td>
            <td class="action">
                <a href="EditPeriodeUnit/{{ $p->id_Periode_unit }}"><button type="button" class="btn btn-primary" style="border-radius: 10px; font-size: 1.2vw; width: 6vw; margin-top: 0vh;">Edit</button> </a>
                <a href="HapusPeriodeUnit/{{ $p->id_Periode_unit }}"><button type="button" class="btn btn-danger" style="border-radius:10px; font-size: 1.2vw; width: 7vw;  margin-top: 0vh;">Hapus</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
@include('layouts.Logout-Modal')    
@include('dashboard.Sidebar-plugins')