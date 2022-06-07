<!DOCTYPE html>
<html>

<head>
    <title>Belajar PHP | Tambah Data Identitas</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body>

    <header>
        <h3>Tambah Identitas</h3>
    </header>
    <form action="proses_tambah.php" method="POST">

    
            <p>
                <label for="nama" >Nama: </label>
                <input type="text" name="nama" placeholder="nama lengkap" required/>
            </p>
            <p>
                <label for="alamat">Alamat: </label>
                <textarea type="text" name="alamat" required></textarea>
            </p>
            <p>
                <label for="telp">Nomor HP: </label>
                <textarea name="telp" required></textarea>
            </p>
            <p>
                <label for="prodi">Prodi: </label>
                <input type="text" name="prodi" placeholder="prodi" required />
            </p>
            <p>
                <input type="submit" value="Daftar" name="daftar" />
            </p>


    </form>

</body>

</html>