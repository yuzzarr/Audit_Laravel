@extends('dashboard.Sidebar-nav')
@section('title', 'Data Unit')
@section('sidebar-heading', 'Admin')
@section('profile-id', 'Admin')
@section('subtitle-page', 'Setup')
@section('subtitle-page2', 'Data Unit')
@section('table-title', 'Data Unit')
@section('content')
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

@endsection
@include('layouts.Logout-Modal')    
@include('dashboard.Sidebar-plugins')