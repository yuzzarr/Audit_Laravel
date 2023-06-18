<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah User</title>
</head>
<body>
    <h3>Data Periode</h3>

    <a href="/Home">Kembali</a>

    <br/>
    <br/>

    <form action="/Store1" method="post">
        {{ csrf_field() }}
        
        Tanggal Periode <input type="date" name="tanggal_periode" required="required"><br/>
        No SK <input type="text" name="no_sk" required="required"><br/>
        File SK <input type="text" name="file_sk" required="required"><br/>
        Ketua SPI <input type="text" name="ketua_spi" required="required"><br/>
        NIP Ketua SPI <input type="text" name="nip_ketua_spi" required="required"><br/>
        <input type="submit" value="Simpan Data">
    </form>

</body>
</html>