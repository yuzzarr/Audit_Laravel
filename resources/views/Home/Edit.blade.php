<!DOCTYPE html>
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
    <form action="/Update/{$p->id}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        
        Nama <input type="text" name="name" required="required" value="{{ $p->nama }}"><br/>
        Username <input type="text" name="username" required="required" value="{{ $p->username }}"><br/>
        Email <input type="text" name="email" required="required" value="{{ $p->email }}"><br/>
        Password <input type="text" name="password" required="required" value="{{ $p->password }}"><br/>
        NIP <input type="text" name="nip" required="required" value="{{ $p->nip }}"><br/>
        Nomor Telepon <input type="text" name="no_telp" required="required" value="{{ $p->no_telp }}"><br/>
        <input type="submit" value="Simpan Data">
    </form>
    @endforeach

</body>
</html>