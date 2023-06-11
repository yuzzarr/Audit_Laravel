<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah User</title>
</head>
<body>
    <h3>Data User</h3>

    <a href="/Home">Kembali</a>

    <br/>
    <br/>

    <form action="/Store" method="post">
        {{ csrf_field() }}
        
        Nama <input type="text" name="name" required="required"><br/>
        Username <input type="text" name="username" required="required"><br/>
        Email <input type="text" name="email" required="required"><br/>
        Passowrd <input type="text" name="password" required="required"><br/>
        NIP <input type="text" name="nip" required="required"><br/>
        Nomor Telepon <input type="text" name="no_telp" required="required"><br/>
        <input type="submit" value="Simpan Data">
    </form>

</body>
</html>