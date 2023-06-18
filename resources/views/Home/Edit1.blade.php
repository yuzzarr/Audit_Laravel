<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
</head>
<body>
    <h3>Data User</h3>

    <a href="/Home">Kembali</a>

    <br/>
    <br/>

    @foreach($model as $p)
    <form action="/Update1/{{$p->id_Periode}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        
        <h3>{{ $p->id_Periode }}</h3>
        Tanggal Periode <input type="date" name="tanggal_periode" required="required" value="{{ $p->tanggal_periode }}"><br/>
        No SK <input type="text" name="no_sk" required="required" value="{{ $p->no_sk }}"><br/>
        File SK <input type="text" name="file_sk" required="required" value="{{ $p->file_sk }}"><br/>
        Ketua SPI <input type="text" name="ketua_spi" required="required" value="{{ $p->ketua_spi }}"><br/>
        NIP Ketua SPI <input type="text" name="nip_ketua_spi" required="required" value="{{ $p->nip_ketua_spi }}"><br/>
        <input type="submit" value="Simpan Data">
    </form>
    @endforeach

</body>
</html>