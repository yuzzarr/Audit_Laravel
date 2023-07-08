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
    <a href="/Setup_file2">Kembali</a>
    <br/>
    <br/>
    @foreach($setupfile as $p)
    <form action="/UpdateFile2/{{ $p->id_Ruang_lingkup }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        
        Jenis Ruang Lingkup 
        <select name="id_Jenis_ruang_lingkup" id="id_Jenis_ruang_lingkup">
            <option value="{{ $p->id_Jenis_ruang_lingkup }}">{{ $p->nama_jenis_ruang_lingkup }}</option>
            @foreach($jenis_ruang_lingkup as $j)
                @if($p->nama_jenis_ruang_lingkup !== $j->nama_jenis_ruang_lingkup)
                    <option value="{{ $j->id_Jenis_ruang_lingkup }}">{{ $j->nama_jenis_ruang_lingkup }}</option>
                @endif
            @endforeach
        </select>

        Nama Ruang Lingkup
        <input type="text" name="nama_ruang_lingkup" required="required" value="{{ $p->nama_ruang_lingkup }}">
        File Audit
        <input type="file" name="file_ruang_lingkup">
                                            @if($p->file_ruang_lingkup)
                                                <p>{{ $p->file_ruang_lingkup }}</p>
                                            @else
                                                <p>Tidak ada file terlampir</p>
                                            @endif
                                            <br/>
        NIP PIC Auditee
        <input type="input" name="nip" required="required" value="{{ $p->nip }}">
        <br/>
        <input type="submit" value="Simpan Data">
    </form>
    @endforeach
</body>
</html>