<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
</head>
<body>
    <h3>Data User</h3>

    <a href="/Tambah">Tambah User</a>
    <button><a href="{{ route('logout') }}" >Logout</a></button>

    <br/>
    <br/>

    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Username</th>
            <th>Email</th>
            <th>Nomor Telepon</th>
            <th>NIP</th>
            <th>Action</th>
        </tr>

        @foreach($user as $p)

        <tr>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->username }}</td>
            <td>{{ $p->email }}</td>
            <td>{{ $p->no_telp }}</td>
            <td>{{ $p->nip }}</td>
            <td>
                <a href="Edit/{{ $p->id }}">Edit</a>
                <!---->
                <a href="Hapus/{{ $p->id }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>

    <br/>
    <br/>
    <br/>
    <br/>

    <!-- CRUD SET UP PERIODE -->

    <h3>Periode</h3>

    <a href="/Tambah-periode">Tambah Periode</a>

    <br/>
    <br/>

    <table border="1">
        <tr>
            <th>Tanggal Periode</th>
            <th>No SK</th>
            <th>File SK</th>
            <th>Ketua SPI</th>
            <th>NIP Ketua SPI</th>
            <th>Action</th>
        </tr>

        @foreach($periode as $s)

        <tr>
            <td>{{ $s->tanggal_periode }}</td>
            <td>{{ $s->no_sk }}</td>
            <td>{{ $s->file_sk }}</td>
            <td>{{ $s->ketua_spi }}</td>
            <td>{{ $s->nip_ketua_spi }}</td>
            <td>
                <a href="Edit1/{{ $s->id_Periode }}">Edit</a>
                <!---->
                <a href="Hapus1/{{ $s->id_Periode }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>

</body>
</html>