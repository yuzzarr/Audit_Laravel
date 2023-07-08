<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah File</title>
</head>
<body>
    <h2>Tambah File KTA</h2>
    <br/>
    <br/>
    <a href="/Data_audit">Kembali</a>
    <br/>
    <br/>
    @foreach($setupfile as $p)
    <form action="/StoreFileKTA/{{ $p->id_File_setup }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        
        File KTA
        <input type="file" name="file_audit" required="required">
        <p>{{ $p->file_kta }}</p>
        <br/>
        <input type="submit" value="Simpan Data">
    </form>
    @endforeach
</body>
</html>