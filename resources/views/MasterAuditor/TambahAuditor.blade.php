<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ketua Auditor</title>
</head>
<body>
    <h2>Tambah Anggota Auditor</h2>
    <br/>
    <br/>
    <a href="/HomeMasterAuditor">Kembali</a>
    <br/>
    <br/>
    <form action="/StoreAuditor" method="post">
        {{ csrf_field() }}
        
        NIP Auditor <input type="text" name="nip" required="required"><br/>
        <input type="submit" value="Simpan Data">
    </form>
</body>
</html>