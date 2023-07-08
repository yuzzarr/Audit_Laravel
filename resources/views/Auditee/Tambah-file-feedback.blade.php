<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah File</title>
</head>
<body>
    <h2>Tambah File Feedback</h2>
    <br/>
    <br/>
    <a href="/Proses_audit">Kembali</a>
    <br/>
    <br/>
    @foreach($setupfile as $p)
    <form action="/StoreFileFeedback/{{ $p->id_File_setup }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        
        File Feedback
        <input type="file" name="file_feedback" required="required">
        <p>{{ $p->file_feedback }}</p>
        <br/>
        <input type="submit" value="Simpan Data">
    </form>
    @endforeach
</body>
</html>