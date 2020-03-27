<!DOCTYPE html>
<html>
<head>
	<title>Koneksi Database MySQL</title>
</head>
<body>
<h1>Demo Koneksi Database MySQL</h1>
<?php
$con = mysql_connect("localhost","root","","mydb");

if (mysqli_connect_errno()) {
	echo "Koneksi MySQL Gagal : ".mysqli_connect_error();
	exit();
}
?>
</body>
</html>