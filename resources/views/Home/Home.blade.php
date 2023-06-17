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
</body>
</html>