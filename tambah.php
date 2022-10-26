<!DOCTYPE html>
<html lang="en">
<head>
    <title>From Pembelian BBM</title>
</head>
<body>
    <h1>From Pembelian BBM</h1>
    <form action="proses_tambah.php" method="POST">
        <form>
            <fieldset>
                <p>
                    <label for="nik">NIK:</label>
                    <input type="number" name="nik"/>
</p>
<p>
    <label for="jenis_kendaraan">Jenis Kendaraan:</label>
    <select name="jenis_kendaraan">
        <option value="montor">Montor</option>
        <option value="mobil">Mobil</option>
        <option value="truk">Truk</option>
        <option value="bis">Bis</option>
        <option value="tossa">Tossa</option>
</select>
</p>
<p>
    <input type="submit" value="Kirim Data" name="tambah"/>
</p>
</fieldset>
</form>
</body>
</html>