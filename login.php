<?php
require_once "connect.php";
if(isset($_SESSION['username'])) {
        header("location:index.php");
} else {
?>
<html>
	<head>
		<title>Form Login</title>
		<style>
		body{
		background-image: linear-gradient(#00FFFF, #F0FFFF);
		}
		fieldset{
		margin:50 500;
		width:250px;
		height:150px;

		}
		label{
		font-family:tahoma;
		color:black;
		}
		legend{
		font-family:algerian;
		color:black;
		}
		input{
		margin:5px;
		padding:5px;
		}
		</style>
	</head>

	<body>
  <marquee><h1>Selamat Datang</h1></marquee>
		<form action="proses.php" method="post">
		<fieldset>
			<table >
				<legend>ANDA HARUS LOGIN</legend>
				<tr>
				<td><label>Username</label>
				<td><input name="user" type="username" placeholder="Username"></td></tr>

				<td><label>Password</label>
				<td><input name="pass" type="password" placeholder="Password"></td></tr>
				<td></td>
				<td><input name="login" type="submit" value="LOGIN"></td></tr>
			</table>
		</fieldset>
		</form>
	</body>
</html>
<?php } ?>
