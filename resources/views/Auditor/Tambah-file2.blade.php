<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah File</title>
</head>
<body>
    <h5>Auditor</h5>
    <h2>Tambah File</h2>
    <br/>
    <br/>
    <a href="/Setup_file">Kembali</a>
    <br/>
    <br/>
    <form action="/StoreFile2" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        
        Jenis Ruang Lingkup 
        <select name="id_Jenis_ruang_lingkup" id="id_Jenis_ruang_lingkup">
            @foreach($setupfile as $p)
                <option value="{{ $p->id_Jenis_ruang_lingkup }}">{{ $p->nama_jenis_ruang_lingkup }}</option>
            @endforeach
        </select>
        Nama Ruang Lingkup
        <input type="text" name="nama_ruang_lingkup" required="required">
        File Audit
        <input type="file" name="file_ruang_lingkup" required="required">
        NIP PIC Auditee
        <input type="input" name="nip" required="required">
        <br/>
        <input type="submit" value="Simpan Data">
    </form>
</body>
</html>