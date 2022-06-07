<?php
require_once "connect.php";
if(!isset($_SESSION['username'])) {
        header("location:login.php");
} else {
?>
<!DOCTYPE html>
<html>

<head>
    <title>Belajar PHP - Tampilkan Data Identitas</title>
    <link rel="stylesheet" href="style1.css">

</head>

<body>

    <a href="tambah.php" class="button1" > + TAMBAH IDENTITAS</a>
    <a href="logout.php" class="button2" >Logout</a>
    <br />
    <br />
    <table id= "id_1">
        <tr>
            <th><center>NO</center></th>
            <th><center>id Identitas</center></th>
            <th><center>Nama</center></th>
            <th><center>Alamat</center></th>
            <th><center>Nomor HP</center></th>
            <th><center>prodi</center></th>
            <th><center>Edit</center></th>
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
                <td><center>
                    <a href="edit.php?id=<?php echo $d['id_mahasiswa']; ?>" class="button">EDIT</a>
                    <a href="hapus.php?id=<?php echo $d['id_mahasiswa']; ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')" class="button2">HAPUS</a>
                    </center>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>
<?php
}
?>