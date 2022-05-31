<!DOCTYPE html>
<html>

<head>
    <title>Belajar PHP - Tampilkan Data Identitas</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <a href="tambah.php" class="button1" > + TAMBAH IDENTITAS</a>
    <br />
    <br />
    <table id= "id_1">
        <tr>
            <th>NO</th>
            <th>id Identitas</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Nomor HP</th>
            <th>Prodi</th>
            <th>Edit</th>
        </tr>
        <?php
        include 'connect.php';
        $no = 1;
        $data = mysqli_query($db, "SELECT * FROM mahasiswa");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['id_mahasiswa']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['telp']; ?></td>
                <td><?php echo $d['prodi']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $d['id_mahasiswa']; ?>" class="button">EDIT</a>
                    <a href="hapus.php?id=<?php echo $d['id_mahasiswa']; ?>" class="button2">HAPUS</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>