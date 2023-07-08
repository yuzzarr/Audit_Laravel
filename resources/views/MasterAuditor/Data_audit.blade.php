<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setup File</title>
</head>
<body>
    <h2>Data Audit</h2>
    <br/>
    <br/>
    <a href="/HomeMasterAuditor">Home</a>
    <br/>
    <br/>


    <table class="table" border="1">
    <thead>
        <tr>
            <th scope="col">Nama Unit</th>
            <th scope="col">Nama Ruang Lingkup</th>
            <th scope="col">File Ruang Lingkup Auditee</th>
            <th scope="col">Jenis Ruang Lingkup</th>
            <th scope="col">Nama PIC Auditee</th>
            <th scope="col">File KTA</th>
            <th scope="col">File Feedback</th>
        </tr>
    </thead>
    <tbody>
        @foreach($setupfile as $p)
        <tr>
            <td>{{ $p->nama_unit }}</td>
            <td>{{ $p->nama_ruang_lingkup }}</td>
            <td>
                @if ($p->file_audit)
                <a href="FileAudit/{{ $p->file_audit }}"><button class="btn btn-success" type="button">Download</button></a>
                @else
                File belum tersedia
                @endif
            </td>
            <td>{{ $p->nama_jenis_ruang_lingkup }}</td>
            <td>{{ $p->nama }}</td>
            <td>
                @if ($p->file_audit)
                    <a href="/Tambah-file_kta/{{ $p->id_File_setup }}"><button class="btn btn-success" type="button">Unggah</button></a>
                @if ($p->file_kta)
                    <a href="FileKTA/{{ $p->file_kta }}"><button class="btn btn-success" type="button">Download</button></a>
                @endif
                @else
                    File belum tersedia
                @endif
            </td>
            <td>
                @if ($p->file_feedback)
                <a href="FileFeedback/{{ $p->file_feedback }}"><button class="btn btn-success" type="button">Download</button></a>
                @else
                File belum tersedia
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>