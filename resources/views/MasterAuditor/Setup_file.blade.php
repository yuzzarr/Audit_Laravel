<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setup File</title>
</head>
<body>
    <h2>Setup File</h2>
    <br/>
    <br/>
    <a href="/Tambah-file">Tambah Setup File</a>
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
                                        <th scope="col">Jenis Ruang Lingkup</th>
                                        <th scope="col">File</th>
                                        <th scope="col">Nama PIC Auditee</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($setupfile as $p)

                                    <tr>
                                        <td>{{ $p->nama_unit }}</td>
                                        <td>{{ $p->nama_ruang_lingkup }}</td>
                                        <td>{{ $p->nama_jenis_ruang_lingkup }}</td>
                                        <td>
                                            <a href="FileRuangLingkup/{{$p->file_ruang_lingkup}}"><button class="btn btn-success" type="button">Download</button></a>
                                        </td>
                                        <td>{{ $p->nama }}</td>
                                        <td class="action" >
                                            <a href="/EditFile/{{ $p->id_Ruang_lingkup }}"><button type="button" class="btn btn-danger" style="border-radius:10px; font-size: 1.2vw; width: 7vw;  margin-top: 0vh;">Edit</button>
                                            <a href="/HapusFile/{{ $p->id_Ruang_lingkup }}"><button type="button" class="btn btn-danger" style="border-radius:10px; font-size: 1.2vw; width: 7vw;  margin-top: 0vh;">Hapus</button>
                                        </td>
                                        
                                    </tr>
                                    @endforeach
                                        
                                </tbody>
                                </table>
</body>
</html>