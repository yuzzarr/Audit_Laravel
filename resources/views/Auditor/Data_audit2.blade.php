<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setup File</title>
</head>
<body>
@php
    $allFeedbackExist = true;
@endphp
@foreach($setupfile as $row)
    @if (!$row->file_feedback)
        @php
            $allFeedbackExist = false;
            break;
        @endphp
    @endif
@endforeach


    <h5>Auditor</h5>
    <h2>Data Audit</h2>
    <br/>
    <br/>
    <a href="/Setup_file2">Setup File</a>
    <br/>
    <br/>
    @if ($allFeedbackExist)
    <form action="/ClosingAudit2" method="GET">
        <button type="submit" class="btn btn-primary">Closing Audit</button>
    </form>
    
    <br/>
    <br/>
    @endif


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
                @if ($p->file_audit && $p->status == 'Open')
                    <a href="/Tambah-file_kta/{{ $p->id_File_setup }}"><button class="btn btn-success" type="button">Unggah</button></a>
                @endif
                @if ($p->file_kta)
                    <a href="FileKTA/{{ $p->file_kta }}"><button class="btn btn-success" type="button">Download</button></a>
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


@php
    $allFeedbackExist = true;
@endphp
@foreach($setupfile as $row)
    @if (!$row->file_feedback)
        @php
            $allFeedbackExist = false;
            break;
        @endphp
    @endif
@endforeach

</body>
</html>