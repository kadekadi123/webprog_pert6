<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data mahasiswa</title>
</head>
<body>
    
    <h3>Tambah Data MAhasiswa</h3>
    <form action="dbinsertdatamhs.php" method="POST">

        NIM
        <div>
            <input type="text" name="txNIM">
        </div>
        NAMA
        <div>
            <input type="text" name="txNAMA">
        </div>
        Jenis Kelamin
        <div>
            <select name="txJK">
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
        TGL lahir
        <div>
            <input type="date" name="txTALAG">
        </div>
        Jurusan
        <div>
            <select name="txJUR" ></select>
            <option value="MTI">MTI</option>
            <option value="KAB">KAB</option>
        </div>
        Passcode
        <div>
            <input type="password" name="txPASS">
        </div>

        <div>
            <button type="submit">Simpan Data</button>
        </div>

    </form>



</body>
</html>