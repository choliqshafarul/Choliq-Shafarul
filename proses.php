<?php
require_once "connect.php";

if(isset($_POST['login'])) {
  $user = $_POST['user'];
  $pass = $_POST['pass'];
    $sql_login = mysqli_query($db, "SELECT * FROM user WHERE username = '$user' AND password = '$pass' ") or die (mysqli_error($db));
    $cek2 = mysqli_num_rows($sql_login);
    if ($cek2 !== 0) {
        $sql = mysqli_fetch_array($sql_login);
            $_SESSION['username'] = $sql['username'];
            header("location:index.php");
      } else {
          header("location:login.php?pesan=gagal");
      }
    }
       ?>
