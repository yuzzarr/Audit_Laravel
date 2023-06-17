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

    <form action="/Edit" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        
        Nama <input type="text" name="name" required="required" value="{{ $user->name }}"><br/>
        Username <input type="text" name="username" required="required" value="{{ $user->username }}"><br/>
        Email <input type="text" name="email" required="required" value="{{ $user->email }}"><br/>
        Password <input type="text" name="password" required="required" value="{{ $user->password }}"><br/>
        NIP <input type="text" name="nip" required="required" value="{{ $user->nip }}"><br/>
        Nomor Telepon <input type="text" name="no_telp" required="required" value="{{ $user->no_telp }}"><br/>
        <input type="submit" value="Simpan Data">
    </form>

</body>
</html>