<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ketua Auditor</title>
</head>
<body>
    <h2>Anggota Auditor</h2>
    <br/>
    <br/>
    <a href="/TambahAuditor">Tambah Anggoa Auditor</a>
    <br/>
    <br/>
    <a href="/Setup_file">setup file</a>
    <br/>
    <br/>
    <a href="/Data_audit">Data Audit</a>
    <br/>
    <br/>


    <table class="table" border="1">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Nomor Telepon</th>
                                        <th scope="col">NIP</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($auditor as $p)

                                    <tr>
                                        <td>{{ $p->nama }}</td>
                                        <td>{{ $p->email }}</td>
                                        <td>{{ $p->no_telp }}</td>
                                        <td>{{ $p->nip }}</td>
                                        <td class="action" >
                                            <a href="HapusAuditor/{{ $p->id_Auditor }}"><button type="button" class="btn btn-danger" style="border-radius:10px; font-size: 1.2vw; width: 7vw;  margin-top: 0vh;">Hapus</button>
                                        </td>
                                        
                                    </tr>
                                    @endforeach
                                        
                                </tbody>
                                </table>
</body>
</html>