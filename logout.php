<?php
require_once "connect.php";

unset($_SESSION['username']);
header("location:login.php");
?>
